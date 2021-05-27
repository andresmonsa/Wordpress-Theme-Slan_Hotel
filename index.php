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

<?php get_header(); ?>

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
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>