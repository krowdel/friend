<div class="page page-article">
    <div class="container">
        <?php
            $id=3;
            include_once'controllers/articlesController.php'; 
            $article=$articles[$id];
        ?>
        <div class="title-page"><?php echo $article['title']; ?> </div>
        <div class="block-header">
            <img src="<?php echo Config::baseUrl; ?>/assets/img/articles/<?php echo $article['img']; ?>" alt="<?php echo $article['title']; ?>">
        </div>
        <div class="block-content">
            <p>
            Lorem ipsum dolor sit amet. Et nihil debitis est consequatur veritatis quo nihil nesciunt est doloribus veniam non vero corporis. Id galisum exercitationem et alias internos est fuga nemo qui ratione accusamus. Ut rerum omnis qui consequatur harum est officia odit aut consequuntur rerum quo iure ipsum aut sunt veniam.

            Aut quas rerum quo quisquam doloremque nam nihil quibusdam eos dolores modi sed doloremque saepe est exercitationem tempora et temporibus aperiam. 33 itaque neque aut voluptatem aliquid qui pariatur magni ut vitae autem sit fugit unde ut expedita asperiores. In provident perferendis eum distinctio nulla non magni aliquam et laudantium odio et quidem odio! Hic voluptates quasi eos officiis perferendis eos autem dicta aut internos optio ea ratione necessitatibus et doloribus excepturi.

            Aut impedit velit est provident saepe ut nihil internos sit deserunt similique et fugiat sint. In quis rerum et impedit eligendi sed magnam consequuntur aut officia beatae. Et incidunt consequatur et accusantium voluptatem eum eveniet magnam qui expedita maxime et mollitia reprehenderit. Et natus molestias vel sunt distinctio ea perferendis sint est eius atque aut esse sunt.
            <p>
        </div>
        
        <?php include 'templates/components/blog-navigation.php'; ?>
    </div>
</div>
