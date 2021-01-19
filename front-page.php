<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="mission">
			<img src="http://localhost/daves-test-site/wp-content/uploads/2021/01/daves-emporium-logo.png" alt="daves-emporium-logo"/>
			<h1>Canna Accessories and Seeds Hand Selected for Patients, By Patients</h1>
		</div>
		<div id="shop-content">
			<div id="shop" class="shop-content-flex-item">
				<h2>Seeds &amp; Accessories</h2>
				<p>View our curated collection of seeds and accessories. From superb variates of seeds to custom accessories, we have everything you've ever wanted!</p>
			</div>	
			<div id="education"class="shop-content-flex-item">
				<h2>Education</h2>
				<p>We not only nurture the seeds, we nurture the mind. View our library to read articles, find groups, and learn more about seeds, and life.</p>
			</div>	
			<div id="about" class="shop-content-flex-item">
				<h2>About us</h2>
				<p>Dave's Emporium started with a dream and with weed. Now that dream is being the best collection of seeds on the web. Read the whole story now!</p>
			</div>	
		</div>	
	</div>
</section>

<?php get_footer(); ?>
