 <?php
$servername = "localhost";
$username = "root";
$password = "";


    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
    $sql = "INSERT INTO tasks (task)
    VALUES ('I WANT SLEEP')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    


?> 