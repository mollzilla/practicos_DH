<?php include("head.php");


 if (!empty($persona)) { ?>
    <ul class="list-group text-center mb-2">
       
    <li class="list-group-item list-group-item-success">Usuario: <?=$persona[1]?></li>
    <li class="list-group-item list-group-item-info">Email: <?=$persona[2]?></li>
    <li class="list-group-item list-group-item-info">Avatar: <img src="archivos/<?= $persona[3]?>" class="img-fluid img-thumbnail"></li>
    

    </ul>
 <?php } ?>
