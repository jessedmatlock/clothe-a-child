<?php
/*
	Temp late Name: Sample Elements Template
*/
 get_header(); ?>
<?php //echo 'Get Involved'; ?>

</div>

	<ul class="orbit-slider" 
		id="slider2" 
		data-orbit
		data-options="animation:slide;
		              pause_on_hover:true;
		              animation_speed:500;
		              navigation_arrows:true;
		              bullets:false;
					  slide_number: false,
				      circular: false;
				      timer: false;">

	    <li> <img src="http://placeimg.com/1920/480/Tech" alt="slide 1" />
	        <div class="orbit-caption"> Caption One. </div>
	    </li>
	    <li> <img src="http://placeimg.com/1920/480/Animals" alt="slide 2" />
	        <div class="orbit-caption"> Caption Two. </div>
	    </li>
	    <li> <img src="http://placeimg.com/1920/480/People" alt="slide 3" />
	        <div class="orbit-caption"> Caption Three. </div>
	    </li>
	</ul>
	
	<div id="steps">
		<div class="row">
		    <div class="small-12 medium-12 large-3 columns">
		        <h3 class="steps-title">HOW CAN YOU HELP</h3>
		    </div><!-- end columns -->
		    <div class="small-12 medium-12 large-3 columns">
			    <a href="javascript:void(0);" id="" class="step-link">	
					<div class="step-number">
						01
					</div>
					<div class="step-line"></div>
					<div class="step-text">
						Make a Donation
					</div>
		        </a>
		    </div><!-- end columns -->
		    <div class="small-12 medium-12 large-3 columns">
			    <a href="javascript:void(0);" id="" class="step-link">	
					<div class="step-number">
						02
					</div>
					<div class="step-line"></div>
					<div class="step-text">
						Become a Volunteer
					</div>
		        </a>
		    </div><!-- end columns -->
		    <div class="small-12 medium-12 large-3 columns">
		        <a href="javascript:void(0);" id="" class="step-link">	
					<div class="step-number">
						03
					</div>
					<div class="step-line"></div>
					<div class="step-text">
						Sponsor a Community
					</div>
		        </a>
		    </div><!-- end columns -->
		</div><!-- end row -->
		
	</div>
	
	
<div class="row">

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<!--?php reverie_entry_meta(); ?-->
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
						
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
	
	
		</div><!-- close row to start section-design -->
	</div><!-- close container to start section-design -->
	<div class="section-design color-blue pattern-bottles">
		<h2 class="section-heading">Section Heading</h2>
		<div class="section-content">This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</div>
	</div>
	<div class="row"><!-- open row after section-design -->
	    <div class="small-12 medium-12 large-12 columns"><!-- open column after section-design -->
		
		
		
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		
			</div><!-- close row to start section-design -->
		</div><!-- close container to start section-design -->

		<div class="section-circles">
			<img src="<?php echo get_template_directory_uri(); ?>/img/section-circles.jpg"  class="circle-bg" id=""  alt="" />
			<div class="row">
			    <div class="small-12 medium-4 large-4 columns">
			        <img src="<?php echo get_template_directory_uri(); ?>/img/child_icon1.png"  class="circle-icon" id=""  alt="" />
					<div class="circle-title">Circle Title Here</div>
					<p class="circle-content">We surround your children with sincere love, absolutely tenderness and care as well as we do it to our own children.</p>
			    </div><!-- end columns -->
			    <div class="small-12 medium-4 large-4 columns">
			        <img src="<?php echo get_template_directory_uri(); ?>/img/games_icon.png"  class="circle-icon" id=""  alt="" />
					<div class="circle-title">Circle Title Here</div>
					<p class="circle-content">We surround your children with sincere love, absolutely tenderness and care as well as we do it to our own children.</p>
			    </div><!-- end columns -->
			    <div class="small-12 medium-4 large-4 columns">
			        <img src="<?php echo get_template_directory_uri(); ?>/img/car_icon.png"  class="circle-icon" id=""  alt="" />
					<div class="circle-title">Circle Title Here</div>
					<p class="circle-content">We surround your children with sincere love, absolutely tenderness and care as well as we do it to our own children.</p>
			    </div><!-- end columns -->
			</div><!-- end row -->
		</div><!-- end section circles -->
		
		<div class="row"><!-- open row after section-design -->
		    <div class="small-12 medium-12 large-12 columns"><!-- open column after section-design -->
	
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
		
			
			</div><!-- close row to start section-design -->
		</div><!-- close container to start sectio-design -->
		<div class="section-design color-red pattern-cars">
			<h2 class="section-heading">Section Heading</h2>
			<div class="section-content">This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</div>
		</div>
		<div class="row"><!-- open row after section-design -->
		    <div class="small-12 medium-12 large-12 columns"><!-- open column after section-design -->



				<div class="entry-content">
					<?php the_content(); ?>
					

							<a href="javascript:void(0);" id="" class="cta-button button">Content CTA Button</a>
							<a href="javascript:void(0);" id="" class="button tiny">Tiny Button</a>
							<a href="javascript:void(0);" id="" class="button small">Small Button</a>
							<a href="javascript:void(0);" id="" class="button">Regular Button</a>
							<a href="javascript:void(0);" id="" class="button"><i class="fa fa-heart"></i> Button with Image</a>

							<a href="javascript:void(0);" id="" class="button large">Large Button</a>
							<a href="javascript:void(0);" id="" class="button primary">Primary Button</a>
							<a href="javascript:void(0);" id="" class="button secondary">Secondary Button</a>
							<a href="javascript:void(0);" id="" class="button success">Success Button</a>
							<a href="javascript:void(0);" id="" class="button alert">Alert Button</a>

					
					
					
				</div>
				
				
					</div><!-- close row to start section-design -->
				</div><!-- close container to start section-design -->
				
				<div class="section-design color-purple pattern-horses">
					<h2 class="section-heading">Section Heading</h2>
					<div class="section-content">
						<p>Make A Difference and Become a Volunteer Today 
							<a href="javascript:void(0);" id="" class="cta-button button"><i class="fa fa-users"></i> Join Us Today!</a>
						<p>
							
					</div>
				</div>
				<div class="row"><!-- open row after section-design -->
				    <div class="small-12 medium-12 large-12 columns"><!-- open column after section-design -->



						<div class="entry-content">
							<?php the_content(); ?>
							
							<div class="row">
							    <div class="small-12 medium-12 large-12 columns">
									<ul class="asterisk clearfix">
										<li>Checklist item where your copy can go</li>
										<li>Checklist item where your copy can go</li>
										<li>Checklist item where your copy can go</li>
									</ul>
							    </div><!-- end columns -->
							</div>
							<div class="row">						
							    <div class="small-12 medium-12 large-12 columns">
									<ul class="check clearfix">
										<li>Checklist item where your copy can go</li>
										<li>Checklist item where your copy can go</li>
										<li>Checklist item where your copy can go</li>
									</ul>
							    </div><!-- end columns -->
							</div><!-- end row -->

							
						</div>
				
				</div>
	
	
<?php get_footer(); ?>