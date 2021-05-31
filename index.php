
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
                <?php if ( is_active_sidebar('main-sidebar')): ?>
                    <div class="col-md-9">
                        <?php else: ?>
                            <div class="col-md-12 post-col">
                        <?php endif; ?>
                    <div class="main-content">
                        <div class="row">
                                    <?php if ( have_posts() ): while( have_posts() ): the_post();  ?>
                                       
                                <div class="col-md-6 post-col">
                                    <article class="post">
                                        
                                        <?php if ( ! has_post_format('video') ): ?>


                                            <?php if ( has_post_thumbnail() ): ?>
                                                <div class="post-thumbnail">
                                                    <?php the_post_thumbnail('blog_size_image'); ?>
                                                </div>
                                            <?php endif ?>

                                        <?php else: ?>

                                            <div class="post-thumbnail">
                                                <?php the_content(); ?>
                                            </div>
                                            
                                        <?php endif ?>

                                        <div class="post-content">
                                            <h2 class="post-title"><?php the_title(); ?></h2>
                                            <div class="post-excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="view-more-button btn btn-primary"><?php _e('VER MÁS', 'slan'); ?></a>
                                        </div>
                                    </article>
                                </div>


                                    <?php endwhile; endif; ?>
                         
                        
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