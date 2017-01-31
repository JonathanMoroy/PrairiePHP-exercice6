<?php
function alpha($alphabetic)
{
  sort($alphabetic);
  return($alphabetic);
}
$language = array("HTML","CSS","Javascript","PHP");
$languageAlpha = alpha($language);
foreach ($languageAlpha as $numero => $resultat) {
  echo "[" . $numero . "] = " . $resultat . " ";
}
function fusion($vegeto)
{
  $languageFusion = implode($vegeto);
  return($languageFusion);
}
$language = array("HTML","CSS","Javascript","PHP");
$languageFinal = fusion($language);
echo $languageFinal;
?>
