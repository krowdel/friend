
<?php 
    $main=$menu['main'];
    $submenu=$menu['submenu'];
    if ($main['active']) { 
?>

<div class="group-menu">
    <div class="title-menu noactiv <?php if($redirect->activePage($main['href'])) {echo 'active';} ?>"><?php echo $main['name']; ?></div>
    <ul class="submenu">
        <?php  foreach($submenu as $item) { ?>
            <?php if($item['active']) { ?> 
            <li>
                <a href="<?php echo Config::baseUrl.$item['href']; ?>" 
                <?php if($redirect->activePage($item['href'], 'sub')) { echo 'class="active"'; }?> 
                > 
                <?php echo $item['name']; ?>
                </a>
            </li>
            <?php } ?>
        <?php } ?>
    </ul> 
</div>

<?php } ?>