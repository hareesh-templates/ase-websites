<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * dynamic css, generated by customizer options
 */

// display navigation to the next/previous set of posts
// ----------------------------------------------------------------------------------------
function buildbench_post_nav() {
// Don't print empty markup if there's nowhere to navigate.
	$next_post	 = get_next_post();
	$pre_post	 = get_previous_post();
	if ( !$next_post && !$pre_post ) {
		return;
	}
?>
	<nav class="post-navigation clearfix">
		<div class="post-previous">
			<?php if ( !empty( $pre_post ) ): ?>
				<a href="<?php echo get_the_permalink( $pre_post->ID ); ?>">
					<h3><?php echo get_the_title( $pre_post->ID ) ?></h3>
					<span><i class="fa fa-long-arrow-left"></i><?php esc_html_e( 'Previous post', 'buildbench' ) ?></span>
				</a>
			<?php endif; ?>
		</div>
		<div class="post-next">
			<?php if ( !empty( $next_post ) ): ?>
				<a href="<?php echo get_the_permalink( $next_post->ID ); ?>">
					<h3><?php echo get_the_title( $next_post->ID ) ?></h3>

					<span><?php esc_html_e( 'Next post', 'buildbench' ) ?> <i class="fa fa-long-arrow-right"></i></span>
				</a>
			<?php endif; ?>
		</div>
	</nav>
<?php }


// display meta information for a specific post
// ----------------------------------------------------------------------------------------
function buildbench_get_breadcrumbs( $seperator = '', $word = '' ) {
	if ( class_exists( 'csf' ) ) {
		$word = buildbench_option( 'breadcrumb_length' );
	}
	echo '<ol class="breadcrumb">';
	if ( !is_home() ) {
		echo '<li><a href="';
		echo esc_url( get_home_url( '/' ) );
		echo '">';
		echo esc_html__( 'Home', 'buildbench' );
		echo "</a></li> " . esc_attr( $seperator );
		if ( is_category() || is_single() ) {
			echo '<li>';
			$category	 = get_the_category();
			$post		 = get_queried_object();
			$postType	 = get_post_type_object( get_post_type( $post ) );
			if ( !empty( $category ) ) {
				echo esc_html( $category[ 0 ]->cat_name ) . '</li>';
			} else if ( $postType ) {
				echo esc_html( $postType->labels->singular_name ) . '</li>';
			}

			if ( is_single() ) {
				echo esc_attr( $seperator ) . "  <li>";
				echo esc_html( $word ) != '' ? wp_trim_words( get_the_title(), $word ) : get_the_title();
				echo '</li>';
			}
		} elseif ( is_page() ) {
			echo '<li>';
			echo esc_html( $word ) != '' ? wp_trim_words( get_the_title(), $word ) : get_the_title();
			echo '</li>';
		}
	}
	if ( is_tag() ) {
		single_tag_title();
	} elseif ( is_day() ) {
		echo"<li>" . esc_html__( 'Blogs for', 'buildbench' ) . " ";
		the_time( 'F jS, Y' );
		echo'</li>';
	} elseif ( is_month() ) {
		echo"<li>" . esc_html__( 'Blogs for', 'buildbench' ) . " ";
		the_time( 'F, Y' );
		echo'</li>';
	} elseif ( is_year() ) {
		echo"<li>" . esc_html__( 'Blogs for', 'buildbench' ) . " ";
		the_time( 'Y' );
		echo'</li>';
	} elseif ( is_author() ) {
		echo"<li>" . esc_html__( 'Author Blogs', 'buildbench' );
		echo'</li>';
	} elseif ( isset( $_GET[ 'paged' ] ) && !empty( $_GET[ 'paged' ] ) ) {
		echo "<li>" . esc_html__( 'Blogs', 'buildbench' );
		echo'</li>';
	} elseif ( is_search() ) {
		echo"<li>" . esc_html__( 'Search Result', 'buildbench' );
		echo'</li>';
	} elseif ( is_404() ) {
		echo"<li>" . esc_html__( '404 Not Found', 'buildbench' );
		echo'</li>';
	}
	echo '</ol>';
}


