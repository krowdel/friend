<?php ?>
<div class="page page-home">
    <div class="container">
        <h1> Sample website </h1>
        <div class="rozeta">
            <?php include'assets/img/rozeta.php'; ?>
        </div>
    </div>
    <section class="home-list-blog">
        <div class="container">
            <div class="header">
                <div class="title">Articles</div>
                <div class="short-descript">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don’t look even slightly believable.  If you are going to use.
                </div>
                <a href="articles">All articles</a>
            </div>
            <div class="items">
                <?php include'controllers/articlesController.php'; ?>
                <?php foreach($articles as $article) { ?> 
                    <div class="item">
                        <img src="assets/img/articles/<?php echo $article['img']; ?>" alt="foto <?php echo $article['title']; ?>">
                        <div class="timedate"><?php echo $article['data']; ?></div>
                        <div class="title"> <?php echo $article['title']; ?> </div>
                        <div class="descript-short"> <?php echo $article['descript_short']; ?> </div>
                        <a href="<?php echo $article['href']; ?>"> Read more </a>
                    </div>
                <?php } ?>
        
            </item>
        </div>
    </section>

</div>




    