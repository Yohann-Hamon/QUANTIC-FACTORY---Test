<?php

$json = file_get_contents('data/activites-equipement.json');
$data = json_decode($json, true);

$activites = array_filter($data['results'], function ($activite) {
    return $activite['arrondissement'] != '';
});

if (!isset($_SESSION['arrondissement'])) {
    $_SESSION['arrondissement'] = '';
}

$select = '<select id="arrondissement">
    <option value="">Choississez une arrondissement</option>;';
    
foreach ($activites as $activite) {
    $select .= '<option value="' . $activite['arrondissement'] . '">' . $activite['arrondissement'] . '</option>';
}
$select .= '</select>';

$activitesPararrondissement = array_filter($activites, function ($activite) {
    return $activite['arrondissement'] == $_SESSION['arrondissement'];
});

if (isset($_POST['select-arrondissement'])) {
    $_SESSION['arrondissement'] = $_POST['select-arrondissement'];
}

foreach ($activitesPararrondissement as $activite) {
    echo '<li>' . $activite['voie'] . '</li>';
}
?>