<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colorpicker.css" type="text/css" media="screen" />

	<link href='//fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Kreon:light,regular' rel='stylesheet' type='text/css'/>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<?php do_action('et_header_top'); ?>
	<div id="container">
		<div class="ulo">
			<div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center header-content et_pb_text_0">
				
				<h1 style="text-align: center;">TCT &amp; Associates, CPAs</h1>
				<p style="text-align: center;"><span class="et_pb_fullwidth_header_subhead">Certified Public Accountants</span></p>

			</div>
		</div>