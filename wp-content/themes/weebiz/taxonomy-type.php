<?php get_header()?>
    <!-- Features -->
    <div class="container index">
    <?php
        $term = get_queried_object();
        echo '<h1>'.$term->name.'</h1>';
        echo '<div>'.get_field('summary',$term).'</div>';
    ?>

       
        <div class="row">
        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'project');
            } // end while
        ?>

        </div> <!-- content-index.php -->
     
    </div>
<?php get_footer()?>
