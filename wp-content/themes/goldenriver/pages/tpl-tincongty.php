<?php
/*
Template Name: Tin Tức công ty
*/
?>
<?php get_header(); ?>
<?php 
$array_taxonamy = array();

$terms = get_terms( array(
    'taxonomy' => 'loai_tin',
    
) );
$count_taxonamy =sizeof($terms);
for($i =0;$i <=$count_taxonamy; $i++){
	array_push($array_taxonamy,$terms[$i]->slug);// code thua
}


$the_query = new WP_Query( array(
    'post_type' => 'tintuc',
    'tax_query' => array(
        array (
            'taxonomy' => 'loai_tin',
            'field' => 'slug',
            'terms' => 'tin_cong_ty',
        )
    ),
) );



/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/


?>

<div class="section innerpager" id="news-page">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs text-center news--tab">
		<li role="presentation" class="active"><a href="<?php echo  get_permalink( get_page_by_title('Công Ty'))?>">Tin công ty</a></li>
		<li role="presentation"><a href="<?php echo  get_permalink( get_page_by_title('Báo Chí'))?>">Tin báo chí</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="tab1">
			<div class="container">
				<div class="row">
					<div class="list-items list-items--grip">
						 <?php
						while ( $the_query->have_posts() ) :
   						 $the_query->the_post();
							$image =  get_the_post_thumbnail_url($post->ID);
						 ?> 

						<div class="item col-md-4 col-sm-6">
							<div class="thumb">
								<a href="<?php echo get_permalink($post->ID); ?>">
                                 <img src="<?php echo $image; ?>" alt="">
                                </a>
							</div>
							<div class="wrapper">
								<div class="index">
									<span class="index__time"><?php echo get_the_date('d/m/y'); ?></span>
								</div>
								<a href="<?php echo get_permalink($post->ID); ?>" class="title text-uppercase"><?php  echo $post->post_title;  ?></a>
							</div>
						</div>

						<?php endwhile; ?>


					</div>

					<div class="pager">
						<ul class="page-numbers">
							<li><span class="page-numbers current">1</span></li>
							<li><a class="page-numbers" href="http://goldenriver.dev/tin-tuc/bao-chi/page/2/">2</a></li>
							<li><a class="page-numbers" href="http://goldenriver.dev/tin-tuc/bao-chi/page/3/">3</a></li>
							<li><a class="page-numbers" href="http://goldenriver.vinhomes.vn/tin-tuc/tin-bao-chi/page/4/">4</a></li>
							<li><a class="page-numbers" href="http://goldenriver.vinhomes.vn/tin-tuc/tin-bao-chi/page/5/">5</a></li>
							<li><a class="page-numbers" href="http://goldenriver.vinhomes.vn/tin-tuc/tin-bao-chi/page/6/">6</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
