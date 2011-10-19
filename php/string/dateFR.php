
function dateFR($timestamp)
{
  $jour = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
  $mois = array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

  $minuit = strtotime(date('Y-m-d', $timestamp));
  if (date('dmY', $timestamp) == date('dmY'))
    $date= 'Aujourd\'hui';
  else if ($minuit == strtotime(date('Y-m-d') . ' - 1 day'))
    $date ='Hier';
  else
    $date = $jour[date("w", $timestamp)] . " " . date("d", $timestamp) . " " . $mois[date("n", $timestamp)] . " " . date("Y", $timestamp);
  
  $horaire = " à " . date("H", $timestamp) . ":" . date("i", $timestamp);


  return $dateDuJour . $horaire;
}
