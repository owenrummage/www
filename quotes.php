<?php
require "helpers/db/Quote.php";
$result = getAllQuotes();
?>

<html>
	<head>
		<title>Owen Rummage - Quotes</title>
	</head>

	<body>
		<div style="display:flex;flex-direction:column;width:100%;height:100%;align-items:center;">
<?php require("./helpers/partials/header.php"); ?>
<pre>
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
<!--<pre style="position:absolute; bottom:0;">An <a style="color: black; text-decoration: none;" href="https://rummage.cc">Owen Rummage</a> Production</pre>-->
    </div>
  </body>
</html>
