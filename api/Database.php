<?php
class Database  {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'arief';
    private $db   = 'lp3i_jquery_pustaka';
    private $myconn;

    public function connect() {
        $con = mysqli_connect($this->host, 
            $this->user, 
            $this->pass, 
            $this->db
        );

        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
        }
        return $this->myconn;
    }

    public function close() {
        mysqli_close($this->myconn);
    }

}
