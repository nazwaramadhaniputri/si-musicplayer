<?php

class Fakultas {
    public string $nama;

    public function __construct(string $a) {
        $this->nama = $a;
    }
}

class Prodi {
    public static function setNama(string $b) {
        return $b;
    }
}

class Mahasiswa {
    public static function getFakultas() {
        $fak = new Fakultas("FST");
        return $fak->nama;
    }

    public static function getProdi() {
        return Prodi::setNama("sistem informasi");
    }
}

echo Mahasiswa::getFakultas() . " " . Mahasiswa::getProdi();
