<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'Exocores',
    'title' => 'Exofuture',
    'version' => '2018-04-15-13-06-13',
    'priority' => 1,
    'location' => 'exocores.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
