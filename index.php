<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/mobile.css">
	<link rel="stylesheet" type="text/css" href="assets/css/desktop.css">
</head>
<body>


	<div class="container">

		<div class="box">
			<div class="searchengine">
				<input type="" name="" class="searchengine-input">
				<button class="searchengine-button">Search</button>
			</div>

			<div class="phonelist">

				<?php for($i = 0; $i < 10; $i++){ ?>

					<div class="phonelist-item">
						<div class="phonelist-item-name">Name Contact</div>
						<div class="phonelist-item-number">550123213132</div>
						<div class="phonelist-item-button">Remove</div>
					</div>

				<?php } ?>

			</div>
		</div>

	</div>
	

</body>
</html>