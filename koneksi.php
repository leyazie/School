<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'data_db');

if($koneksi->connect_errno){
	echo "Error: ";
}