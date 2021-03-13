<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Martin_Arroyo
 */

?>
	<head>

	<!-- Typewriter effect -->
	<style>
	.css-typing h2 {
	  border-right: .15em solid black;
	  white-space: nowrap;
	  overflow: hidden;
	  display:block;
	}
	.css-typing h2:nth-child(1) {
	  width: 7.3em;
	  -webkit-animation: type 2s steps(40, end);
	  animation: type 2s steps(40, end);
	  -webkit-animation-fill-mode: forwards;
	  animation-fill-mode: forwards;
	}

	.css-typing h2:nth-child(2) {
	  width: 11.5em;
	  opacity: 0;
	  -webkit-animation: type2 3s steps(40, end);
	  animation: type2 3s steps(40, end);
	  -webkit-animation-delay: 4s;
	  animation-delay: 3s;
	  -webkit-animation-fill-mode: forwards;
	  animation-fill-mode: forwards;
	}

	.css-typing h2:nth-child(3) {
	  width: 11.5em;
	  opacity: 0;
	  -webkit-animation: type3 3.25s steps(30, end), blink .5s step-end infinite alternate;
	  animation: type3 3.25s steps(30, end), blink .5s step-end infinite alternate;
	  -webkit-animation-delay: 8s;
	  animation-delay: 8s;
	  -webkit-animation-fill-mode: forwards;
	  animation-fill-mode: forwards;
	}

	@keyframes type {
	  0% {
	    width: 0;
	  }
	  99.9% {
	    border-right: .15em solid black;
	  }
	  100% {
	    border: none;
	  }
	}

	@-webkit-keyframes type {
	  0% {
	    width: 0;
	  }
	  99.9% {
	    border-right: .15em solid black;
	  }
	  100% {
	    border: none;
	  }
	}

	@keyframes type2 {
	  0% {
	    width: 0;
	  }
	  1% {
	    opacity: 1;
	  }
	  99.9% {
	    border-right: .15em solid black;
	  }
	  100% {
	    opacity: 1;
	    border: none;
	  }
	}

	@-webkit-keyframes type2 {
	  0% {
	    width: 0;
	  }
	  1% {
	    opacity: 1;
	  }
	  99.9% {
	    border-right: .15em solid black;
	  }
	  100% {
	    opacity: 1;
	    border: none;
	  }
	}

	@keyframes type3 {
	  0% {
	    width: 0;
	  }
	  1% {
	    opacity: 1;
	  }
	  100% {
	    opacity: 1;
	  }
	}

	@-webkit-keyframes type3 {
	  0% {
	    width: 0;
	  }
	  1% {
	    opacity: 1;
	  }
	  100% {
	    opacity: 1;
	  }
	}

	@keyframes blink {
	  50% {
	    border-color: transparent;
	  }
	}
	@-webkit-keyframes blink {
	  50% {
	    border-color: transparent;
	  }
	}

	.marquee-fas{
	  margin-right:2rem;
	}

	.marquee{
	  display: block;
	  text-align: left;
	}

	.entry-content{
	  height: 100%;
	}
	.marquee-line{
	  font-size: xxx-large;
	}
	#web-dev-line{
	  font-family: Jura;
	  font-weight: bold;
	}
	</style>

	</head>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php martinarroyo_post_thumbnail(); ?>

		<div class="entry-content">
	    <div>
	        <h2 id="greeting"> Hi, I'm Martin.</h2>
	    </div>
	    <div class="css-typing">
	      <div class="marquee">
	        <h2 class="marquee-line"><i class="fas fa-feather marquee-fas"></i>Writer</h2>
	        <h2 class="marquee-line" id="web-dev-line"><i class="fas fa-desktop marquee-fas"></i><code>Web Developer</code></h2>
	        <h2 class="marquee-line"><i class="fas fa-hand-spock marquee-fas"></i>Technophile</h2>
	    </div>
	  </div>
		</div><!-- .entry-content -->
	  <div class="post-marquee">
	    <p id="about-blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum ipsum purus,
	      id euismod tellus venenatis ac. Donec vitae dolor erat. Nam molestie velit ac odio dapibus,
	      nec sollicitudin nisi condimentum. Mauris id scelerisque turpis, at aliquam justo.
	      Sed vitae ultricies ex. Nunc laoreet elementum lorem sit amet condimentum.
	      Sed maximus aliquam convallis. Praesent lacinia est eget dictum vulputate.
	      Morbi tempor non odio at gravida. Fusce suscipit diam fermentum,
	      vehicula dolor id, vestibulum elit. Aliquam sapien lacus,
	      tristique eget ante vitae, rutrum faucibus magna. </p>

	  </div>
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'martinarroyo' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</article><!-- #post-<?php the_ID(); ?> -->
