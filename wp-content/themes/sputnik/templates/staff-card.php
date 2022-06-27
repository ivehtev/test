<?php 
$post = get_post();
$staff_image = get_field('staff_image');
$staff_price = get_field('staff_price');
$sale_price = get_field('sale_price');
?>
<div class="swiper-slide"> <img class="staff-section__staff-img" src="<?=$staff_image?>" alt="">
    <?php if(get_field('sale_price') != ''):?>
    <div class="staff-section__price--sale">Sale</div>
    <?php endif;?>
    <?php?>
    <div class="staff-section__staff-name"><?php echo get_the_title($post)?></div>
    <?php if (have_rows('desc_repeater')):?>
    <div class="staff-section__table">
        <?php while( have_rows('desc_repeater') ) : the_row();
            $text_key = get_sub_field("desc_key");
            $text_value = get_sub_field("desc_value");
            ?>
        <div class="staff-section__row">
            <div class="staff-section__column"><?=$text_key?></div>
            <div class="staff-section__column"><?=$text_value?></div>
        </div>
        <?php endwhile;?>
    </div>
    <?php endif;?>
    <div class="staff-section__row">
        <div class="staff-section__price"><?=$staff_price?>
            <?php 
                if(get_field('sale_price') != ''):
                ?>
            <div class="staff-section__price--prev">
                <?=$sale_price?>
            </div>
            <?php endif;?>
        </div>
        <a class="staff-section__more" href="<?php the_permalink($post);?>">Подробнее</a>
    </div>
</div>