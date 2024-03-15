<header>
    <div class="stic">
    <div class="container">
        <div class="wrapper">
        <a href="/" class="log"><?php include'assets/img/logo.php'; ?></a>
        <div class="menu">
            <div class="close-menu"> <?php include'templates/svg/menu-close.php'; ?> </div>
            <a href="<?php echo Config::baseUrl; ?>" <?php if($redirect->activePage(Config::baseUrl)) {echo 'class="active"';} ?>> Home </a>
            <a href="<?php echo Config::baseUrl; ?>about-us" <?php if($redirect->activePage(Config::baseUrl.'about-us')) {echo 'class="active"';} ?>> About us </a>
            <a href="<?php echo Config::baseUrl; ?>teams" <?php if($redirect->activePage('teams')) {echo 'active';} ?>">Teams</a>
            <?php 
                include'controllers/menu_subpages.php'; 
                include'templates/components/onlysubmenu.php'; 
            ?>
            <a href="<?php echo Config::baseUrl; ?>contact" <?php if($redirect->activePage('contact')) {echo 'class="active"';} ?>>Contact</a>
        </div>
        <?php include'templates/components/social.php'; ?>
        <div class="open-menu"><?php include'templates/svg/menu-open.php'; ?></div>
        </div>
    </div>
    </div>
</header>