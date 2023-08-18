<?php
  require '..\koneksi.php'; 
  session_start();
  
  if (!isset($_SESSION['username'])) {
      header("Location: login.php");}


  $tampil = "SELECT * FROM news ";


  if( isset($_POST["cari"])){
    $nama_dicari = $_POST["keyword"];
    $tampil = "SELECT *FROM news   WHERE    title       LIKE '%$nama_dicari%' OR
                                            gambar      LIKE '%$nama_dicari%' OR
                                            tanggal     LIKE '%$nama_dicari%' OR
                                            upload      LIKE '%$nama_dicari%' OR
                                            deskripsi   LIKE '%$nama_dicari%' OR
                                            id_news     LIKE  '%$nama_dicari%'";
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <title>Data News | Kedang Murung</title>
    <link
      rel="icon"
      href="https://upload.wikimedia.org/wikipedia/commons/7/7d/Lambang_Kab._Kutai_Kertanegara.png"
    />
</head>
<html>
<body>
    <div class="tombol">
      <form METHOD="POST" >
        <input type="text" name="keyword" style="height: 30px;" placeholder="Masukan Keyword . . . . . . ">
        <button  class="create" type="submit" name="cari"><i class="fas fa-search"></i> Cari Kata</button>
      </form>
    </div>
    <a href="tambah.php"><button class="tambah" ><i class="fa-solid fa-plus"></i> Tambah Data</button></a>
    <p class="info">Data News</p>
    <table>
        <tr>
            <th>NO.</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Tanggal</th>
            <th>Upload</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
        <?php
        $query = $db->query($tampil);
        foreach ($query as $data ){
        ?>
        <tr>
            <td><?php echo $data ['id_news']?>.</td>
            <td><?php echo $data ['title']?></td>
            <td><img src="../img/<?=$data['gambar']?>" alt="" width="300px"></td>
            <td><?php echo $data ['tanggal']?></td>
            <td><?php echo $data ['upload']?></td>
            <td><?php echo $data ['deskripsi']?></td>
            <td colspan='2'>
            
            <a class="ubah"  href="ubah.php?id_news=<?php echo $data ['id_news']?>" 
               onclick="return confirm('Ingin Mengubah Data?');" role="button">
               <i class="fa-regular fa-pen-to-square fa-xl" style="color: #003185;"></i></a> 
            <a class="hapus" href="hapus.php?id_news=<?php echo $data ['id_news']?>" 
               onclick="return confirm('Ingin Mengapus Data?');" role="button">
               <i class="fa-regular fa-square-minus fa-xl" style="color: #ff0000;"></i></a>
            </td>


        </tr>
        <?php
		}
		?>	
    </table>

</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


body{
    font-family: 'Poppins', sans-serif;

}

input[type=text] {
  margin-right:-65px;
  padding: 3.5px;
  margin-top: 8px;
  font-size: 15px;
  font-family: 'Poppins', sans-serif;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  cursor:pointer;
  background-color: #04AA6D;
}

.tombol{
  float:right;
}
* {
    margin: 0;
    padding: 0;
}
button{
  background-color: #24262b; 
  border: 4px;
  color: white;
  padding: 12px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 35px 69px 0 61px;
  cursor: pointer;

}

.info{
    color:black;
    font-size:22px;
    margin-left:76px;
    margin-top:100px;
}

table {
  border-collapse: collapse;
  width: 90%;
  margin: auto;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom:1px solid #cad1db;

}

th {
  background-color: #242020;
  color: white;
}


.tambah {
  margin-left:76px
}

.ubah{
    height:24px;
    width:24px;
    text-decoration: none;
    color:green;
}
.hapus{
  text-decoration: none;
  color:red;
}

.jumlahdata{
    text-align:center;
}
</style>

