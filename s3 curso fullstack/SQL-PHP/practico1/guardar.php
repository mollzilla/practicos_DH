<?php 

// Partiendo de agregarPelicula.php modificarlo para que al enviarse el formulario inserte una nueva película en la base de datos utilizando statements. Sugerencia: crear un nuevo archivo (ej: guardar.php) en donde esté toda la lógica del proceso.

    include('conexion.php');

    $release_date = $_POST["year"]."-".$_POST["month"]."-".$_POST["day"];
    
    $consulta = $conexion->prepare("INSERT INTO movies (title, rating, awards, length, release_date, genre_id) VALUES (:title, :rating, :awards,:duracion, :release_date, :genre_id);");

    $tituloConsulta = $conexion->prepare("SELECT title FROM movies WHERE title = :title");

    $tituloConsulta->bindValue(':title', $_POST["title"]);
    
    $tituloConsulta->execute();
    $tituloExistente = $tituloConsulta->fetch(PDO::FETCH_ASSOC);

    if (strtolower($tituloExistente["title"]) == strtolower($_POST["title"])) {
        echo "Lo sentimos, La pelicula ya existe y no puede guardarse nuevamente";
        exit;
    }

    $consulta->bindValue(':title', $_POST["title"]);
    $consulta->bindValue(':rating', $_POST["rating"]);
    $consulta->bindValue(':awards', $_POST["awards"]);
    $consulta->bindValue(':duracion', $_POST["length"]);
    $consulta->bindvalue(':genre_id', $_POST["genre_id"]);
    $consulta->bindValue(':release_date', $release_date);

    try {
        $consulta->execute();
    } catch (\Throwable $th) {
        echo "No se inserto";
        var_dump($th);
    }

    echo "se inserto correctamente";
    
        

?>