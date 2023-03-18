<?php
require "helpers/db/Quote.php";
$result = getAllQuotes();
?>

<html>
	<head>
		<title>Funnie Quotes</title>

	</head>
	<body>

		<pre>
QUOTES
-------
These are things ive said, or friends have said that are funny or meaningful

<?php while ($row = $result->fetch_assoc()) {
    echo '	* "' .
        $row["Quote"] .
        '" - ' .
        $row["Person"] .
        " (" .
        $row["Timestamp"] .
        ")\n";
} ?>
		</pre>

	</body>
</html>
