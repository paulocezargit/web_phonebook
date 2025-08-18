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
				<button class="searchengine-button-search phonelist-button">Search</button>
				<button class="searchengine-button-new phonelist-button">New Contact</button>
			</div>

			<div class="phonelist">

				<?php for($i = 0; $i < 20; $i++){ ?>

					<div class="phonelist-item">
						<div class="phonelist-item-center">
							<div class="phonelist-item-name">Name Contact</div>
						</div>
						<div class="phonelist-item-center">
							<div class="phonelist-item-number">+55 (21) 1324-2334</div>
						</div>
						<div class="phonelist-item-center">
							<div class="phonelist-item-button-edit phonelist-button">Edit</div>
						</div>
						<div class="phonelist-item-center">
							<div class="phonelist-item-button-remove phonelist-button">Remove</div>
						</div>
					</div>

				<?php } ?>

			</div>
		</div>

	</div>



	<div class="popupnew">
		<div class="popupnew-box">
			<div class="popupnew-group">
				<label class="popupnew-label">Name</label>
				<input class="popupnew-input" name="name" placeholder="">
			</div>
			<div class="popupnew-group">
				<label class="popupnew-label">Number</label>
				<input class="popupnew-input" name="number" placeholder="">
			</div>
			<div class="popupnew-button">
				<button class="popupnew-button-cancel">Cancel</button>
				<button class="popupnew-button-save">Save</button>
			</div>
		</div>
	</div>
	<div class="background"></div>
	

</body>
</html>