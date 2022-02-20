<?php
namespace db;

use PDO;

class DateSource{

  private $conn;

    public function __construct($host = 'localhost', $port = '8889', $dbName = 'test_phpdb', $username = 'test_user', $pwssword = 'pwd'); }

  {

  $dsn = "mysql:host={$host};port={$port};dbname={$dbName};";
  $this->conn = new PDO($dsn, $user, $password);
  $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


}

public function select ($sql = "", $params = [] ) {
    $stmt = $this->conn->prepare->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchALL();

}