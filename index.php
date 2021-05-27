<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-inner">
        <div class="top-bar">
            <div class="container">
                <ul class="social-top-bar">
                    <li>
                        <a href="#" class="text-black">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="logo-container">
            <a href="#">
                <h1 class="d-none">Slan Hotel</h1>
                <img src="img/logoslanhotel.jpg" alt="Slan Hotel">
            </a>
        </div>
        <nav class="main-menu-container">
            <div class="container">
                <ul id="mainMenu" class="main-menu">
                    <li>
                        <a href="#">INICIO</a>
                    </li>
                    <li>
                        <a href="#">SOBRE NOSOTROS</a>
                    </li>
                    <li>
                        <a href="#">HABITACIONES</a>
                    </li>
                    <li>
                        <a href="#">SERVICIOS</a>
                    </li>
                    <li>
                        <a href="#">BLOG</a>
                    </li>
                    <li>
                        <a href="#">RESERVAR</a>
                    </li>
                </ul>
                <a href="#" class="mobile-menu-button" id="mobileMenuButton">
                    MENÚ PRINCIPAL <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
</header>

<section class="main">
    <section class="main-banner" style="background-image: url('<?php echo IMAGES; ?>/homebanner.jpg');">
        <div class="main-banner-inner">
            <div class="container">
                <h1>BLOG</h1>
            </div>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-md-6 post-col">
                                <article class="post">
                                    <div class="post-thumbnail">
                                        <img src="img/post1.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title">Titulo del artículo</h2>
                                        <div class="post-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi
                                                aspernatur beatae consequatur corporis doloremque eligendi fugiat hic
                                                illum inventore ipsum minus, nulla officia quae reprehenderit ut veniam,
                                                voluptatum. Quibusdam!</p>
                                        </div>
                                        <a href="#" class="view-more-button btn btn-primary">VER MÁS</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 post-col">
                                <article class="post">
                                    <div class="post-thumbnail">
                                        <img src="img/post2.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title">Titulo del artículo</h2>
                                        <div class="post-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi
                                                aspernatur beatae consequatur corporis doloremque eligendi fugiat hic
                                                illum inventore ipsum minus, nulla officia quae reprehenderit ut veniam,
                                                voluptatum. Quibusdam!</p>
                                        </div>
                                        <a href="#" class="view-more-button btn btn-primary">VER MÁS</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 post-col">
                                <article class="post">
                                    <div class="post-thumbnail">
                                        <img src="img/post3.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title">Titulo del artículo</h2>
                                        <div class="post-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi
                                                aspernatur beatae consequatur corporis doloremque eligendi fugiat hic
                                                illum inventore ipsum minus, nulla officia quae reprehenderit ut veniam,
                                                voluptatum. Quibusdam!</p>
                                        </div>
                                        <a href="#" class="view-more-button btn btn-primary">VER MÁS</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 post-col">
                                <article class="post">
                                    <div class="post-thumbnail">
                                        <img src="img/post4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title">Titulo del artículo</h2>
                                        <div class="post-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi
                                                aspernatur beatae consequatur corporis doloremque eligendi fugiat hic
                                                illum inventore ipsum minus, nulla officia quae reprehenderit ut veniam,
                                                voluptatum. Quibusdam!</p>
                                        </div>
                                        <a href="#" class="view-more-button btn btn-primary">VER MÁS</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 post-col">
                                <article class="post">
                                    <div class="post-thumbnail">
                                        <img src="img/post5.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title">Titulo del artículo</h2>
                                        <div class="post-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi
                                                aspernatur beatae consequatur corporis doloremque eligendi fugiat hic
                                                illum inventore ipsum minus, nulla officia quae reprehenderit ut veniam,
                                                voluptatum. Quibusdam!</p>
                                        </div>
                                        <a href="#" class="view-more-button btn btn-primary">VER MÁS</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 post-col">
                                <article class="post">
                                    <div class="post-thumbnail">
                                        <img src="img/post6.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title">Titulo del artículo</h2>
                                        <div class="post-excerpt">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi
                                                aspernatur beatae consequatur corporis doloremque eligendi fugiat hic
                                                illum inventore ipsum minus, nulla officia quae reprehenderit ut veniam,
                                                voluptatum. Quibusdam!</p>
                                        </div>
                                        <a href="#" class="view-more-button btn btn-primary">VER MÁS</a>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="post-navigation">
                                    <nav class="nav justify-content-between">
                                        <div class="before-posts-link">
                                            <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i> Artículos antiguos</a>
                                        </div>
                                        <div class="next-posts-link">
                                            <a href="#">Artículos recientes <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <aside class="sidebar">
                        <div id="text-3" class="widget widget_text">
                            <h3 class="widget-title">Acerca de mí</h3>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum risus justo,
                                    id
                                    ornare nibh. Vivamus semper euismod ligula, ac faucibus augue feugiat mollis. Ut
                                    porttitor
                                    ante id turpis euismod ultricies. Pellentesque habitant morbi tristique senectus et
                                    netus et
                                    malesuada fames ac turpis egestas. </p>
                                <p>Duis consectetur purus eget leo consectetur non blandit lorem posuere. Nunc sed velit
                                    leo.
                                    Suspendisse potenti.</p>
                            </div>
                        </div><!-- /.widget_text -->

                        <div id="categories-3" class="widget widget_categories">
                            <h3 class="widget-title">Categorías</h3>
                            <ul>
                                <li><a href="">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="">Consectetur adipisicing elit</a></li>
                                <li><a href="">Incididunt ut labore</a></li>
                                <li><a href="">Ut enim ad minim veniam</a></li>
                                <li><a href="">Quis nostrud exercitation</a></li>
                                <li><a href="">Duis aute irure dolor</a></li>
                                <li><a href="">Reprehenderit</a></li>
                                <li><a href="">Voluptate velit</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</section>

<footer>
    <div class="footer-inner">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget">
                            <h3 class="widget-title">Artículos más recientes</h3>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Vestibulum auctor</a></li>
                                <li><a href="#">Suspendisse efficitur orci</a></li>
                                <li><a href="#">Nulla vehicula felis</a></li>
                                <li><a href="#">Donec sagittis</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget">
                            <h3 class="widget-title">Categorías</h3>
                            <ul>
                                <li><a href="#">Suspendisse efficitur orci</a></li>
                                <li><a href="#">Nulla vehicula felis</a></li>
                                <li><a href="#">Donec sagittis</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget">
                            <h3 class="widget-title">Conócenos</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, atque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>