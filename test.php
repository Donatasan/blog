<!doctype html>
<html>
<head>
		<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

	<link rel="stylesheet" href="includes/static/css/public_styling.css">
	<meta charset="UTF-8">
	<?php require_once('config.php') ?>
	<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<title>Untitled Document</title>
</head>

<body>
	
	<?php $posts = getPublishedPosts(); ?>
				
			<?php foreach ($posts as $post): ?>
	<?php echo $post['title']?>
<?php endforeach; ?>
</body>
</html>
