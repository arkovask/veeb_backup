<?php


class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $options = array(
          PDO::ATTR_PERSISTENT => true,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        // connect to database
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $exception) {
            $this->error = $exception->getMessage();
            echo $this->error;
        }
    }
    // create statement with query
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }
    // bind values
    public function bind($param, $value, $type = null) {
        if(is_null($type)){
            switch (true){
                case is_int($value);
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value);
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value);
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;

            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    //execute the prepared statement
    public function execute(){
        return $this->stmt->execute();
    }
    // get result set as array of objects
    public function getAll(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    // get result as single record
    public function getOne(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    // get row record
    public function rowCount(){
        return $this->stmt->rowCount(); // viga oli siin, kutsusid mitte meetodi, vaid välja, aga seda polnud
    }


}