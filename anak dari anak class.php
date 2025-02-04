<?php

class Mahasiswa {
    public $nim;
    public $nama;

    public function setNim(string $a) {
        $this->nim = $a;
    }

    public function setNama(string $b) {
        $this->nama = $b;
    }
}

class Krs extends Mahasiswa {
    protected $matakuliah;

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setMatakuliah(string $c) {
        $this->matakuliah = $c;
    }
}

class Nilai extends Krs {
    private static $nilai = 90;

    public function getMatakuliah() {
        return $this->matakuliah;
    }

    public static function getNilai() {
        return self::$nilai;
    }
}

$nilai = new Nilai();

// Memanggil class Mahasiswa
$nilai->setNim("17021000");
$nilai->setNama("Faiza");

// Memanggil class Krs
$nilai->setMatakuliah("Pemrograman Berbasis Web Lanjutan");

echo "<p>NIM = " . $nilai->getNim() . "</p>";
echo "<p>NAMA = " . $nilai->getNama() . "</p>";
echo "<p>Matakuliah = " . $nilai->getMatakuliah() . "</p>";
echo "<p>Nilai = " . Nilai::getNilai() . "</p>";
?>
