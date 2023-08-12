<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/6acc3fbd7c.js"
      crossorigin="anonymous"
    ></script>
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <title>Kedang Murung</title>
    <link
      rel="icon"
      href="https://upload.wikimedia.org/wikipedia/commons/7/7d/Lambang_Kab._Kutai_Kertanegara.png"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    />
    <link rel="stylesheet" href="show.css" />
</head>
<body>
    <nav class="navbar" id="topNav">
      <ul class="heading">
        <li>
          <a href="#home" class="tengah"><i class="fa-solid fa-house"></i> </a>
        </li>
        <!-- <li><a href="#article" class="tengah"> Sejarah</a></li> -->
        <li><a href="#tagline" class="tengah">Berita</a></li>
        <li><a href="#tagline" class="tengah">Demografi</a></li>
        <li><a href="#maps" class="tengah">Maps</a></li>
        <li><a href="#footer">Kontak</a></li>
        <!-- <li><a href="#about">Wisata</a></li> -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </ul>
    </nav>
    <div class="card">
        <?php
        include '../koneksi.php';
        $id_news = $_GET['id_news'];
        $data = mysqli_query($db,"select * from news where id_news='$id_news'");
        while($tampil = mysqli_fetch_array($data)){
        ?>  
        <div class="desc">
        <h1><?php echo $tampil['title']?></h1>
        <img class="gambar" src="../img./<?php echo $tampil['gambar']?>" alt="dokumentasi" />
        <div class="info">
          <p>
            <i class="koar fa-regular fa-calendar-plus"></i>
            <?php echo $tampil['tanggal']?>
          </p>
          <p class="kontolS">
            <i class="koar fa-solid fa-user"></i>
            <?php echo $tampil['upload']?>
          </p>
        </div>
        <p><?php echo $tampil['deskripsi']?></p>
        <?php 
        }
        ?>
        </div>
    </div>


    <!-- Navbar Responsive -->
    <script>
      function myFunction() {
        var x = document.getElementById("topNav");
        if (x.className === "navbar") {
          x.className += " responsive";
        } else {
          x.className = "navbar";
        }
      }
    </script>
</body>
</html>