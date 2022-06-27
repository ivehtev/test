<?php 
$popup_image = get_field('popup_image', 'option');
$popup_description = get_field('popup_description', 'option');
?>

<div class="dark-layer js--hidden" id="popup">
    <div class="popup-container">
        <img src="<?=$popup_image?>" alt="" class="popup-container__image">
        <div class="popup-container__description"><?=$popup_description?></div>
    </div>
</div>