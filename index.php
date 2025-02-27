<?php
class Movie {
    public $title;
    public $release_year;
    public $director;
    public $description;

    public function __construct($title, $release_year, $director, $description) {
        $this->title = $title;
        $this->release_year = $release_year;
        $this->director = $director;
        $this->description = $description;
    }
}

$movies = array(
    new Movie("Iron Man 3", 2013, "Shane Black", "El descarado pero brillante empresario Tony Stark/Iron Man se enfrentará a un enemigo cuyo poder no conoce límites. Cuando Stark comprende que su enemigo ha destruido su universo personal, se embarca en una angustiosa búsqueda para encontrar a los responsables."),
    new Movie("Los Vengadores", 2012, "Joss Whedon", "Los héroes más poderosos de la Tierra deben unirse y aprender a luchar en equipo si quieren evitar que el travieso Loki y su ejército alienígena esclavicen a la humanidad."),
    new Movie("Guardianes de la Galaxia", 2014, "James Gunn", "Un grupo de criminales intergalácticos deben unirse para detener a un guerrero fanático con planes para purgar el universo.")
);

function generate_movie_html($movie) {
    return "<li>
                <h2>{$movie->title}</h2>
                <p><strong>Año de lanzamiento:</strong> {$movie->release_year}</p>
                <p><strong>Director:</strong> {$movie->director}</p>
                <p><strong>Descripción:</strong> {$movie->description}</p>
            </li>";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación de Películas de Marvel</title>
</head>
<body>
    <h1>Lista de Películas de Marvel</h1>
    <ul>
    <?php foreach($movies as $movie): ?>
        <?php echo generate_movie_html($movie); ?>
    <?php endforeach; ?>
    </ul>
</body>
</html>
