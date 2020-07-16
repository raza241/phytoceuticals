<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
                
                ?>
<section class="banner">
    <div class="container-fluid custom-container">
        <div class="banner-image">
           <?php $first_img = get_post_meta(get_the_ID(),'ms_first_img',true);
			if($first_img!=''){ ?>
				<img class="" src="<?php echo $first_img; ?>" alt="banner image">
			<?php } ?>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="heading">
            <span> <?php the_title(); ?></span>
            <?php the_content(); ?>
        </div>
           <?php
			$ms_single_imgs = get_post_meta(get_the_ID(),'ms_single_img',true);
            //print_r($ms_single_imgs);
			if ($ms_single_imgs !='') {
			foreach($ms_single_imgs as $ms_single_img){ ?>
			<div class="col-lg-12 col-md-12 col-sm-12 image-1 gallery">
                <?php if($ms_single_img!='') {
                    //print_r($ms_single_img);
				    $attachment_id = attachment_url_to_postid($ms_single_img);
				    //echo '<br>'.'<br>'.$attachment_id;
				    $img_meta = get_post($attachment_id);
                ?>

				<a title="<?php echo $img_meta->post_excerpt; ?>" href="<?php echo $ms_single_img; ?>" rel="prettyPhoto" class="pp_description"  ><img class="lazy" data-src="<?php echo $ms_single_img; ?>" alt=""></a>

                <?php if ($img_meta->post_excerpt !=''){ ?>
                    <span class="caption-img"><?php echo $img_meta->post_excerpt; ?></span>
                <?php } ?>

			<?php } ?>
            </div>
			<?php } } ?>
    </div>
</section>

<?php
endwhile;
		?>

<?php
get_footer();
?>
