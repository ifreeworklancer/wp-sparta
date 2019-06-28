<?php get_header(); 

	$templates = [
		'header-banner',
		'side',
		'cases',
		'teams',
		'services',
		'partners',
	];
	foreach ($templates as $template) {
		get_template_part('includes/template-parts/' . $template);
	}

        
get_footer();