<?php 
require_once dirname(__DIR__, 2). '/app/classes/boxesview.class.php';
// echo print_r($_SERVER);
// echo print_r($_POST['account_id']);
$boxesObj = new BoxesView();
$accountId = $_POST['account_id'];
$productsData = $boxesObj->showProducts($accountId);
echo print_r($productsData[1][0]['name']);


?>
<div class='container justify-content-center align-items-center'>
    <div class='row row-cols-4'>
        <div>
            <div>
                Box Date
            </div>
            <div>
                Box Contents
            </div>
            <div>
                Box Rating 
            </div>
        </div>
        <div>
            <div>
                Box Date
            </div>
            <div>
                Box Contents
            </div>
            <div>
                Box Rating 
            </div>
        </div>
        <div>
            <div>
                Box Date
            </div>
            <div>
                Box Contents
            </div>
            <div>
                Box Rating 
            </div>
        </div>
        <div>
            <div>
                Box Date
            </div>
            <div>
                Box Contents
            </div>
            <div>
                Box Rating 
            </div>
        </div>
    </div>
</div>