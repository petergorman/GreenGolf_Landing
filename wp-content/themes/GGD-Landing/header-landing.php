<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( ' | ', true, 'right' ); ?> - Tee up a deal</title>
<meta name="description" content="Green Golf Deals tees up the best golf deals from half price green fees to discounted golf gear to weekend trips" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">

<!-- Open Graph data -->
<meta property="og:title" content="Green Golf Deals - Teeing up Australia's best golf deals" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.greengolfdeals.com.au" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/fb-image.jpg" />
<meta property="og:description" content="green Golf Deals tees up the best golf deals from half price green fees to discounted golf gear to weekend trips" />

<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.0.min.js"></script>
<!--[if lt IE 9]><script src="dist/html5shiv.js"></script><![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a id="top"></a>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=246920638747306";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!--<div class="wrapper social-bar">

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-sm-offset-8">
				<div class="">
				
				<div class="twitter-tweet">
					<a href="https://twitter.com/share" class="twitter-share-button" data-text="Check out www.greenGolfDeals.com.au for awesome deals on green fees, golf gear and weekends away." data-count="none">Tweet</a>
				
				</div>
				
				<div class="fb-share">
					<div class="fb-share-button" data-href="http://www.greengolfdeals.com.au/" data-width="90" data-type="button"></div>
				</div>
				
				</div>
			</div>
		</div>
	
	</div><!-- END Container -->
	
<!--</div> END Social Bar -->