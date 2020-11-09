<?php
class DB{
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct(){
        $params = parse_ini_file('database.ini');
        if ($params === false) {
            echo("error");
        }
        $this->host     = $params['host'];
        $this->db       = $params['database'];
        $this->user     = $params['user'];
        $this->password = $params['password'];
    }

    function connect(){
        try{
            $connection = "pgsql:host=" . $this->host . ";dbname=" . $this->db;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}
?>