<?php
require_once dirname(__DIR__, 2) . '/app/classes/boxesview.class.php';
// echo print_r($_SERVER);
// echo print_r($_POST['account_id']);
$boxesObj = new BoxesView();
$accountId = $_POST['account_id'];
$productsData = $boxesObj->showProducts($accountId);

?>
<div class='container justify-content-center align-items-center'>
    <div class='row row-cols-4'>
        <?php foreach ($productsData as $key => $product) { ?>
            <div>
                <?php foreach ($product as $date => $details) { ?>
                    <h5><?php echo $date; ?> </h5>
                    <ul>
                        <?php foreach ($details as $key => $text) { ?>
                            <li><?php echo $text['name']; ?></li>
                            <img src=<?php echo $text['image_url']; ?>></img>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
</div>