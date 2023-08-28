<?php 

    namespace app\config;

    // Conexão com o banco de dados
    
    class Database 
    {
        const LOCALHOST = ""; 
        const DBNAME = "";
        const USERNAME = "";
        const PASSWORD = "";

        private static $connection; 

        public static function getConn() {
            try {
                if(!isset(self::$connection)) {
                    self::$connection = new \PDO('mysql:host='. self::LOCALHOST . ';' . 'dbname=' . self::DBNAME, self::USERNAME, self::PASSWORD);
                }
                
                return self::$connection;
            }
            catch(\PDOException $e) {
                throw new \Exception("Erro ao se conectar ao banco de dados " . $e->getMessage());
            }
        }
    }




    
?>
