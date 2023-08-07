<?php

// Memasukan file koneksi.php
include "conection.php";

// mengambil data berdasarkan id_news dari  
// table newsLetter
if(isset($_GET['id_news'])) {
    // Mengambil data untuk di ubah berdasarkan id;
    $query=$dbh->query(" SELECT * FROM news WHERE id_news='$_GET[id_news]'");
    $data=$query->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previews</title>
</head>
<body>
    
</body>
</html>