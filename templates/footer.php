<footer> 
    <section class="footer">
        <div class="container wrapper">
            <div class="log"><?php include'assets/img/logo.php'; ?></div>
            <p class="short-info">
            Lorem ipsum dolor sit amet. Id earum numquam aut incidunt dignissimos qui nisi quaerat. Quo accusantium omnis aut doloribus quos eum molestiae galisum At voluptas ipsam est ratione corrupti et autem saepe quo earum nobis. 33 tenetur quibusdam non aliquid ullam ut quas ipsum.
            </p>
            <div class="block-menu"> 
                <div class="title">Menu </div>
                <div class="items">
                    <a href="about-us">About us</a>
                    <a href="contact">Contact</a>
                </div>
            </div>
            <div class="block-contact">
                <div class="title">Contact</div>
                <div class="items">
                    <?php if($siw['phone']) { ?>
                        <a href="tel:<?php echo $siw['phone']; ?>">+<?php echo $siw['phone']; ?></a>
                    <?php } ?>
                    <a href="mailto:<?php echo $siw['email']; ?>"><?php echo $siw['email']; ?></a>
                    <?php include'templates/components/social.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="wrapper">
                <div>Copyright © 2022 by <strong>Krowdel</strong>. All rights reserved. </div>
                <div>Realizacja: Stanisław Matusiak</div>
            </div>   
        </div>
    </section>
</footer>