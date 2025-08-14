<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	    body{ font-family: "Roboto", sans-serif; }
	</style>
	<link rel="stylesheet" type="text/css" href="assets/css/mobile.css">
	<link rel="stylesheet" type="text/css" href="assets/css/desktop.css">
</head>
<body>


	<div class="container">

		<div class="box">
           
            <h1 class="supertitle">Web Phonebook</h1>

			<div class="searchengine">
				<input type="" name="" class="searchengine-input" placeholder="Enter something...">
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