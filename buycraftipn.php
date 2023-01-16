<?php

    $settings = array();
    $settings['sharedSecret'] = "ic5nah4oymlsHJZ7LQErNJ2pLgun5Eal";
    
    
    /* Webhook */
    $json = json_decode(file_get_contents("php://input"), true);
    $headers = getallheaders();
    
    if(!array_key_exists("X-BC-Sig", $headers)) {
        header('HTTP/1.0 403 Forbidden');
        die();
    }
    
    $hash = hash("sha256", $settings['sharedSecret'].$json['payment']['txn_id'].$json['payment']['status'].$json['customer']['email']);
    $header = $headers['X-BC-Sig'];
    
    if(!hash_equals($header, $hash)) {
        header('HTTP/1.0 403 Forbidden');
        die();
    }
    
    if(strcasecmp($json['payment']['status'], "complete") !== 0) {
        header('HTTP/1.0 403 Forbidden');
        die();
    }
    
    $products = $json['packages'];
    
    foreach($products as $product) {
        $variables = $product['variables'];
        
        foreach($variables as $variable) {
            if(strcasecmp($variable['identifier'], "falcun-email") == 0) {
                handleProduct($variable['option'], $product['name']);
                break;
            }
        }
    }
    
    function handleProduct($email, $product) {
        require("admin/common.php"); 
        if ($product == "Falcun Client") {
            $send = "INSERT INTO purchases (purchase_name, purchase_email) VALUES('$product', '$email')";
            $stmt = $db->prepare($send); 
            $stmt->execute(); 
        }

    }
?>