<?php

if (!$_GET["post"]) {
    return header("Location: /");
}

require "./helpers/db/Posts.php";

$row = getPost($_GET["post"]);

if ($row["Title"] == "") {
    return header("Location: /404.php");
}
?>

<html>
	<head>
		<title>Funnie Quotes</title>

		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $row["Title"]; ?>"/>
		<meta property="og:description" content='<?php echo $row["Content"]; ?>' />
	</head>

	<body>
<?php require("./helpers/partials/header.php"); ?>
<pre>
<?php echo $row["Title"] .
    " (" .
    $row["Date"] .
    ")\n" .
    str_repeat("-", strlen($row["Title"] . " (" . $row["Date"] . ")")) .
    "\n"; ?>

<?php echo $row["Content"]; ?>
</pre>
	</body>
</html>
