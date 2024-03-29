<?php
    //var_dump($_POST);
    
    require("db.php");

    try {
        $stmt = $conn->prepare("INSERT INTO users (username, pass) VALUES (? , ?)");
        /*$stmt=$conn->prepare("INSERT INTO users (username, pass) VALUES (:user, :pw));
        $stmt->bindParam(':user', $_POST['name']);
        $stmt->bindParam(':pw', $_POST['pw']);*/

        $pwOK=hash("sha256",$_POST['pw']);
        $stmt->execute([$_POST['name'], $pwOK]);
        $result = $stmt->fetchAll();

        header("Location: login.php");  
        
      } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      $conn = null;

?>