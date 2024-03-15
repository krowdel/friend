
<?php 
    $main=$menu['main'];
    $submenu=$menu['submenu'];
    if ($main['active']) { 
?>

<div class="group-menu">
    <a href="<?php echo $main['href']; ?>" class="title-menu <?php if($redirect->activePage($main['href'])) {echo 'active';} ?>"><?php echo $main['name']; ?></a>
    <ul class="submenu">
        <?php  foreach($submenu as $item) { ?>
            <?php if($item['active']) { ?> 
            <li><a href="<?php echo $item['href']; ?>" <?php if($redirect->activePage($item['href'], 'sub')) { echo 'class="active"'; }?> > 
                <?php echo $item['name']; ?>
            </a></li>
            <?php } ?>
        <?php } ?>
    </ul> 
</div>

<?php } ?>