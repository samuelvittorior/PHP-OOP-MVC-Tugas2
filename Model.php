<?php
$hosting = "localhost";
$username = "root";
$password = "";
$database = "Library";

$koneksi = mysqli_connect("$hosting","$username","$password","$database");

    if (mysqli_connect_error()) {
        echo "Koneksi database gagal : ".mysqli_connect_error();
    }

include_once 'Book.php';

class Model {

    public function getData () {
        
        $result = mysqli_query($GLOBALS['koneksi'],"SELECT * FROM book");
        while ($r = mysqli_fetch_assoc($result)){
        $row[] = new Book ($r['JUDUL'],$r['PENGARANG'],$r['PENERBIT'],$r['TAHUN']);
        } 
        return $row;
    }
}
