<?php get_header(); ?>
<header class="archive-header u-textAlignCenter">
    <?php
    the_archive_title('<h1 class="archive-title">', '</h1>');
    the_archive_description('<div class="taxonomy-description">', '</div>');
    ?>
</header>
<main class="site--main">
    <div class="post--cards">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'card');

            endwhile;
        endif;
        ?>
    </div>
    <?php get_template_part('template-parts/pagination'); ?>
</main>

<?php get_footer(); ?>