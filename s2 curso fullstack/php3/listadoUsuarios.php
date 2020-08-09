<?php require_once("head.php") ?>

<h1 class="text-center">Tabla de Usuarios - Trabajo Practico Manejo de Archivos</h1>

<div class="row my-4 ">
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 border border-primary py-3">

        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Foto</th>
            <?php if(!empty($datosEnArray)) { foreach ($datosEnArray as $usuario) : ?>
            <tr class="table-info">
                <td><a href="perfil.php"><?= $usuario["nombre"]?></a></td>
                <td><?= $usuario["email"]?></td>
                <td><img src="archivos/<?= $usuario["avatar"]?>" class="img-fluid img-thumbnail"></td>
            </tr>
            <?php endforeach; } ?>
            </tr>
            
        </table>


    
    </div>



</div>
</div>
</body>