<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles.css' type='text/css'/>
    <title>Document</title>
</head>
<body class='body'>
<img src='assets/logo.svg' style='width:160px; height: auto; display: block; margin-bottom: 1rem;'>

    <div>

    </div>
</body>
</html>

<?php

require dirname(__FILE__).'/classes/test.class.php';
// echo realPath(dirname(__FILE__)).'/classes/test.class.php';
    // Check for database connectivity
    // try {
    //     $connection = new PDO("mysql:host=database;dbname=graze", "root", "password");
    //     // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //     $sql = "SELECT * FROM box WHERE account_id = 170111";
    //     $result = $connection->query($sql);
    //     $result->setFetchMode(PDO::FETCH_ASSOC);



    //     while ($row = $result->fetch()) {
    //         echo $row['delivery_date']."<br />\n";
    //     }




    // } catch(PDOException $e) {
    //     echo "Database connection 🚫";
    // }
    $testObj = new Test();
    $testObj->getAll();

?>

