<?php
if (htmlspecialchars(stripslashes(trim($_POST["password"]))) == "321cat") {
    echo("<script>alert('wilkommen!');window.location.href='page2.html'</script>");
}
?>
