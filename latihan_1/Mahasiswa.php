<?php
    class Mahasiswa {
        public $nim;
        public $nama;
        public $programStudi;

        public function setData($nim, $nama, $programStudi) {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->programStudi = $programStudi;
        }

        public function getData() {
            return [
                "nim" => $this->nim,
                "nama" => $this->nama,
                "programStudi" => $this->programStudi,
            ];
        }

        public function addNewData($nim, $nama, $programStudi) {
            $data = [
                "nim" => $nim,
                "nama" => $nama,
                "programStudi" => $programStudi,
            ];
            return $data;
        }

        public function showData() {
            echo "NIM: " . $this->nim . "<br>";
            echo "Nama: " . $this->nama . "<br>";
            echo "Program Studi: " . $this->programStudi . "<br>";
        }
    }
?>