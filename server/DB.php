<?php

class conectarDB {

    private $dbHost = "www.desarrollosdvs.cl";
    private $dbUsername = "desarro4_dvs";
    private $dbPassword = "FLUX2015121GW";
    private $dbName = "desarro4_maderocl";

    public $db;

    public function __construct() {
        if (!isset($this->db)) {
            try {
                $conn = new PDO("mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName . ";charset=utf8", $this->dbUsername, $this->dbPassword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                mysqli_set_charset($conn, "utf8");
                $this->db = $conn;
                error_log("Conectado correctamente");
            } catch (PDOException $e) {
                error_log("Error al conectar a la base de datos" . print_r($e->getMessage(), true));
                die("Failed to connect to Mysql:" . $e->getMessage());
            }
        }
    }


    public function getRows($tipo) {
        $sql = 'SELECT id,nombre,latitud,longitud,tipo,en_uso';
        $sql .= ' FROM publicidad';
        
        if($tipo != ''){
            $sql .= ' where tipo = :tipo';
        }


        $query = $this->db->prepare($sql);

        if($tipo != ''){
            $query->bindParam(":tipo", $tipo);
        }        
        
        $query->execute();

        if ($query->rowCount() > 0) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }

        $res = array("resultado" => $data);

        return !empty($data) ? $res : false;
    }



}
