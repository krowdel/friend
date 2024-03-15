<div class="block-navigation">
    <?php 
        $article_prev=false;
        if ($id>1) { $article_prev=$articles[$id-1];  }
        $article_next=false; 
        if (count($articles)>$id) { $article_next=$articles[$id+1];  }
    ?>
    <?php  if ($article_prev) { ?>
            <a href="<?php echo Config::baseUrl.$article_prev['href']; ?>" class="prev"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="32.429" height="24.13" viewBox="0 0 32.429 24.13">
                <path id="a" d="M21.838,5.037a1.1,1.1,0,0,0-1.634,0,1.271,1.271,0,0,0,0,1.712l8.287,8.769H1.144A1.173,1.173,0,0,0,0,16.73a1.187,1.187,0,0,0,1.144,1.228H28.49L20.2,26.712a1.294,1.294,0,0,0,0,1.729,1.1,1.1,0,0,0,1.634,0L32.087,17.6a1.24,1.24,0,0,0,0-1.712Z" transform="translate(32.429 28.804) rotate(180)" />
                </svg>
                <?php echo $article_prev['title']; ?>
            </a>
    <?php } ?>
    <?php  if ($article_next) { ?>
            <a href="<?php echo Config::baseUrl.$article_next['href']; ?>" class="prev"> 
                <?php echo $article_next['title']; ?> 
                <svg xmlns="http://www.w3.org/2000/svg" width="32.429" height="24.13" viewBox="0 0 32.429 24.13">
                <path id="a" d="M21.838,5.037a1.1,1.1,0,0,0-1.634,0,1.271,1.271,0,0,0,0,1.712l8.287,8.769H1.144A1.173,1.173,0,0,0,0,16.73a1.187,1.187,0,0,0,1.144,1.228H28.49L20.2,26.712a1.294,1.294,0,0,0,0,1.729,1.1,1.1,0,0,0,1.634,0L32.087,17.6a1.24,1.24,0,0,0,0-1.712Z" transform="translate(0 -4.674)"/>
                </svg>
            </a>
    <?php } ?>
</div>