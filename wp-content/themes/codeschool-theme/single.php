<p><?php bloginfo('name'); ?></p>

<p><?php bloginfo('description'); ?></p>

<?php

while (have_posts()) {
    # code...
    the_post(); ?>
    <h1><?php  the_title();  ?></h1>
<?php the_content(); ?>


<?php }

?>
