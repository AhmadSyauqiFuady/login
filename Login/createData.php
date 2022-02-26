<?php
require_once 'connection.php';
if($con){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '$password')";
  

    $row = mysql_num_rows($result);

    if($username != "" && $email != "" && password != ""){
        $result = mysqli_query($con, $query);
        $reponse = array();
        array_push($response, array('status' => 'OK')); 
    }else{
        array_push($response, array('status' => 'FAILED')); 
     }
    }else{
        array_push($response, array('status' => 'FAILED')); 
    }
    echo json_encode(array("Server_response" => $response));
    mysqli_close($close);
?>