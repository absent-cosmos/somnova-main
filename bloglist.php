<?php

$ch = curl_init("http://somnovastudios.blogspot.com/");
$fp = fopen("blogcopy", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

$fp = fopen("blogcopy", "r");
$total = 0;
$fail = 0;
while ($fail < 10000 && ($stuff=fgets($fp)) != EOF) {
  $fail++;
  if (substr($stuff, 0, 44) == "<a href='http://somnovastudios.blogspot.com/") {
    if (substr($stuff, 0, 46) == "<a href='http://somnovastudios.blogspot.com/20") {
      $line = $stuff;
      $line = preg_replace("/Ren..e/", "Ren&eacute;e", $line);
      $line = preg_replace("/B..hm/", "B&ouml;hm", $line);
      echo "<li> &bull; $line </li>";
      $total++;
      if ($total > 5) {
        // echo "...";
        break;
      }
    }
  }
}
fclose($fp);
?>
