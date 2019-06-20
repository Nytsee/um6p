<?php include ('../config.php');

$filename = "leads_um6p.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysqli_query($cn,'SELECT NOM,PRENOM,SPECIALITE,FORMATION,DIPLOME,ECOLE,MOBILE,EMAIL,QUESTION,PAYS,IP,DATE  FROM polytech');

// Write data to file
$flag = false;
while ($row = mysqli_fetch_array($user_query,MYSQLI_ASSOC)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}