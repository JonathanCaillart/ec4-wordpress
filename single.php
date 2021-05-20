<?php
get_header();
?>
<div class="container mt-5">
    <div class="row">
        <h1 > <?php the_title(); ?> </h1>
        <p class="date_format  ml-4 mt-4"> le <?php echo get_the_date(); ?> </p>

    </div>
    <div class="mb-5 row ">
        <div><?php the_category( ' ') ?></div>
    </div>
    <?php the_content(); ?>

</div>



<?php
get_footer();
?>