<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Furniture</title>

      <link rel="shortcut icon" href="layouts/assets/img/logo.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/logo.jpg" class="brand">
                  <div class="user">Yulia Furniture</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=keluarga_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Ruang Keluarga
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=rtidur_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Ruang Tidur
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=dapur_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Dapur
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Yulia Imanita
            </footer>
      </main>

</body>

</html>