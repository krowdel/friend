<?php 
    include 'Config.php';
    include 'src/Metatag.php';
    include 'src/Redirect.php';
    $redirect= new Redirect(Config::baseUrl);
    $metatag=$redirect->getmetatag(); 
    include 'controllers/siw.php';
?>
<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(Config::test) { ?>
        <meta name='robots' content='noindex, nofollow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <?php } else { ?>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <?php } ?>
    <title><?php echo $metatag['title']; ?></title>
    <meta name="description" content="<?php echo $metatag['descript']; ?>">

    <link type="text/css" rel="stylesheet" href="<?php echo Config::baseUrl; ?>/assets/css/style.css?ver=<?php echo Config::ver; ?>">
</head>
<body>
    
    <?php 
        include 'templates/header.php';
        echo '<main>';
        include $redirect->loadContent();
        echo '</main>';
        include 'templates/footer.php'; 
    ?>

<script src="<?php echo Config::baseUrl; ?>/assets/js/custom.js"></script>
</body>
</html>

