<html>
<head>
<link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="session"
		data-status='<?php if(!empty($_GET["status"])) { echo $_GET["status"]; } ?>'>
		<div id="box">
			<h1 class="text">Set PHP session time</h1>
			<div class="text">
				<a href="set-session.php" class="btn">Reset Session</a>
			</div>

			<div id="status"></div>
		</div>
		<div id="message"></div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="./assets/js/session.js"></script>
</body>
</html>