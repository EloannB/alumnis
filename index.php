<?php
include './assets/data/data.php';
$test = 1;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <title>ALUMNI AFPA</title>
</head>

<body>

  <header>
    <?php
    include 'components/navbar.php'
    ?>
  </header>

  <section id="hero-1">
    <div class="container">
      ALUMNI AFPA
      <p>En tant qu'Alumni AFPA, nous sommes une communauté unie d'individus talentueux qui ont partagé une expérience commune d'apprentissage au sein de cette institution.</p>
    </div>
  </section>

  <div id="jonctionOne">
    <h1>Groupe des anciens élèves</h1>
  </div>

  <section id="hero-2">
    <div id="affichCard">
      <?php foreach ($data as $item) { ?>

        <div class="card-container row">
          <div class="card my-card">
            <img src="./assets/img/portrait-<?= $test ?>.jpg" alt="image membre du groupe">
            <h2><?= $item['name'] ?></h2>
            <p><strong>Téléphone:</strong> <?= $item['phone'] ?></p>
            <p><strong>Email:</strong> <?= $item['email'] ?></p>
            <p><strong>Région:</strong> <?= $item['region'] ?></p>
          </div>
        </div>
      <?php $test++;
      } ?>
    </div>
  </section>



 


  <footer>
    <?php 
    include 'components/footer.php'
    ?>
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>