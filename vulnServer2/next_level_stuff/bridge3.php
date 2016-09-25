<?php
$pass = $_POST['pass'];
$pntr = fopen("password.txt","r");
$rlPass = fgets($pntr);
$rlPass = substr($rlPass,0,-1);
$auth = $_COOKIE['auth-level'];

if ($auth != "admin") {
  echo("<p>Error: only users with at the 'admin' auth level are permitted to use this area.</p>");
} elseif ($pass == $rlPass) {
  echo("<script>window.location.href='../txtfiles.php'</script>");
} else {
  echo("<script>alert('Error: password incorrect.');window.location.href='next_level.html'</script>");
}

?>
