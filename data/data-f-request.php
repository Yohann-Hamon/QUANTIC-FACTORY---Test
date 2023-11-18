<?php

$json = file_get_contents('data/fontaines.json');
$data = json_decode($json, true);

// $valueHidden = $_POST['hidden-f'];
// echo $valueHidden;


$fontaines = array_filter($data['results'], function ($fontaine) {
    return $fontaine['commune'] != '';
});

if (!isset($_SESSION['commune'])) {
    $_SESSION['commune'] = '';
}

$select = '<select id="select-commune">
    <option value="">Choississez une commune</option>;';
    
foreach ($fontaines as $fontaine) {
    $select .= '<option value="' . $fontaine['commune'] . '">' . $fontaine['commune'] . '</option>';
};

$select .= '</select>';


$listeFontaines = '<table class="table-fontaine">';
if (isset ($_SESSION['commune'])) {

    foreach ($fontaines as $fontaine) {
        if ('PARIS 14EME ARRONDISSEMENT' == $fontaine['commune']) {
            $listeFontaines .='<tr class="tab-box"><th>'. $fontaine['voie'] . '</tr><th class="tab-box">' . $fontaine['commune'] .'</tr></tr>';
        }else{
            $listeFontaines .='<tr class="tab-box"><th>' . $fontaine['voie'] . '</tr><th class="tab-box">' . $fontaine['commune'] .'</tr></tr>';
        };
    };
};

$listeFontaines .= '</table>';
?>