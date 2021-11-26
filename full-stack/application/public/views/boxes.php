<?php
require_once dirname(__DIR__, 2) . '/app/classes/boxesview.class.php';
// echo print_r($_SERVER);
// echo print_r($_POST['account_id']);
$boxesObj = new BoxesView();
$accountId = $_POST['account_id'];
$productsData = $boxesObj->showProducts($accountId);

?>
<div class='container justify-content-center align-items-center mt-4'>
    <div class='row row-cols-4 justify-content-center align-items-center'>
        <?php foreach ($productsData as $key => $product) { ?>
            <div class='justify-content-center align-items-center col-md-3 my-5' >
                <?php foreach ($product as $date => $details) { ?>
                    <h4 class='text-center'>-Box-</h4>
                    <h5 class='text-center'>Date Ordered: <?php echo $date; ?> </h5>
                    <p class='text-center fw-bold'>Contents:</p>
                        <?php foreach ($details as $key => $text) { ?>
                            <div class='justify-content-center align-items-center m-2'>
                            <p class='text-center'><?php echo ucwords( $text['name']); ?></p>
                            <img width='100%' height='200' class='m-1'  src=<?php echo $text['image_url']; ?>></img>
                            </div>
                        <?php } ?>

                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
</div>