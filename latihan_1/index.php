<?php
    include "Mahasiswa.php";
    $mahasiswaTI = new Mahasiswa();
    $mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
    print_r($mahasiswaTI->getData()); 


    echo "<br><br>Data Mahasiswa: <br>";
    $mahasiswaSI = new Mahasiswa();
    $mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
    $mahasiswaSI->showData();
    $mahasiswaTI = new Mahasiswa();
    $mahasiswaTI->setData('A13.2000.00001', 'John Doe', 'Teknik Industri');
    $mahasiswaTI->showData();
?> 