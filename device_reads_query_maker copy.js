// recordar cambiar require por import

const deviceReadAnalogInputsTableByKey = require('./device_read_analog_inputs_enum_type');
const deviceReadDigitalInputsTableByKey = require('./device_read_digital_inputs_enum_type.js');
const deviceReadDigitalOutputsTableByKey = require('./device_read_digital_outputs_enum_type.js');
const deviceReadMetadataTableByKey = require('./device_read_metadata_enum_type');


// estas dos no las estoy usando 
function continuousQuery(aggregateFunction, tableByKey, measurement, originRetentionPolicy, targetRetentionPolicy, interval) {   return continuousQueryMaker(aggregateFunction, continuousQueryFieldsMaker(aggregateFunction,tableByKey), measurement, originRetentionPolicy, targetRetentionPolicy, interval);
};

let continuousQueryFieldsMakerFromObject = (aggregateFunction, tableByKey) =>  // creates a fields and aliases string with same field keys for queries from "table by key" object
  Object.keys(tableByKey).map(continuousQueryField => `${aggregateFunction}(${continuousQueryField}) AS ${continuousQueryField}`).toString();

// fin de no estoy usando

let continuousQueryFieldsMakerFromArray = (keysArray, aggregateFunction) =>  // creates a fields and aliases string with same field keys for queries from "table by key" object
  keysArray.map(key => `${aggregateFunction}(${key}) AS ${key}`).toString();

// -------------------------------------------------------------- queries aplicadas -------------------------

// device_reads: (autogen) ////cambiar inserción a 60d y queries a 60d+1y+final

  // tags: hardware_type, serial_number
const tagKeys = "LAST(hardware_type) AS hardware_type, LAST(serial_number) AS serial_number";

const deviceReadsFieldsMaker = () => {

  let fields = [];

  // fields: analog_input_{xxx}_value (xxx según tabla deviceReadAnalogInputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadAnalogInputsTableByKey)).map(input => `analog_input_${input}_value`));
  //     battery_level   -  clock -    created
  fields = fields.concat(["battery_level", "clock", "created"]);

  // evaluar si me conviene hacer un switch dentro del map

  //     digital_input_{xxx}_disabled_count (xxx según tabla deviceReadDigitalInputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalInputsTableByKey)).map(input => `digital_input_${input}_disabled_count`));
  //     digital_input_{xxx}_enabled_count (xxx según tabla deviceReadDigitalInputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalInputsTableByKey)).map(input => `digital_input_${input}_enabled_count`));
  //     digital_input_{xxx}_last_disabled (xxx según tabla deviceReadDigitalInputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalInputsTableByKey)).map(input => `digital_input_${input}_last_disabled`));
  //     digital_input_{xxx}_last_enabled (xxx según tabla deviceReadDigitalInputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalInputsTableByKey)).map(input => `digital_input_${input}_last_enabled`));
  //     digital_input_{xxx}_state (xxx según tabla deviceReadDigitalInputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalInputsTableByKey)).map(input => `digital_input_${input}_state`));

  //     digital_output_{xxx}_disabled_count (xxx según tabla deviceReadDigitalOutputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalOutputsTableByKey)).map(input => `digital_output_${input}_disabled_count`));
  //     digital_output_{xxx}_disabled_count (xxx según tabla deviceReadDigitalOutputsTableByKey)  
  fields = fields.concat((Object.keys(deviceReadDigitalOutputsTableByKey)).map(input => `digital_output_${input}_disabled_count`));
  //     digital_output_{xxx}_enabled_count (xxx según tabla deviceReadDigitalOutputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalOutputsTableByKey)).map(input => `digital_output_${input}_enabled_count`));
  //     digital_output_{xxx}_last_disabled (xxx según tabla deviceReadDigitalOutputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalOutputsTableByKey)).map(input => `digital_output_${input}_last_disabled`));
  //     digital_output_{xxx}_last_enabled (xxx según tabla deviceReadDigitalOutputsTableByKey)
  fields = fields.concat((Object.keys(deviceReadDigitalOutputsTableByKey)).map(input => `digital_output_${input}_last_enabled`));
  //     digital_output_{xxx}_state (xxx según tabla deviceReadDigitalOutputsTableByKey)  
  fields = fields.concat((Object.keys(deviceReadDigitalOutputsTableByKey)).map(input => `digital_output_${input}_state`));

  //duration  //firmware_version  //geolocation_latitude  //geolocation_longitude  //geolocation_obtained  //     geolocation_radius
  fields = fields.concat(`"duration"`,"firmware_version","geolocation_latitude","geolocation_longitude","geolocation_obtained","geolocation_radius");

  //     metadata_{xxx} (xxx según tabla deviceReadMetadataTableByKey)
  fields = fields.concat((Object.keys(deviceReadMetadataTableByKey)).map(input => `metadata_${input}`));

  ///     outages //rssi//     uptime
  fields = fields.concat("outages", "rssi", "uptime");
  return fields;
}

  // tags no creo que se ponga last, tengo que recordar eso

// console.log(continuousQueryFieldsMakerFromArray("LAST", deviceReadsFieldsMaker()));
  
// como esta si va a ser igual para todos, podria importarla de otro archivo junto con un fieldMaker generico como el de arriba

let continuousQueryMaker = (tagKeys, fieldString, measurement, originRetentionPolicy, targetRetentionPolicy, interval) => 
  `SELECT ${tagKeys}, ${fieldString} INTO "${targetRetentionPolicy}".${measurement} FROM "${originRetentionPolicy}".${measurement} GROUP BY time(${interval});`; //creates CQ from given fieldString, measurement RPs and interval. RP need double quotation if name starts with digit



console.log
(continuousQueryMaker(tagKeys, continuousQueryFieldsMakerFromArray(deviceReadsFieldsMaker(), "LAST"), "device_reads", "autogen", "60d", "1d"));



// ------------------------------------ connect to localDB ---------------------------------//











