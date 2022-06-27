<?php 
$post = get_post();
$service_image = get_field('service_image');
$service_price = get_field('service_price');
?>

<div class="swiper-slide"> <img class="service-section__service-img" src="<?=$service_image?>" alt="">
    <div class="service-section__service-name"><?php echo get_the_title($post)?></div>
    <?php if (have_rows('service_desc_repeater')):?>
    <?php while( have_rows('service_desc_repeater') ) : the_row();
            $text_par = get_sub_field("service_desc_par");?>
    <div class="service-section__par"><?=$text_par?></div>
    <?php endwhile;?>
    <?php endif;?>

    <div class="service-section__row">
        <div class="service-section__price"><?=$service_price?></div><a class="service-section__more"
            href="<?php the_permalink($post);?>">Подробнее</a>
    </div>
</div>