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
    <div class="card">
      <div class="back">
        <a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
      </div>
        <?php
        include '../koneksi.php';
        $id_news = $_GET['id_news'];
        $data = mysqli_query($db,"select * from news where id_news='$id_news'");
        while($tampil = mysqli_fetch_array($data)){
        ?>  
        <div class="desc">
          <h1><?php echo $tampil['title']?></h1>
          <div class="lines"></div>
          <div class="info">
            <p class="tanggal">
              <i class="koar fa-regular fa-calendar-plus"></i>
              <?php echo $tampil['tanggal']?>
            </p>
            <p class="kontolS">
              <i class="koar fa-solid fa-user"></i>
              <?php echo $tampil['upload']?>
            </p>
          </div>
          <img  src="../img./<?php echo $tampil['gambar']?>" alt="dokumentasi" />
          <p><?php echo $tampil['deskripsi']?></p>
        </div>
      </div>
      <?php 
        }
      ?>
      <section class="form">
        <div class="gmaps">
          <iframe
            class="googleMaps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127673.27672781439!2d116.51317745651028!3d-0.21626847682089523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df648132b6cca35%3A0x15909fb1ce72fc6f!2sKantor%20Kepala%20Desa%20Kedang%20Murung!5e0!3m2!1sid!2sid!4v1689781859241!5m2!1sid!2sid"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <form class="wrapCover" name="KDM-contact" autocomplete="off">
          <h1>Form Pengaduan</h1>
          <input type="text" placeholder="Nama" required name="nama" />
          <input type="email" placeholder="Email" required name="email" />
          <input type="text" value="+62" required name="nomor" />
          <textarea
            name="pesan"
            id=""
            cols="30"
            rows="10"
            placeholder="Pesan"
            required
          ></textarea
          ><br />
          <button class="sending" type="submit">
            <b><i class="fa-regular fa-paper-plane fa-fade"></i> kirim</b>
          </button>
        </form>
      </section>
      <!-- Footer -->
      <section id="footer">
        <div class="container">
          <div class="row">
            <div class="column">
              <h4><i class="fa-solid fa-house"></i> Desa Kedang Murung</h4>
              <ul>
                <li>
                  Website Resmi Pemerintah Desa Kedang Murung, Kecamatan Kota
                  Bangun, Kabupaten Kutai Kartanegara
                </li>
              </ul>
            </div>
            <div class="column">
              <h4><i class="fa-solid fa-comments"></i> Hubungi Kami</h4>
              <ul>
                <li>
                  Jl.Rimba Ayu Desa Kedang Murung Kabupaten Kutai Kartanegara, Provinsi
                  Kalimantan Timur, Indonesia, 75561 .
                </li>
                <li>
                  <i class="fa-solid fa-phone"></i> Telepon/Fax: 082191960001
                </li>
                <li>
                  <i class="fa-regular fa-envelope"></i> Email:
                  desakedangmurung@gmail.com
                </li>
              </ul>
            </div>
            <div class="column">
              <h4>Follow us</h4>
              <div class="social-links">
                <a
                  href="https://www.youtube.com/watch?v=6Q5xqNkCk7w&ab_channel=wavetoearth"
                  ><i class="fa-brands fa-youtube"></i
                ></a>
                <a href="https://www.facebook.com/sparkarhub/effects/"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <!-- <div class="copyright">
              <p>Copyright KKN 49 UNMUL</p>
            </div> -->
          </div>
        </div>
      </section>


    <!-- Get Data Form Contact -->
    <script>
      const scriptURL =
        "https://script.google.com/macros/s/AKfycbzV95Gx_qFl9JQBkshmghXIEtSTwcISdF5awv5GB4Nph-4dEPly2wTZfO3ztDVLijep/exec";
      const form = document.forms["KDM-contact"];

      const bntKirim = document.querySelector(".sending");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            console.log("Success!", response);
            form.reset();
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
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