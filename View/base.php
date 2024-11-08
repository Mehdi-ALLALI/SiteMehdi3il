<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta  charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $pagetitle ?></title>
        <meta name="description" content="<?= $description ?>"/>
        <meta name="keywords" content="social,site,communication"/>
        <meta name="robots" content="index,follow"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/mediaquery.css">
        <link rel="stylesheet" type="text/css" href="assets/css/print.css" media="print">

        <?php
        if(isset($Css)){
            foreach ($Css as $PageCss){
                echo '<link rel="stylesheet" href="assets/css/'.$PageCss.'.css">';
            }
        }
        ?>

    </head>
    <body>
    <?php require_once 'View/includes/header.php'; ?>

    <div class="wrapper">
    <main>
    <?php
        $filepath = File::build_path(array("View", $controller, "$view.php"));
        require_once $filepath;
        ?>
    </main>

    <?php require_once 'View/includes/footer.php'; ?>
    
</div>


   

    

    <script src="Javascript/burgerJS.js"></script>

</body>

</html>