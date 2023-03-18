<?php
require "helpers/db/Quote.php";

$row = getRandomQuote();
?>



<html>
	<head>
		<title>404 Page not Found</title>
	</head>

	<body style="width:100%;height:100%;display: flex;align-items:center;justify-content:center;">
		<div style="display: flex;flex-direction:column;justify-content:center;">
<pre style="margin-left: auto; margin-right: auto;margin-bottom:0;">
 The page you were looking for cannot be found! (404)
------------------------------------------------------
</pre>
<pre style="margin-top:0;">
<?php if ($row["Quote"]) {
    $input = '"' . $row["Quote"] . '" - ' . $row["Person"];
    echo str_pad($input, 54, " ", STR_PAD_BOTH);
} ?>
</pre>
		</div>
	</body>
</html>
