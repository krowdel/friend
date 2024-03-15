<?php ?>
<div class="page page-teams">
    <div class="container">
        <section class="teams">    
            <?php include_once'controllers/teamsController.php';  ?>
            <div class="teams-content">
                <?php foreach ($teams as $team) { ?>
                    <?php if($team['activ']) { ?>
                        <h3><?php echo $team['title']; ?></h3>
                        <p><?php echo $team['descript']; ?></p>
                    <?php } ?>
                <?php } ?>
            </div>
        </section>
    </div>
</div>