// display meta information for a specific post
// ----------------------------------------------------------------------------------------
function buildbench_post_meta() {
?>
	<div class="post-meta">
		<?php 
			printf(
				'<span class="post-author"><i class="icon icon-user"></i> <a href="%2$s">%3$s</a></span>',
				get_avatar( get_the_author_meta( 'ID' ), 55 ), 
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), 
				get_the_author()
			);
			
			if ( get_post_type() === 'post' ) {
				echo '<span class="post-meta-date">
					<i class="icon icon-clock"></i>
						'. get_the_date() . 
					'</span>';
			} 
			
			$category_list = get_the_category_list( ', ' );
			if ( $category_list ) {
				echo '<span class="meta-categories post-cat">
					<i class="icon icon-folder"></i>
						'. $category_list .' 
					</span>';
         }
         
         if(is_single()):
            printf(' <span class="post-comment"><i class="icon icon-comment"></i><a href="#" class="comments-link"></a>%1$s</span>',
            get_comments_number(get_the_ID()) 
              ); 
             endif;
			
		?>
	</div>
<?php }


// display meta date for a specific post
// ----------------------------------------------------------------------------------------
function buildbench_post_meta_date() {
	if ( get_post_type() === 'post' ) {

		echo '<span class="post-meta-date meta-date">
				<span class="day">'. get_the_date( 'm' ) . '</span>
				'. get_the_date( 'M' ) . 
			 '</span>';
	}
}

// comment walker
// ----------------------------------------------------------------------------------------
function buildbench_comment_style( $comment, $args, $depth ) {
	if ( 'div' === $args[ 'style' ] ) {
		$tag		 = 'div';
		$add_below	 = 'comment';
	} else {
		$tag		 = 'li ';
		$add_below	 = 'div-comment';
	}
	?>
	<?php
	if ( $args[ 'avatar_size' ] != 0 ) {
		echo get_avatar( $comment, $args[ 'avatar_size' ], '', '', array( 'class' => 'comment-avatar pull-left' ) );
	}
	?>
	<<?php
	echo buildbench_kses( $tag );
	comment_class( empty( $args[ 'has_children' ] ) ? '' : 'parent'  );
	?> id="comment-<?php comment_ID() ?>"><?php if ( 'div' != $args[ 'style' ] ) { ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php }
	?>	
		<div class="meta-data">

			<div class="pull-right reply"><?php
				comment_reply_link(
				array_merge(
				$args, array(
					'add_below'	 => $add_below,
					'depth'		 => $depth,
					'max_depth'	 => $args[ 'max_depth' ]
				) ) );
				?>
			</div>


			<span class="comment-author vcard"><?php
				printf( buildbench_kses( '<cite class="fn">%s</cite> <span class="says">%s</span>', 'buildbench' ), get_comment_author_link(), esc_html__( 'says:', 'buildbench' ) );
				?>
			</span>
			<?php if ( $comment->comment_approved == '0' ) { ?>
				<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'buildbench' ); ?></em><br/><?php }
			?>

			<div class="comment-meta commentmetadata comment-date">
				<?php
				// translators: 1: date, 2: time
				printf(
				esc_html__( '%1$s at %2$s', 'buildbench' ), get_comment_date(), get_comment_time()
				);
				?>
				<?php edit_comment_link( esc_html__( '(Edit)', 'buildbench' ), '  ', '' ); ?>
			</div>
		</div>	
		<div class="comment-content">
			<?php comment_text(); ?>
		</div>
		<?php if ( 'div' != $args[ 'style' ] ) : ?>
		</div><?php
	endif;
}


// pagination within pages or posts if it has a long content
// ----------------------------------------------------------------------------------------
function buildbench_link_pages() {
	$args = array(
		'before'			 => '<div class="page-links"><span class="page-link-text">' . esc_html__( 'More pages: ', 'buildbench' ) . '</span>',
		'after'				 => '</div>',
		'link_before'		 => '<span class="page-link">',
		'link_after'		 => '</span>',
		'next_or_number'	 => 'number',
		'separator'			 => '  ',
		'nextpagelink'		 => esc_html__( 'Next ', 'buildbench' ) . '<I class="fa fa-angle-right"></i>',
		'previouspagelink'	 => '<I class="fa fa-angle-left"></i>' . esc_html__( ' Previous', 'buildbench' ),
	);
	wp_link_pages( $args );
}
