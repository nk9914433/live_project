<?php
$servername="localhost";
$username="root";
$password="";
$dbname="liveproject";
    $conn = new mysqli($servername, $username, $password,$dbname);
        // if($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        //    }
        //    echo "Connected successfully";

    //     $sql = "CREATE DATABASE liveproject";
    //    if($conn->query($sql) === TRUE) {
    //    echo "Database created successfully";
    //  }

    //   $sql="CREATE  TABLE student(
    //      ID INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //      firstname VARCHAR(250) NOT NULL,
    //      lastname VARCHAR(250) NOT NULL,
    //       email VARCHAR(255),
    //      password varchar(200) NOT NULL,
    //       confirmpassword VARCHAR(255) NOT NULL
    //     )";
    // // //     //    print ($sql);
    //       if($conn->query($sql)===TRUE){
    //          echo "table created successfully";
    //      }

    //     $conn->close(); 

?>