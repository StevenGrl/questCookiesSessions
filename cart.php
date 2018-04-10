<?php
require 'session.php';
require 'inc/head.php';

$_SESSION['page'] = 'cart';
if(isset($_COOKIE['carts'])) {
    ksort($_COOKIE['carts']);
}
?>
<section class="cookies container">
    <div class="row">
        <?php
            if(isset($_COOKIE['carts'])) {
            foreach($_COOKIE['carts'] as $cart => $value):
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $cart; ?>.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <p>Added : <?= $value; ?></p>
                    <a  href="deleteToCart.php?delete_to_cart=<?= $cart; ?>" class="btn btn-danger">
                        <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Delete to cart
                    </a>

                </figcaption>
            </figure>
        </div>
        <?php endforeach;
        } else { ?>
        <h1>Votre panier est vide</h1>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
