<?php

include_once __DIR__ . '/movie.php';

if (!empty($_GET) && !empty($_GET['name']) && !empty($_GET['genre'])) {
  $name = $_GET['name'];
  $genre = $_GET['genre'];

  $movies = new movies($name, $genre);
  // var_dump($movies);
}



$arrayMovies = [];

for ($i = 0; $i < 2; $i++) {
  $name = $_GET['name'];
  $genre = $_GET['genre'];

  $movies = new movies($name, $genre);
  $arrayMovies[] = $movies;
}

// var_dump($arrayMovies);

?>



<!doctype html>
<html lang="en">

<head>
  <title>PHP oop 1</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  </header>
  <main class="d-flex align-items-center flex-column">

    <h1 class="my-4">Inserisci un film, magari te lo consiglio</h1>

    <form method="GET">
      <input type="text" placeholder="Inserisci nome film" name="name">
      <input type="text" placeholder="Inserisci genere" name="genre">
      <button class="btn btn-primary" type="submit">Invia</button>
    </form>

    <h2><?php echo 'Nome Film: ' .  $movies->name ?></h2>
    <h3><?php echo 'Genere: ' . $movies->genre ?></h3>
    <h3><?php echo 'Voto: ' . $movies->vote ?></h3>
    <h4><?php echo 'Giudizio: ' . $movies->functionVote() ?></h4>
  </main>
  <footer>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>