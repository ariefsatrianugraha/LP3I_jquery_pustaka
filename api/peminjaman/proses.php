<?php
    include "Pinjam.php";
    $pinjam = new Pinjam();
    $mode = $_POST['mod'];
    $out = [];
    switch($mode){
        case 'get':
            $data = $pinjam->get();
            echo json_encode($data);
        break;
        
        case 'add':
            $res = $pinjam->add($_POST);
            
            $out['status'] = $res;
            if($res)
                $out['messages'] = "Data Berhasil disimpan";
            else
                $out['messages'] = "Gagal Menyimpan Data";
                
            echo json_encode($out);
        break;
    }