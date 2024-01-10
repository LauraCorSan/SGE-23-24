<?php
    var_dump($_POST);
    
    require("db.php");

    try {
        $stmt = $conn->prepare("SELECT username, pass FROM users WHERE username= :user AND pass= :pw");
        $stmt->bindParam(':user', $_POST['name']);
        $stmt->bindParam(':pw', hash("sha256",$_POST['pw']));

        $stmt->execute();

        $result = $stmt->fetchAll();
        print_r($result);
        echo "el tamaño del array es: ".count($result);

        if(count($result)>0){
            header("Location: home.php");
        }else{
            header("Location: login.php");
        }
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $conn = null;

?>