<p><?php bloginfo('name'); ?></p>

<p><?php bloginfo('description'); ?></p>

<?php

while (have_posts()) {
    # code...
    the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php  the_title();  ?></a></h1>
<?php the_content(); ?>
</hr>

<?php }

?>
