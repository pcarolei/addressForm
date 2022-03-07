<?php

if (isset($_POST['userName']) && isset($_POST['userAddress'])) {
    $file = fopen('userData.csv', 'a') or die('Unable to open file');
    fputcsv($file, array($_POST['userName'], $_POST['userAddress']));
}

?>