<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>AIESEC Japan.</title>

	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/lity.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/styles.css">

</head>

<body id="BackPhp">
	<?php

	mb_language( "Japanese" );
	mb_internal_encoding( "UTF-8" );

	$message = "名前：" . $_POST[ "name" ] . "\n出身高校：" . $_POST[ "highschool" ] . "\n進学予定大学：" . $_POST[ "univercity" ] . "\n応募するイベント：" . $_POST[ "select" ] . "\n本文：" . $_POST[ "message" ];

	if ( !mb_send_mail( "info@aiesec.jp", $_POST[ "name" ], $message, "From: " . $_POST[ "mail" ] ) ) {
		exit( "error" );
	}

	?>

	<div id="MessageFormBox">
		<div id="MessageFormCenterAnswer">
			送信できませんでした。<br>
			<p id="MessageSub">※３秒後自動的にTopページに移動します。</p>
		</div>
	</div>

	<script type="text/javascript">
		setTimeout( 'greeting()', 3000 );

		function greeting() {
			location.href = "index.html";
		}
	</script>

</body>

</html>