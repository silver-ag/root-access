<?php
$pass = $_GET['pass'];
if ($pass == "MyP4ss") {
  echo("<script>window.location.href='lvl1.html';</script>");
} else {
  echo("<script>window.location.href='index.html';</script>");
}
?>
