<?php

    include('../Database.php');

    class Pinjam {
        private $connect;
        private $table;

        public function __construct()
        {
            $db = new Database();
            $this->table = 'peminjaman';
            $this->connect = $db->connect();
        }

        public function get(){
            $query = "SELECT * FROM ".$this->table;
            $result = mysqli_query($this->connect, $query);

            $data =[];
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }

            return $data;
        }

        public function add($data){
            $request= json_decode(json_encode($data));
            $query = "INSERT INTO peminjaman (`nama`,`tanggal_pinjam`,`tanggal_pengembalian`,`judul_buku`,`jumlah_pinjam`)" ;
            $query .= "VALUES ('".$request->nama_peminjam."','".$request->tanggal_pinjam."','".
                        $request->tanggal_pengembalian."','".$request->judul_buku."','".$request->jumlah_pinjam."')";
            $res = mysqli_query($this->connect, $query);
            return $res;
        }

        
    }