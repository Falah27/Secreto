<?php

    //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();
    
    //koneksi ke database latihan
    include 'connect.php';
    
    //ambil data yang diparsing dari form sebelumnya
    $message = $_POST['msg'];
    if($message){
        $insert = mysqli_query($koneksi, "INSERT INTO pesan (msg) VALUES ('$message')");
        $_SESSION["sukses"] = 'Thank Yuu :)';
        header('Location: secreto.php'); 
    } else{
        $_SESSION["gagal"] = 'gagal';
        header('location: index.php');
    }
    
    //masukkan data ke dalam tabel post
    
    //set session sukses
   
    
    //redirect ke halaman index.php
      

    
   
?>