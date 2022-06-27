<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 * Template Name: О нас
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="hero hero_about">
			<div class="hero__line hero__line_1"></div>
			<div class="hero__line hero__line_2"></div>
			<div class="ellipse ellipse_red"></div>
			<div class="ellipse ellipse_yellow ellipse_yellow_small"></div>
			<div class="ellipse ellipse_yellow ellipse_yellow_big"></div>
			<div class="ellipse ellipse_blue ellipse_blue_big"></div>
			<div class="container hero__container">
				<div class="hero__inner">
					<div class="hero__heading">
						<h1 class="hero__title">

							<?php if( get_field("title") ): the_field( "title" ); else : the_title(); endif; ?>

						</h1>
						<?php if (get_field('title_art')) { ?>

							<span class="hero__slogan art-font"><?php the_field('title_art'); ?></span>

						<?php } ?>						
					</div>
					<?php if (get_field('title_desc')) { ?>

						<p class="hero__desc hero__desc_main"><?php the_field('title_desc'); ?></p>

					<?php } ?>
				</div>
			</div>
		</section>

		<?php $group_fields = get_field('roadmap'); ?>

		<?php if ($group_fields) { ?>
			<section class="roadmap">
				<div class="container roadmap__container">				
					<ul class="roadmap__list column">
						<?php foreach ($group_fields as $key => $item) { ?>
								<?php if ($item) { ?>
									<li class="roadmap__item roadmap-item">
										<h2 class="roadmap-item__heading"><?php echo $item['roadmap_year']; ?></h2>
										<p class="roadmap-item__desc"><?php echo $item['roadmap_desc']; ?></p>
									</li>
								<?php } ?>
						<?php } ?>
					</ul>				
				</div>
			</section>
		<?php } ?>

		<?php if( have_rows('quote') ): ?>

			<section class="quote">
				<div class="container quote__container">				
					<div class="quote__inner row">
						<?php while( have_rows('quote') ): the_row(); 
			
						// переменные
						$quote_image = get_sub_field('quote_avatar');
						$quote_txt = get_sub_field('quote_txt');
						$quote_name = get_sub_field('quote_name');
						$quote_desc = get_sub_field('quote_desc');
			
						?>

						<div class="quote__txt-wrapper">
							<span class="quote__el"></span>
							<p class="quote__txt"><?php echo $quote_txt; ?></p>
							<span class="quote__el quote__el_last"></span>
						</div>
						<div class="quote__author column">
							<img src="<?php echo $quote_image['url']; ?>" alt="Аватарка автора цитаты" class="quote__img">
							<div class="quote__author-info column">
								<span class="quote__name"><?php echo $quote_name; ?></span>
								<span class="quote__desc"><?php echo $quote_desc; ?></span>
							</div>						
						</div>

						<?php endwhile; ?>
					</div>
				</div>
			</section>

		<?php endif; ?>

		<section class="odds">
			<div class="ellipse ellipse_red"></div>
			<div class="ellipse ellipse_blue"></div>
			<div class="ellipse ellipse_yellow"></div>
			<div class="container odds__container">
				<div class="odds__inner row">
					<?php if (get_field('about_art')) { ?>
						<div class="odds__txt art-font"><?php echo the_field('about_art'); ?></div>
					<?php } ?>
					<?php $group_fields2 = get_field('about_adv'); ?>

					<?php if ($group_fields2) { ?>			
								<ul class="odds__list">
									<?php $odds_count = 1; ?>
									
									<?php foreach ($group_fields2 as $key => $item) { ?>
											<?php if ($item) { ?>
												
												<?php if (get_field('about_art') && $odds_count === 3) { ?>
													<div class="odds__txt art-font odds__txt_mobile"><?php echo the_field('about_art'); ?></div>
												<?php } ?>
									
												<li class="odds__item odds-item">
													<h2 class="odds-item__caption"><?php echo $item['adv_title']; ?></h2>
													<p class="odds-item__desc"><?php echo $item['adv_desc']; ?></p>
												</li>
												
											<?php $odds_count++; } ?>
									<?php } ?>
								</ul>				
					<?php } ?>

				</div>
			</div>
		</section>

		<section class="cta-hr">
			<div class="container cta-hr__container">
				<div class="cta-hr__inner">
					<h2 class="cta-hr__heading">Готовы к взлету?</h2>
					<span class="cta-hr__txt">Мы всегда ищем амбициозных и сильных профессионалов.</span>
					<span class="cta-hr__txt cta-hr__txt_has_link">Присылай резюме в Телеграм 
						<?php if (get_field('hr_link')) { ?>  
							<a class="cta-hr__link" href="<?php echo the_field('hr_link'); ?>" target="_blank"><?php echo the_field('hr_link_txt'); ?></a>
						<?php } ?>
					</span>
					<div class="cta-hr__links row">
						<?php if (get_field('hr_link')) { ?>  
							<a href="<?php echo the_field('hr_link'); ?>" target="_blank" class="cta-hr__link-tg cta-hr__link_btn btn">Стать частью команды</a>
						<?php } ?>
						<?php if (get_field('hr_link_hh')) { ?>  
							<a href="<?php echo the_field('hr_link_hh'); ?>" target="_blank" class="cta-hr__link-hh cta-hr__link_btn btn">Мы на</a>
						<?php } ?>					
					</div>
				</div>									
			</div>
			<?php 
				$hr_img = get_field('hr_img');
				if ($hr_img) { ?>
					<div class="cta-hr__img" style="background-image: url(<?php echo $hr_img['url']; ?>);"></div>									
			<?php	} ?>
		</section>

		


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
