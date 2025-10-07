<?php 
require_once "config.php";

class Database {

    private static $instance = null;

    private $con;
    private $host = HOST ;
    private $db_name = DB_NAME ;
    private $username = USERNAME ;
    private $password = PASSWORD;

    function __construct()
    {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->db_name;
        try {
            $this->con = new PDO($dsn,$this->username,$this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "koneksi Berhasil";
        } catch (PDOException $e) {
            die("koneksi gagal". $e->getMessage());
        }
    }

    public static function getInstance(){
            if (self::$instance == null){
                self::$instance = new Database();
            }
            return self::$instance->con;
    }

    public function getAllJurusan($jurusan){
        $sql = "SELECT * FROM mahasiswa WHERE jurusan = :jurusan";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':jurusan', $jurusan);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllTable($table){
        $sql = "select * from $table";
        $data = $this->con->query($sql);
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }
}


