<?php

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>rITaz.: от циклотронов к серверам. Блог веб-разработчика.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<jdoc:include type="head" />
<?php
	$doc->addStyleSheet('templates/'.$this->template.'/css/material.min.css');
	$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
	$doc->addScript('templates/'.$this->template.'/js/material.min.js');

	$template_url = $this->baseurl . '/templates/' . $this->template;
	$base_url = $this->baseurl;
?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.js"></script>

	</head>
	<body>
		<div class="preloader" id="preloader">
			<div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
		</div>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
			<div class="mdl-layout__drawer">
				<div class="mdl-layout-title beermoney">
					<a href="<?php echo $base_url;?>">
						<img src="<?php echo $template_url;?>/images/logo.png">
					</a>
					r<span class="red">IT</span>az
				</div>
				<div class="tags_menu">
					<jdoc:include type="modules" name="tags_menu" style="default" />
				</div>
				<div class="follow">
					<a href="https://vk.com/ritaz" target="_blank"><img src="<?php echo $template_url?>/images/vkontakte.png"></a>
				</div>
			</div>
			<main class="mdl-layout__content">
				<div class="introduce" id="introduce">
					<div class="introduce-in1 mdl-shadow--2dp"></div>
					<div class="introduce-in2 mdl-shadow--2dp">
						<img src="<?php echo $template_url;?>/images/header_balls/github.png">
					</div>
					<div class="introduce-in3 mdl-shadow--2dp">
						<img src="<?php echo $template_url;?>/images/header_balls/md.png">
					</div>
					<div class="introduce-in4 mdl-shadow--2dp">
						<img src="<?php echo $template_url;?>/images/header_balls/html.png">
					</div>
					<div id="meow" class="introduce-in5 mdl-shadow--2dp">
						<img src="<?php echo $template_url;?>/images/header_balls/css.png">
					</div>
					<div class="introduce-in6 mdl-shadow--2dp"></div>
					<div class="introduce-in7 mdl-shadow--2dp"></div>
					<div class="introduce-in8 mdl-shadow--2dp"></div>
					<div class="introduce-in9" id="comet"></div>
				</div>
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--1-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
					<div class="mdl-cell mdl-cell--10-col mdl-cell--12-col-tablet mdl-cell--8-col-phone">
						<jdoc:include type="modules" name="articles" style="default" />
						<jdoc:include type="message" />
						<jdoc:include type="component" />
					</div>
					<div class="mdl-cell mdl-cell--1-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
				</div>
			</main>
		</div>
	    <script>
		    $(document).ready(function() {
		      $('#preloader').fadeOut('slow');
		      $("#comet").animate({marginTop: '130px', marginLeft: '0.5%', opacity: 1 });
		    });
	    </script>
	</body>
</html>