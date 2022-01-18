<?php
    $server = "localhost";
	$user ="id16054954_db_latihan";
	$pass = "G{L-}pQ-WP6IF%la";
	$db = "id16054954_dblatihan";

	$koneksi = mysqli_connect($server, $user, $pass, $db);

    if(!$koneksi){
        die("koneksi gagal");
    }
?>
