<?php
    $js = '';
    $page = '';
    $url = isset($_GET['url'])?$_GET['url']:'';

    switch($url){
        case 'biodata':
            $page = 'page/biodata/biodata.php';
            $js = 'page/biodata/biodatajs.php';
        break;
        case 'buku':
            $page = 'page/buku/buku.php';
            $js = 'page/buku/bukujs.php';
        break;
        case 'peminjaman':
            $page = 'page/peminjaman/peminjaman.php';
            $js = 'page/peminjaman/peminjamanjs.php';
        break;
        default:
            echo "hello";
        break;
    }