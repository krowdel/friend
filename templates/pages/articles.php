<div class="page page-news">
    <div class="container">
        <div class="title-page">Articles </div>
        
        <section class="list-blog">
            <div class="items">
                <?php include'controllers/articlesController.php'; ?>
                <?php foreach($articles as $article) { ?> 
                    <div class="item" data-aos="zoom-in">
                        <img src="assets/img/articles/<?php echo $article['img']; ?>" alt="foto <?php echo $article['title']; ?>">
                        <div class="timedate"><?php echo $article['data']; ?></div>
                        <div class="title"> <?php echo $article['title']; ?> </div>
                        <div class="descript-short"> <?php echo $article['descript_short']; ?> </div>
                        <a href="<?php echo $bazeUrl.$article['href']; ?>"> Czytaj więcej </a>
                    </div>
                <?php } ?>
            </div>
        </section>
           
    </div>
</div>