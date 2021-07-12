<?php
include_once 'admin_connect.php';
$result = mysqli_query($conn, "SELECT * FROM user");
?>



<!DOCTYPE html>

<html>

<head>
  <title>
    Noutati Participant
  </title>
  <link rel="stylesheet" href="style_noutatiParticipant.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>

</head>

<body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand"><img src="images/trophy (1).png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="index.html">Home</a>
            <a class="nav-link" href="Regulament.html">Regulament</a>
            <a class="nav-link" href="Organizatori.html">Organizatori</a>
            <a class="nav-link" href="Sponsori.html">Sponsori</a>
            <a class="nav-link" href="Noutati.html">Noutati</a>
            <a class="nav-link" href="Participanti.html">Participanti</a>
            <a class="nav-link" href="Subiecte.html">Subiecte</a>
            <a class="nav-link" href="Rezultate.html">Rezultate</a>
            <a class="nav-link" href="Contact.html">Contact</a>



          </div>
        </div>
      </div>
    </nav>


    <div class="anunt">
      <h2>
        Anunturi legate de desfasurarea concursului de programare "The Beauty of Code" :
      </h2>
    </div>


    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Categorie anunt : </th>
            <th scope="col">Anunt : </th>
          </tr>
        </thead>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $row["categorie"]; ?></td>
            <td><?php echo $row["descriere"]; ?></td>

          </tr>
        <?php
          $i++;
        }
        ?>
      </table>
    <?php
    } else {
      echo "Nu aveti inregistrari in baza de date ! ";
    }
    ?>



    <section class="">
      <footer class="text-center text-white fixed-bottom" style="background-color : black;">
        <div class="container p-2 pb-0">
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3">Creeaza cont si participa !</span>
              <button onclick="document.location='http://localhost/PROIECT/Participanti.html'" type="button" class="btn btn-outline-light btn-rounded">
                Inregistreaza-te!
              </button>

            </p>
          </section>

        </div>


        <div class="text-center p-1" style="background-color:black;">
          <p> &copy; 2021 Copyright </p>

        </div>

      </footer>

    </section>

</body>

</html>

</section>