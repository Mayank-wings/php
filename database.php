<?php
$servername = "localhost";
$username = "mayank";
$password = "wings123";
$dbname = "Wings";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}


echo "<table style='border: solid 1px black;'>";
echo "<tr><th style=''>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// phpinfo()
// for the pdo
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "CREATE DATABASE Wings";
    // $sql = "CREATE TABLE Employee(
    //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //   firstname VARCHAR(30) NOT NULL,
    //   lastname VARCHAR(30) NOT NULL,
    //   email VARCHAR(50),
    //   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //   )";
    // $sql = "INSERT INTO Employee(firstname, lastname, email) 
    //         VALUES ('Test','Testing','test@gmail.com')";

    // $sql= "SELECT * FROM Employee WHERE firstname='MAYANK'";
    $sql= "SELECT * FROM Employee";

      try {
        //code...
        $stmt = $conn->prepare($sql);
        $stmt-> execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //  echo "$result<br>";
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
          echo $v;
        }
        // print_r($result);
        //  echo "Employee Table VALUES Added...!<br>";
      } catch (\Throwable $th) {
        //throw $th;
        print_r($th);
      }

    echo "$dbname Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>