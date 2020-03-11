<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();
?>
        
            <?php      
			echo "<h2>". category_description( get_category_by_slug('evenements')) . "</h2>"; 
			?>
		
			<section id="evenements">
			<?php

			while ( have_posts() ) :
 				the_post();
				//echo  '<p>'. get_the_date('j / m') . '</p>';
				$jour = (int)get_the_date('j');
				$mois = (int)get_the_date('m');
				$mois = $mois%3+1;
				// echo '<p>' . ($mois%3 + 1) . '</p>'; 
				$gridArea = $jour . '/' . $mois . '/' . ($jour+1) . '/' . ($mois+1);
				// echo '<p>' .$gridArea . '</p>' ;
				echo '<h2  style="grid-area:'. $gridArea . '">' . get_the_title() . $gridArea .get_the_date(' j / m / Y') .'</h2>';
			endwhile;
		?>
        </section>
<?php
get_sidebar();
get_footer();
