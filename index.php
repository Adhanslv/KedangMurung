<?php

include "koneksi.php";
$show = "SELECT * FROM news"


?>
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
    <link rel="stylesheet" href="css/style.css" />

    <!-- <link rel="stylesheet" href="css/mobile.css" /> -->
  </head>
  <body onload="startTime()">
    <nav class="navbar" id="topNav">
      <ul class="heading">
        <li>
          <a href="#home" class="tengah"><i class="fa-solid fa-house"></i> </a>
        </li>
        <!-- <li><a href="#article" class="tengah"> Sejarah</a></li> -->
        <li><a href="#tagline" class="tengah">Berita</a></li>
        <li><a href="#maps" class="tengah">Maps</a></li>
        <li><a href="#footer">Kontak</a></li>
        <li><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Login Admin</a></li>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </ul>
    </nav>
    <div class="carousel">
      <div class="carousel_inner">
        <div class="carousel_item carousel_item__active">
          <img src="./img/gapura.jpg" alt="" class="carousel_img" />
          <div class="carousel_caption">
            <!-- <h1 class="carousel_title">WISATA TANJUNG SARAI</h1>
            <p class="carousel_description">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta
              reprehenderit repudiandae modi assumenda, totam repellat, ut eius
              illo veritatis facilis, vitae unde! Quae sit placeat esse eligendi
              blanditiis odit illo veniam ab error est quam, iure, hic in
              distinctio repudiandae excepturi voluptatum? Voluptatem quidem
              enim rerum minima reiciendis culpa incidunt?
            </p> -->
          </div>
        </div>
        <div class="carousel_item">
          <div class="carousel_caption">
            <!-- <h1 class="carousel_title">KERUPUK TRADISIONAL</h1>
            <p class="carousel_description">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta
              reprehenderit repudiandae modi assumenda, totam repellat, ut eius
              illo veritatis facilis, vitae unde! Quae sit placeat esse eligendi
              blanditiis odit illo veniam ab error est quam, iure, hic in
              distinctio repudiandae excepturi voluptatum? Voluptatem quidem
              enim rerum minima reiciendis culpa incidunt?
            </p> -->
          </div>
          <img src="./img/sarai.jpg" alt="" class="carousel_img" />
        </div>
        <div class="carousel_item">
          <img src="./img/sarai.jpg" alt="" class="carousel_img" />
        </div>
      </div>
      <div class="carousel_indicator">
        <button class="carousel_dot carousel_dot__active"></button>
        <button class="carousel_dot"></button>
        <button class="carousel_dot"></button>
      </div>

      <div class="carousel_control">
        <button class="carousel_button carousel_button__prev">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel_button carousel_button__next">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>

    <!-- Serba Serbi -->
    <section id="article">
      <div class="content">
        <img src="img/logo.png" alt="" />
        <h1><i class="fa-solid fa-seedling"></i> Serba Serbi Desa</h1>
        <p>
          Sejak berdirinya Desa Kedang Murung ada 4 (empat) kepala Desa yang
          mempimpin Desa, mulai dari nama H.Hairuddin dan sesuai regulasi
          terbaru di wilayah Kabupaten Kedang Murung dengan sebutan Kepala Desa.
          Berikut nama-nama Kepala Desa Kedang Murung Kecamatan Kota Bangun
          Kabupaten Kutai Kartanegara. Sejak adanya program Dana Desa pada tahun
          2015, Desa Kedang Murung bisa membangun desa secara berkesinambungan,
          secara garis besar semua kebutuhan masyarakat yang bersifat
          infrastruktur bisa dikatakan terpenuhi, meskipun ada beberapa kegiatan
          yang belum dilaksanakan itupun dikarenakan bukan menjadi kewenangan
          Desa akan tetapi menjadi bagian kewenangan pemerintah Kabupaten.
        </p>
      </div>
    </section>
    <!-- Serba Serbi -->




    <!-- Card Page -->
    <section class="card">
      <div class="cardPray">
        <p>
          <i class="fa-solid fa-calendar-days"></i> Jadwal Sholat Kab. Kutai
          Kartanegara
        </p>
        <i class="fa-regular fa-clock"><p id="clock"></p></i>
      </div>
      <div class="cardBody">
        <img src="img/masjid.webp" alt="masjid" />
        <h4>Imsak</h4>
        <p>04:43</p>
      </div>
      <div class="cardBody">
        <img src="img/masjid.webp" alt="masjid" />
        <h4>Subuh</h4>
        <p>04:53</p>
      </div>
      <div class="cardBody">
        <img src="img/masjid.webp" alt="masjid" />
        <h4>Zuhur</h4>
        <p>12:21</p>
      </div>
      <div class="cardBody">
        <img src="img/masjid.webp" alt="masjid" />
        <h4>Ashar</h4>
        <p>15:45</p>
      </div>
      <div class="cardBody">
        <img src="img/masjid.webp" alt="masjid" />
        <h4>Maghrib</h4>
        <p>18:23</p>
      </div>
      <div class="cardBody">
        <img src="img/masjid.webp" alt="masjid" />
        <h4>Isya</h4>
        <p>19:37</p>
      </div>
    </section>
    <!-- Card Page -->

    <!-- Perangkat Desa -->
    <!-- <div class="cardSlider">
      <div class="wrapper">
          <img class="slider" src="img/cover1.jpg" alt="">
          <img class="slider" src="img/cover1.jpg" alt="">
          <img class="slider" src="img/cover1.jpg" alt="">
          <img class="slider" src="img/cover1.jpg" alt="">
          <img class="slider" src="img/cover1.jpg" alt="">
          <img class="slider" src="img/cover1.jpg" alt="">
          <img class="slider" src="img/cover1.jpg" alt="">
      </div>
    </div> -->
    <!-- Card Slider -->

    <!-- NewsPapper -->
    <div id="tagline">
      <h1><i class="fa-solid fa-file-lines"></i> Berita Desa</h1>
    </div>

    <!-- Batasan -->
    
    <section id="news">
      <?php
      $query = $db->query($show);
      foreach ($query as $data ){
      ?>  
      <div class="newsletter">
        <img  src="img/<?php echo $data['gambar']?>" alt="dokumentasi" />
        <h1><a class="warna" href="pages/show.php?id_news=<?php echo $data ['id_news']?>">
        <?php echo $data['title']?></h1></a>
        <div class="info">
          <p>
            <i class="koar fa-regular fa-calendar-plus"></i>
            <?php echo $data['tanggal']?>
          </p>
          <p class="kontolS">
            <i class="koar fa-solid fa-user"></i>
            <?php echo $data['upload']?>
          </p>
        </div>
        <p>
          <?php echo $data['deskripsi']?>
            </a>
        </p>
      </div>
      <?php
      } 
      ?>
    </section>
    <!-- NewsPapper -->

    <!-- Maping -->
    <div id="maps">
      <div class="mapsBody">
        <h1>
          <i class="fa-solid fa-map-location-dot"></i> Peta Administrasi Kedang
          Murung
        </h1>
        <p>
          Secara cluster Badan Pusat Statistik Kab.Kutai Kartanegara, Desa
          Kedang Murung termasuk dalam Cluster Perdesaan, letak Desa Kedang
          Murung sangat strategis, termasuk salah satu wilayah yang berada dalam
          pemerintahan Kecamatan Kota Bangun. Letak Desa Kedang Murung yang
          berdekatan Dengan Pemerintah Kabupaten Kutai Kartanegara tepatnya ±
          100 Km arah timur Kabupaten Kutai Kartanegara. Desa Kedang Murungs
          secara administrasi terbagi menjadi 3 Dusun yakni: Dusun Matahari,
          Dusun Teratai, Dusun Seroja, dengan batas sebagai sebagai berikut:
          Sebelah Utara berbatasan dengan Desa Kota Bangun Ulu, Desa Loleng,
          Sebelah Timur berbatasan dengan Desa Sumber Sari, Suka Bumi, Desa
          Sedulang, Sebelah Selatan Desa Kota Bangun 1, Desa Wonosari, Kedang
          Ipil Sebelah Barat Desa Muara Wis, Sungai Mahakam Secara keseluruhan
          luas desa Kedang Murung adalah ± 10.198.93 Ha
        </p>
      </div>
      <div class="coverMage">
        <a target="_blank" href="img/peta.jpg">
          <img src="img/peta.jpg" alt="" class="maps" />
        </a>
      </div>
    </div>
    <!-- Maping -->

    <!-- Form Chat -->
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
    <!-- End Form Chat -->

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
                href="https://www.youtube.com/watch?v=6mh0S3NpO1M&list=RD6mh0S3NpO1M&start_radio=1"
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
    <!-- Link Java Script -->
    <script src="js/script.js"></script>
    <script src="js/times.js"></script>
    <script src="js/slider.js"></script>
    <!-- Contact Form -->
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
    <!-- Contact Form -->

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
  <style></style>
</html>   