<?php

$json = file_get_contents('data/espaces-verts.json');
$data = json_decode($json, true);

$espacesVerts = array_filter($data['results'], function ($espaceVert) {
    return $espaceVert['type'] === 'ESPACE VERT' && $espaceVert['commune'] != '';
});

if (!isset($_SESSION['commune'])) {
    $_SESSION['commune'] = '';
}

$select = '<select id="commune">
    <option value="">Choississez un espace vert</option>';

foreach ($espacesVerts as $espaceVert) {
    $select .= '<option value="' . $espaceVert['commune'] . '">' . $espaceVert['commune'] . '</option>';
}
$select .= '</select>';

$espacesVertsParCommune = array_filter($espacesVerts, function ($espaceVert) {
    return $espaceVert['commune'] == $_SESSION['commune'];
});

if (isset($_POST['select-commune'])) {
    $_SESSION['commune'] = $_POST['select-commune'];
}

foreach ($espacesVertsParCommune as $espaceVert) {
    echo '<li>' . $espaceVert['voie'] . '</li>';
}
?>