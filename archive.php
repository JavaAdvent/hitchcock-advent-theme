<?php
/*
Template Name: Archives
*/

$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$args = array(
    'paged' => $paged,
    'posts_per_page' => '9',
    'post_type' => 'post',
    'orderby' => 'date',
    'oder' => 'DESC',
    'date_query' => array(
        array(
          'before' => array(
            'year' => date( 'Y' ) - 1,
          ),
          'inclusive' => true,
        ),
    ),
);
query_posts( $args );

get_header(); ?>

<div class="content section-inner">

    <?php if ( have_posts()  ): ?>
        <div class="posts" id="posts">

            <?php while ( have_posts() ) {

                    // setup_postdata( $post );
                    the_post();
                    get_template_part( 'content', get_post_format() );

                }
            ?>

            <div class="clear"></div>

        </div>
    <?php endif; ?>

    <!-- Navigation -->
    <?php get_template_part( 'pagination' ); ?>
    <!-- /Navigation -->

</div>

<?php
get_footer();