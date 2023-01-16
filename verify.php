<?php


  
 if(!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) { die(""); } 
 
 if (!preg_match("/^[A-Za-z0-9\-]+$/", $_GET['hwid'])) {  die(""); }


    require("admin/common2.php");
    $email = $_GET["email"];
    $hwid = $_GET["hwid"];

 
    $stmt = $db1->prepare("SELECT * FROM purchases WHERE purchase_email='$email'"); 
    $stmt->execute(); 
    $row = $stmt->fetch();
    

    
    
    if (empty($hwid)) {
        exit("FALSE");
    }
    
    if (empty($email) ) {
        exit("FALSE");
    }
    

    if (empty($row['purchase_hwid'])) {
        if ($_GET["email"] == $row['purchase_email']) {
            $send = "UPDATE purchases SET purchase_hwid='$hwid' WHERE purchase_email='$email'";
            $stmt = $db1->prepare($send); 
            $stmt->execute(); 
            echo 'TRUE';
        } else {
        echo 'FALSE';
        }
    } else {
        if ($_GET["hwid"] == $row['purchase_hwid']) {
            echo 'TRUE';            
        } else {
        echo 'FALSE';
        }
    }




?>