<?php session_start();?>
<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            foreach ($_SESSION['myCart'] as $item){
                echo ($catalog[$item]['name'] . "<br />");
            }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
