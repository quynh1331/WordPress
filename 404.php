<?php get_header() ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 wow fadeInDown">
                <div class="entry">
                    <h2>Not Found</h2>
                    <div class="entry-body">
                        <p>Sorry, but that page doesn't exist</p>
                        <p><?php get_search_form(); ?></p>
                    </div>
                </div>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4 wow fadeInDown">
              <?php get_sidebar() ?>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->

<?php get_footer() ?>