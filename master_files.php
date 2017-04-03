<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>title</title>
		<script src="/ajax.js"></script>
		<link rel="stylesheet" href="/ass011_files.css" type="text/css">
	</head>
	<body>
		<section class="row">
			<div class="col-2"></div>
			
			<div class="col-8">
				<section class="row">
					<div class="col-2 col-m-0"></div>
					<div class="col-8 col-m-12 content">
						<?php
							include($page);
						?>

					</div>
					<div class="col-2 col-m-0"></div>	
				</section>
			</div>
			
			<div class="col-2"></div>
		</section>
		
	</body>
</html>