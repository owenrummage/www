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
<pre>
=====================================================================================
*     ____                         ____                                             *
*    / __ \_      _____  ____     / __ \__  ______ ___  ____ ___  ____ _____ ____   *
*   / / / / | /| / / _ \/ __ \   / /_/ / / / / __ `__ \/ __ `__ \/ __ `/ __ `/ _ \  *
*  / /_/ /| |/ |/ /  __/ / / /  / _, _/ /_/ / / / / / / / / / / / /_/ / /_/ /  __/  *
*  \____/ |__/|__/\___/_/ /_/  /_/ |_|\__,_/_/ /_/ /_/_/ /_/ /_/\__,_/\__, /\___/   *
*           Software Engineer & FOSS Advicate                        /____/         *
=====================================================================================
</pre>
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
