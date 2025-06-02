<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'nilai_db');

if($koneksi->connect_errno){
	echo "Error: ";
}