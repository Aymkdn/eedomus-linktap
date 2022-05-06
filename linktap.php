<?php
// on récupère les paramètres
$username = getArg('username', true);
$apiKey = getArg('apiKey', true);
$gatewayId = getArg('gatewayId', true);
$taplinkerId = getArg('taplinkerId', true);
$duration = getArg('duration', true);
$action = getArg('action', true); // $action vaut 0 pour éteindre l'arrosage, ou 100 pour l'allumer
if ($action == 0) $action="false";
else if ($action == 100) $action="true";
else {
  echo "Erreur : l'action vaut soit 0 (éteindre), soit 100 (allumer)";
  return;
}

// on envoie la requête
echo httpQuery("https://www.link-tap.com/api/activateInstantMode", "POST", "username=$username&apiKey=$apiKey&gatewayId=$gatewayId&taplinkerId=$taplinkerId&action=$action&duration=$duration&eco=false&autoBack=true");

?>
