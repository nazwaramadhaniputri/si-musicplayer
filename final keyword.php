<?php

class prodi {

    public static string $nama = "sistem informasi";

    final static function setNama() {
        return self::$nama;
    }
}

final class Mahasiswa extends prodi {

    public static function setprodi() {

        return parent::setNama();
    }
}

echo Mahasiswa::setprodi();