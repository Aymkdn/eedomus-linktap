<?php
// on r�cup�re les param�tres
$username = getArg('username', true);
$apiKey = getArg('apiKey', true);
$gatewayId = getArg('gatewayId', true);
$taplinkerId = getArg('taplinkerId', true);
$duration = getArg('duration', true);
$action = getArg('action', true); // $action vaut 0 pour �teindre l'arrosage, ou 100 pour l'allumer
if ($action == 0) $action="false";
else if ($action == 100) $action="true";
else {
  echo "Erreur : l'action vaut soit 0 (�teindre), soit 100 (allumer)";
  return;
}

// on envoie la requ�te
echo httpQuery("https://www.link-tap.com/api/activateInstantMode", "POST", "username=$username&apiKey=$apiKey&gatewayId=$gatewayId&taplinkerId=$taplinkerId&action=$action&duration=$duration&eco=false&autoBack=true");

?>
