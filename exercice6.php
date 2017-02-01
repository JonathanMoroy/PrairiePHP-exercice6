<?php
function alpha($alphabetic)
{
  sort($alphabetic);
  return $alphabetic;
}
function fusion($vegeto)
{
  $languageFusion = implode(', ', $vegeto);
  return $languageFusion;
}
$language = array("HTML","CSS","Javascript","PHP");
$languageAlpha = alpha($language);
foreach ($languageAlpha as $resultat) {
  echo $resultat;
}
echo '<br>';
$languageFinal = fusion($language);
echo $languageFinal;
?>
