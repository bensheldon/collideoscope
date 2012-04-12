<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php if ($title) print $title . " : "; ?>COLLIDEOSCOPE</title>
		<link rel="stylesheet" type="text/css" href="/v1.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="/pf.js" type="text/javascript"></script>
</head>
<body>
	<div id="help">
		<h2>Why Isn't My Word Showing Up?</h2>
		<p>
			You need to wait for someone else to submit a word and complete the COLLIDEOSCOPE. 
			Also, try the * link to <a href="/view">view all COLLIDEOSCOPE</a>. 
		</p>
		<h2>Who made this?</h2>
		<p>
			Originally designed and developed as POPEFACT by <a href="http://decielo.com" target="_blank">Carlos d'Avis</a></br>
			Modifications by <a href="http://island94.org" target="_blank">Ben Sheldon</a>
		</p>
		<a class="close">close</a>
	</div>
	<div id="page">
		<?php include './theme/messages.php' ?>
		
		<?php print $output; ?>
		
		<?php if (!empty($form)) : ?>
		<div id="fact-form" class="form">
			<?php print $form; ?>		
		</div>
		<?php endif; ?>
		<br />
	</div>
	<div id="sticky">
		<a href="/" class="home">H</a>
		<a href="/view" class="view">*</a>
		<a class="help">?</a>
	</div>
	<?php if ($count) : ?>
	<div id="footer">
		Displaying <?php print $count; ?> <?php print ($count > 1) ? 'COLLIDEOSCOPEs' : 'COLLIDEOSCOPE'; ?> 
	</div>
	<?php endif; ?>
</body>
</html>