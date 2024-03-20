<?php

class Mahasiswa {

    public string $nim = "17021000";

    public function setNIm() {

        return $this->nim;
    }
}

class Krs extends Mahasiswa {

    // method override

    public function setNim() {

        return null;
    }
}

$krs = new Krs();
echo $krs->setNim();