<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    <h2>Your cart</h2>
        <p>Resumed of your purchase</p>
        <table class="table">
            <thead>
            <tr>
                <th>Article</th>
                <th>Number</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    if (empty($_COOKIE["panier"])) : ?>
                <tr>
                    <td>You have no purchase!</td>
                </tr>

                <?php else : 
                    $i = 0;
                    foreach ($catalog as $id => $cookie) { ?>
                        <tr>
                            <?php if(!empty($_COOKIE['cart'][$number[$i]])) { ?>
                                <td><?= $cookie['name']; ?></td>
                                <td><?= $_COOKIE['cart'][$number[$i]]; ?></tr>
                            <?php } ?>
                        </tr>
                    <?php $i++;
                 } ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
