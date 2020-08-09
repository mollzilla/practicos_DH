
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <form>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationServer01">Nombre</label>
        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nombre" value="Mark" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServer02">Apellido</label>
        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Apellido" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="form-group" >
        <label for="edad">Edad</label>
        <?php if (isset($error["edad"])): ?>
        <p class="errors"><?php echo $error["edad"] ?></p>
      <?php endif; ?>
        <input type="edad" name="edad" id="exampleInputEdad">
      </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServerUsername">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
          </div>
          <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
          <div class="invalid-feedback">
            Porfavor seleccione un username.
          </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer03">Provincia</label>
        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Provincia" required>
        <div class="invalid-feedback">
          Porfavor seleccione una Provincia.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationServer04">DNI</label>
        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="DNI" required>
        <div class="invalid-feedback">
          Porfavor ponga su dni.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationServer05">Numero de Tarjeta</label>
        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Numero de tarjeta" required>
        <div class="invalid-feedback">
          Porfavor poner su numero de tarjeta.
        </div>
      </div>
    </div>
    <form class="form-inline">
    <div class="form-group">
      <label for="inputPassword6">Password</label>
      <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
      <small id="passwordHelpInline" class="text-muted">
        Tiene que ser de 8-20 caracteres.
      </small>
    </div>
  </form>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
        <label class="form-check-label" for="invalidCheck3">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          Este de acuerdo antes de registrarse.
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
