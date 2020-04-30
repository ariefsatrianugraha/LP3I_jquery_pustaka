<?php
    include "Buku.php";
    $buku = new Buku();
    $mode = $_POST['mod'];
    $out = [];
    switch($mode){
        case 'get':
            $data = $buku->get();
            echo json_encode($data);
        break;

        case 'add':
            $source = $_FILES['gambar']['tmp_name'];
            $target = "img/".$_FILES['gambar']['name'];
            move_uploaded_file($source,$target);

            $buku->add($_POST,$target);
            echo json_encode($data);
        break;
    }
?>