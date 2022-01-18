<?php
    $server = "localhost";
	$user ="root";
	$pass = "";
	$db = "secreto";

	$koneksi = mysqli_connect($server, $user, $pass, $db);

    if(!$koneksi){
        die("koneksi gagal");
    }
?>