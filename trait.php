<?php

trait fakultas {

    // Boleh juga ada property

    public function setfakultas(string $a) {
        return $a;
    }
}

trait prodi {

    // boleh jug ada property

    public function setprodi(string $b) {
        return $b;
    }
}

class mahasiswa {

    use fakultas, prodi;
    public string $nama;

    public function setnama(string $c) {

        $this->nama = $c;
    }
}

$mhsw = new mahasiswa();
$mhsw->setnama("Faiza");
echo $mhsw->setfakultas("FST") . " "
. $mhsw->setprodi("sistem informasi") . " "
. $mhsw->nama;
