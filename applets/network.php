<?php
include("seitentabelle.inc.php");
foreach ($wop_sites_inc as $wop_site) {
    $wop_site['beschreibung'] = stripslashes($wop_site['beschreibung']);
    print '<p>';
    print '<a href="'.$wop_site['url'].'" target="_blank"><strong>'.$wop_site['name'].'</strong></a> - '.$wop_site['name'];
    print !empty($wop_site['beschreibung']) ? ': '.$wop_site['beschreibung'] : '';
    print '</p>';
}
?>
