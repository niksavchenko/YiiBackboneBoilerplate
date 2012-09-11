<!DOCTYPE html PUBLIC
	"-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Demande incorrecte</title>
	<style type="text/css">
			/*<![CDATA[*/
		body {
			font-family: "Verdana";
			font-weight: normal;
			color: black;
			background-color: white;
		}

		h1 {
			font-family: "Verdana";
			font-weight: normal;
			font-size: 18pt;
			color: red
		}

		h2 {
			font-family: "Verdana";
			font-weight: normal;
			font-size: 14pt;
			color: maroon
		}

		h3 {
			font-family: "Verdana";
			font-weight: bold;
			font-size: 11pt
		}

		p {
			font-family: "Verdana";
			font-weight: normal;
			color: black;
			font-size: 9pt;
			margin-top: -5px
		}

		.version {
			color: gray;
			font-size: 8pt;
			border-top: 1px solid #aaaaaa;
		}

			/*]]>*/
	</style>
</head>
<body>
<h1>Demande Incorrecte</h1>

<h2><?php echo nl2br(CHtml::encode($data['message'])); ?></h2>

<p>
	La demande n'a pas pu être interprétée par le serveur, due à une mauvaise syntaxe.
	Merci de ne pas répeter la requete sans modifications.
</p>

<p>
	Si vous pensez qu'il s'agit d'une erreur du serveur, veuillez contacter <?php echo $data['admin']; ?>.
</p>

<div class="version">
	<?php echo date('Y-m-d H:i:s', $data['time']) . ' ' . $data['version']; ?>
</div>
</body>
</html>