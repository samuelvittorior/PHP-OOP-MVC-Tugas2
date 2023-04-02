<?php
//class mobil
class Mobil {
    public $nama;
    public $merk;

    function getInfo($a) {
        echo "Nama Mobil: ". $this->nama."<br/>";
        echo "Merk: ". $this->merk."<br/>";
    }
}
//bagian main
$ferari = new Mobil();
$ferari->nama="xxx";
$ferari->merk="aaa";

$ferari->getInfo("zzz");
?>
