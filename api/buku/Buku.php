<?php

    include '../Database.php';
    class Buku{
        private $connect;
        private $table;

        public function __construct()
        {
            $db = new Database();
            $this->table = 'buku';
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

        public function add($data,$gambar){
            $request = json_decode(json_encode($data));
            $query = "INSERT INTO buku(`judul`,`pengarang`,`penerbit`,`sinopsis`,`gambar`)" ;
            $query .= "VALUES('".$request->judul."','".$request->pengarang."','".$request->penerbit."','".$request->sinopsis."','".$gambar."')";
            $result = mysqli_query($this->connect,$query);

            return $result;
        }

        public function update($data){
            $request= json_decode(json_encode($data));
            $query  = "UPDATE buku SET ";
            $filter = " WHERE ";
            foreach($request as $key=>$row){
    
                if(in_array($key,$this->fields)){
                    $query .="`".$key."`='".$row."',"; 
                }
    
                if($key ==$this->primary){ 
                    $filter .="`".$key."`=".$row;
                }
            }
            $query_build = rtrim($query,",").$filter;
    
            $result = mysqli_query($this->connect, $query_build);	
            return $result;
        }
        
        
    }

?>