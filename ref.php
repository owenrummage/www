<?php
  $code = $_GET["code"];
  
  require("./helpers/db/Referrals.php");

  addVisit($code);

  return Header("Location: /");

?>
