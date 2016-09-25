<?php
$usr = $_POST['usr'];
$pss = $_POST['pss'];
$pth = $_POST['pathToInfo'];

$pntr = fopen($pth,"r");
$rlUsr = fgets($pntr);
$rlPss = fgets($pntr);
$rlUsr = substr($rlUsr,0,-1);
$rlPss = substr($rlPss,0,-1);

if ($usr == $rlUsr && $pss == $rlPss) {
  setcookie("auth-level","basic-user");
  echo("<script>window.location.href='next_level_stuff/next_level.html';</script>");
} else {
  echo("<script>alert('username or password incorrect');window.location.href='lvl1.html';</script>");
}
?>
