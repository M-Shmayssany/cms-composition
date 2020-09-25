<?php get_header(); 
$linkL = get_field('bandeau_l_link');
$linkR = get_field('bandeau_r_link');
?>
<section class="card-group">
    <article class="card">

            <img src="<?php  echo esc_url(get_field('bandeau_l_image')['url']); ?>" class="card-img-top" alt="Left image">
        <div id="top-left-card" class="card-body">
            <h5 class="card-title"><?php the_field('bandeau_l_title'); ?></h5>
            <p class="card-text"><?php the_field('bandeau_l_text'); ?></p>
            <p class="card-text"><a href="<?php echo $linkL['url']; ?>"><?php echo $linkL['title']; ?></a></p>
        </div>
    </article>
    <article class="card">
        <img src="<?php  echo esc_url(get_field('bandeau_r_image')['url']); ?>" class="card-img-top" alt="Right image">
        <div id="top-right-card" class="card-body">
            <h5 class="card-title"><?php the_field('bandeau_r_title'); ?></h5>
            <p class="card-text"><?php the_field('bandeau_r_text'); ?></p>
            <p class="card-text"><a class="text-decoration-none" href="<?php echo $linkR['url']; ?>"><?php echo $linkR['title']; ?></a></p>
        </div>
    </article>
</section>
<section id="intro">
    <div>
        <article id="intro-top">
            <h5><?php the_field('intro_title'); ?></h5>
            <p><?php the_field('intro_text'); ?></p>
        </article>
        <article id="intro-bottom">
            <p><?php the_field('intro_wysiwyg'); ?></p>
        </article>
    </div>
    <div id="intro-right">
        <img src="<?php  echo esc_url(get_field('intro_image')['url']); ?>" alt="intro">
    </div>

</section>
<section id="milieu">
    <article>
        <img src="<?php echo esc_url(get_site_icon_url()); ?>" alt="">
    
    <p><?php the_field('milieu_text'); ?></p>
    <p><?php the_field('milieu_link'); ?></p>
    </article>
    <article>
        
    </article>
    
</section>

<?php get_footer(); ?>