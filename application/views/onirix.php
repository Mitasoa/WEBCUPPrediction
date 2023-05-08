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
    <div class="breadcrumb-option spad set-bg"
        data-setbg="<?php echo site_url('assets/img/about/3d08e03cb40252526fee2036a67f07f1.gif'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Onirix : la clé de votre destinée cachée dans vos rêves</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Accueil</a>
                            <span>A propos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/onirix.php'; ?>
    <?php include 'components/client.php'; ?>
    <!-- Footer Section Begin -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php include 'components/script.php'; ?>
</body>

</html>