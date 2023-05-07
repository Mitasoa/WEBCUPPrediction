<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include 'components/navbar.php'; ?>
    <!-- Header End -->
    <?php include 'components/head.php'; ?>
    <div class="breadcrumb-option spad set-bg" data-setbg="<?php echo site_url('assets/img/cauchemar/giphy.gif'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Les cauchemars et la santé mentale : pourquoi il est important de chercher de l'aide</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Accueil</a>
                            <span>Cauchemar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/cauchemar.php'; ?>
    <?php include 'components/pro.php'; ?>
    <!-- Footer Section Begin -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php include 'components/script.php'; ?>
</body>

</html>