<?php get_header(); ?>


    <div id="home-portfolio">
        <div class="container">
            <div class="col-md-12"><h3>My Latest Projects</h3></div>
            <?php $portfolio = new wp_query("cat=3&posts_per_page=3");
               while ( $portfolio -> have_posts() ) : $portfolio -> the_post(); ?>
               <div class="col-md-4 portfolio-item">
                   <a href="<?php the_permalink(); ?>">
                       <img src="<?php echo the_field('desktop_screen_shot'); ?>" alt="<?php the_title(); ?>">
                       <div class="portfolio-info">
                           <h4><?php the_title(); ?></h4>
                           <p><?php the_field('technologies_used'); ?></p>
                       </div>
                   </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="container">  
    <div class="col-md-7">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="col-md-5"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm" id="small-contact">
                    <fieldset>
                        <legend>Contact Me</legend>
                    </fieldset>
                        <div id="RWFSVWxBPT0="></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
