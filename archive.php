<?php 
  $title = "";
  
  if(is_day())
  {
    $title = "Viewing " .get_the_date() . " daily archives";
  }
  else if(is_month())
  {
    $title ="Viewing " .get_the_date("F Y") . " monthly archives";
  }
  else if(is_year())
  {
    $title = "Viewing " .get_the_date("Y") . " yearly archives";
  }
  else 
  {
    $title = "Viewing " .single_cat_title("", false) . " archives";   
  }
?>
<?php get_header() ?>

    <div class="container">
        <h2><?php echo $title; ?></h2>
        <div class="row">
            <div class="col-sm-8 wow fadeInDown">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="entry">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4 wow fadeInDown">
              <?php get_sidebar() ?>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->

<?php get_footer() ?>