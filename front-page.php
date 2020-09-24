<?php get_header(); 
$linkL = get_field('box_duble_l_link');
$linkR = get_field('box_duble_r_link');
?>
<section class="col card-group">
    <article class="card">
        <img src="<?php  echo esc_url(get_field('box_duble_l_image')['url']); ?>" class="card-img-top" alt="Left image">
        <div class="card-body">
            <h5 class="card-title"><?php the_field('box_duble_l_title'); ?></h5>
            <p class="card-text"><?php the_field('box_duble_l_text'); ?></p>
            <p class="card-text"><a href="<?php echo $linkL['url']; ?>"><?php echo $linkL['title']; ?></a></p>
        </div>
    </article>
    <article class="card">
        <img src="<?php  echo esc_url(get_field('box_duble_r_image')['url']); ?>" class="card-img-top" alt="Right image">
        <div class="card-body">
            <h5 class="card-title"><?php the_field('box_duble_r_title'); ?></h5>
            <p class="card-text"><?php the_field('box_duble_r_text'); ?></p>
            <p class="card-text"><a href="<?php echo $linkR['url']; ?>"><?php echo $linkR['title']; ?></a></p>
        </div>
    </article>
</section>

<?php get_footer(); ?>