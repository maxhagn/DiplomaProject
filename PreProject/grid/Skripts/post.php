<?php
$sitePointer = $_POST['sitePointer'];

for ($i = 1; $i <= 100; $i++) {
    if($sitePointer == $i){
       echo "Seite: $sitePointer";
    }
}
?>