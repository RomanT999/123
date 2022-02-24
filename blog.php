<?php
get_header(); ?>

<?php

$posts = get_posts();

foreach ($posts as $post){
?>
 <?= get_permalink() ?>
 <a href="<?= get_permalink() ?>"><?php echo get_the_title() ?></a>
<?php
}
// get_footer();
