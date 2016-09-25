<?php
echo("<head><title>poisoned cookies... NOM NOM NOM</title></head><body bgcolor='black' text='red'>");
setcookie("auth", "False", time() + (86400 * 30), "/");
if (isset($_COOKIE["auth"])) {
  if ($_COOKIE["auth"] != "True") {
    echo("<p>you are not authorised to view this content.</p>");
  } else {
    echo("<h1><u><b>Welcome to Admin.</b></u></h1><br><br><p>that's all folks!</p>");
  }
} else {
  echo("<p>Err: auth cookie not set. something has gone wrong. This is not part of the puzzle. Please go back to page[5].html and try again.</p>");
}
echo("</body>");
?>
