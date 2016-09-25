<?php
$file = $_GET['file'];
echo("<head>
      <title>text file reader</title>
      </head>
      <body bgcolor='black' text=#CADF1E>
      <h><b>Text File Reader</b></h>
      <p>available files:<br>
      fileA.txt<br>
      fileB.txt<br>
      fileC.txt
      </p>
      <form method='GET' action='txtfiles.php'>
      <p>file to read:<input type='text' name='file'>
      <input type=submit value='read'</p>
      </form>");
$file = "txtfiles/".$file;
$pntr = fopen($file,"r");
echo("reading ".$file.":<br><br>");
if ($pntr) {
  while (($out = fgets($pntr,4096)) != false) {
    echo($out);
  }
  fclose($pntr);
}

echo("</body>");
?>
