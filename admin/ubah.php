<?php
    try{
        $dbh = new PDO ('mysql:host=localhost;
                        dbname=kedang_murung',
                        "root", 
                        "");

        $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOException $e){
        print "koneksi Gagal :" . $e->getMessage() . "<br>";
        die();
    }

    if(isset($_GET['id_news'])) {
		$query=$dbh->query(" SELECT * FROM news WHERE id_news='$_GET[id_news]'");
		$data=$query->fetch(PDO::FETCH_ASSOC);
	}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <title>Ubah Berita | Kedang Murung</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">
</head> 
<body>
    <div class="form">  
        <p class="asa">Ubah Berita</p>
        <form  method="POST">
            <table border = "0">
                <tr>
                    <td>Judul</td>
                    <td> 
                        <input type="text" name="title" value="<?php echo $data['title']?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>
                        <input type="date" name="tanggal" value="<?php echo $data['tanggal']?>"readonly>
                    </td>
                </tr>
                <tr>
                    <td>Upload</td>
                    <td>
                        <input type="text" name="upload"  value="<?php echo $data['upload']?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>
                        <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>
                        <input type="file"  name="gambar" value="<?php echo $data['gambar']?>">
                    </td>
                </tr>
                    <td colspan="2">
                        <button type="submit" name="update"><i class="fa fa-check-circle"></i>  Ubah Data</button>
                        <a href="data_produk.php" class="kembali"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                    </td>
                </tr>   
                <!-- <tr>
                    <td>Kategori</td>
                    <td>
                    <select class="choose" name="kategori" required>
                        <option value="<?php echo $data['kategori']?>"><?php echo $data['kategori']?></option>	
                        <option disabled selected>Kategori</option>
                        <option value="Makanan-Tradisional">Makanan Tradisional</option>
                        <option value="Minuman-Tradisional">Minuman Tradisional</option>
                    </select>
                    </td>
                </tr> -->
            </table>
        </form>
    </div>

<?php
	if (isset($_POST['update'])) {
        $id_news     = $_GET ['id_news']; 
        $title       = $_POST['title'];
        $gambar      = $_POST['gambar'];
        $tanggal     = $_POST['tanggal'];
        $upload      = $_POST['upload'];
        $deskripsi   = $_POST['deskripsi'];

		$myqry="UPDATE news SET title         = '$title',
                                gambar        = '$gambar',
                                tanggal       = '$tanggal',
                                upload        = '$upload',
                                deskripsi     = '$deskripsi'
                                WHERE id_news = '$id_news'";

		$dbh->exec($myqry);
			echo "<span class=berhasil>Data berita berhasil di ubah,<a href=index.php>Lihat Data</a></span>";
	}
?>
</body>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


body{
    font-family: 'Poppins', sans-serif;
    background-color: #26282b;
    

}
.form{
 	width: 1106px;
 	position: fixed;
 	margin-left: 142px;
	top: 122px;
	color: white;
}
.tombol{
    text-align:center;
}


.asa{
    color: white;
    font-weight: 700;
	text-align: center;
    margin-top: 14px;
    font-size: 22px;

}

table{
    border-collapse : collapse;
    margin-left: 20px;
    margin-top: 20px;
    font-size: 14px;
    width: 759px;
    margin: 2% auto;
}
table td{
    padding: 5px 5px;
}

input, select, textarea{
    width: 500px;
    padding: 10px 15px;
    border: 1px solid #3d3c3c;
    outline:none;
    background:none;
    color: white    ;
    border-radius: 2px;
}
select{
	width: 533px;
	padding: 12px 15px;
    background-color:#26282b;
}
input:focus,textarea:focus{
    border: 1px solid #f2af13;
    box-shadow: 0 0 5px #43c3ef;
    transition: 0.3s;
}
.berhasil{
    text-decoration:none;
    background: #5cb85c;
    padding: 10px 20px;
    color: #fff;
    margin-top: 45px;
    font-weight: bold;
    position: absolute;
    margin-left: 581px;
    font-size: 12px;
    border-radius: 2px;
}
button{
	outline: none;
	border: 1px solid #25476a;
	padding: 10px 20px;
	background: #25476a;
	color: #fff;
	border-radius: 2px;
	cursor: pointer;
	margin-right: 15px;
}
button:hover{
	background: #3a5f86;
}
.kembali{
	background: #f9924d;
	color: #fff;
	border-radius: 2px;
	cursor: pointer;
	border: 1px solid #f9924d;
	padding: 9px 20px;
	text-decoration: none;
}
.kembali:hover{
	background: #f9924d;
}
</style>