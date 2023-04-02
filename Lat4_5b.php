<?php

require_once("Lat4_5a.php");

$s = new Sarjana;
$s->getProgram('Mahasiswa') . "<br>";
$s->tugasAkhir();

$m = new Magister;
$m->getProgram('Mahasiswa') . "<br>";
$m->tugasAkhir();