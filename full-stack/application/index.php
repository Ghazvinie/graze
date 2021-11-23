<?php require_once __DIR__. '/app/classes/boxesview.class.php';?>
<?php require __DIR__ . '/public/views/templates/header.php'; ?>
<?php require __DIR__ . '/app/router/routes.php'; ?>

<h1>INDEX</h1>







</body>

</html>


















<?php

$boxesObj = new BoxesView();
$boxesObj->showProducts(170111)

// echo 'INDEdX';
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
// $testObj = new Test();
// $testObj->getAllStatement(117770);

// $request = $_SERVER['REQUEST_URI'];

// switch ($request) {
//     case '/':
//         require __DIR__ . '/includes/views/main.php';
//         break;
//     case '':
//         require __DIR__ . '/includes/views/main.php';
//         break;
//     case '/boxes':
//         require __DIR__ . '/includes/views/boxes.php';
//         break;
// }

?>