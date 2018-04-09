<?php
/*
jatinPatro
*/
class Connection{

  function getConnection(){
    $userName = 'root123';
    $password = 'root123';
    $db = 'Test';
    $table = 'Test1';

    $connection = mysqli_connect('127.0.0.1',$userName,$password,$db);
    if($connection->connect_error)
      print"Unable to Connect.";
    else
      return $connection;
  }
}

class Main{

  function setUI(){
      include 'uiPage.html';
  }

  function getData($criteria,$data){

    define ("QUERY_PREFIX","SELECT * FROM Test1 ");
    switch($criteria){
      case 'Id': $query = QUERY_PREFIX." WHERE Id='".$data."'"; break;
      case 'name': $query = QUERY_PREFIX." WHERE name LIKE '%".$data."%'"; break;
      case 'email': $query = QUERY_PREFIX." WHERE email LIKE '%".$data."%'"; break;
      default: $query = QUERY_PREFIX; break;
    }

    $Connection = new Connection();
    $con = $Connection->getConnection();
    $result = $con->query($query);
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){
        print $row["Id"]."-".$row["Name"]."-".$row["email"];
        print "</br>";
      }
    }
  }
}

/* Block to excute all */
 $main = new Main();
 $main->setUI();
 $main->getData("name","j");

?>
