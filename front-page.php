<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">

	 <!-- Get featured posts -->
	 <?php
	 $args = array( 'posts_per_page' => 5, 'order_by' => 'rand', 'post_status' => 'publish', 'post_type' => 'post', 'tag' => 'featured' );
	 $counter = 0;
	 $featured_posts = get_posts( $args );
	 foreach ( $featured_posts as $post ) : setup_postdata( $post ); ?>

		 <?php if ($counter == 0) { ?>
			 <div class="item active"
		 <?php } else { ?>
			 <div class="item"
		 <?php ;} ?>
			 
			style="
				background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> );
				background-repeat: no-repeat;
    			background-size: cover;
    			background-position: center;">

			   <div class="container">
				 <div class="carousel-caption">
				   <h2><?php the_title(); ?></h2>

				   <p> <?php echo wp_trim_words(get_the_content(), 25, null); ?> </p>
				   <p><a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button"><?php echo wp_trim_words(get_the_title(), 5, null); ?></a></p>
				 </div>
			   </div>
			 </div>

	 <?php 
	 $counter++;
	 endforeach; 
	 wp_reset_postdata();?>

	</div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div> <!-- /.carousel -->

<!-- Start the Twitter Grids again -->
<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-8">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>