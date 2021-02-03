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
		<div class="flex-container">
			<div id="logo-container" class="half-flex-container">
				<img id="site-logo" src="http://localhost/daves-test-site/wp-content/uploads/2021/01/daves-emporium-logo.png" alt="daves-emporium-logo"/>
			</div>
			<div class="half-flex-container">
				<nav>
					<ul>
						<li>Shop</li>
						<li><a href="http://localhost/daves-test-site/education/">Education</a></li>
						<li>About</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="mission">
			<h1>Canna Accessories and Seeds Hand Selected for Patients, By Patients</h1>
		</div> <!--End mission section-->
		<div id="shop-content">
			<div id="shop" class="shop-content-flex-container">
				<div class="half-flex-container">
					<div class="flex-item header">
						<h2>Seeds &amp; Accessories</h2>
					</div>	
					<div class="flex-item content">
						<p>View our curated collection of seeds and accessories. From superb variates of seeds to custom accessories, we have everything you've ever wanted!</p>
					</div>
					<button id="consult-button" type="button" onclick="location.href='#contact';">SHOP NOW</button>
				</div>
				<div class="half-flex-container">
					<img class="shop-photo" src="https://images.unsplash.com/photo-1508748169069-82590c9f26e6?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=967&q=80" alt="seeds-img"/>
				</div>
			</div>	
			<div id="education"class="shop-content-flex-container">
				<div class="half-flex-container">
					<img class="shop-photo" src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1266&q=80" alt="book-img"/>
				</div>
				<div class="half-flex-container">
					<div class="flex-item header">
						<h2>Education</h2>
					</div>
					<div class="flex-item content">
						<p>We not only nurture the seeds, we nurture the mind. View our library to read articles, find groups, and learn more about seeds, and life.</p>
					</div>
					<button id="consult-button" type="button" onclick="location.href='/localhost/daves-test-site/education/';">Learn More</button>
				</div>
			</div>	
			<div id="about" class="shop-content-flex-container">
				<div class="half-flex-container">
					<div class="flex-item header">
						<h2>About us</h2>
					</div>
					<div class="flex-item content">
						<p>Dave's Emporium started with a dream and with weed. Now that dream is being the best collection of seeds on the web. Read the whole story now!</p>
					</div>
					<button id="consult-button" type="button" onclick="location.href='#contact';">Learn More</button>
				</div>
				<div class="half-flex-container">
					<img class="shop-photo" src="https://images.unsplash.com/photo-1519074002996-a69e7ac46a42?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="about-img"/>
				</div>
			</div>	
		</div> <!--End shop content section-->	
	</div> <!--End main content section-->
</section> <!--End home page section-->

<?php get_footer(); ?>
