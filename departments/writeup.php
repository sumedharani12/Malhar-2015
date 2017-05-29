<?php

$writeup = file_get_contents('writeup.txt');



$conclave_start = stripos($writeup, "startConclave");

$conclave_ends = stripos($writeup, "endConclave");

$conclave_length = $conclave_ends - $conclave_start;

$conclave_wp = substr($writeup, $conclave_start, $conclave_length);

$conclave_final = ltrim($conclave_wp, "startConclave");



$assistance_start = stripos($writeup, "startAssistance");

$assistance_ends = stripos($writeup, "endAssistance");

$assistance_length = $assistance_ends - $assistance_start;

$assistance_wp = substr($writeup, $assistance_start, $assistance_length);

$assistance_final = ltrim($assistance_wp, "startAssistance");



$pr_start = stripos($writeup, "startPR");

$pr_ends = stripos($writeup, "endPR");

$pr_length = $pr_ends - $pr_start;

$pr_wp = substr($writeup, $pr_start, $pr_length);

$pr_final = ltrim($pr_wp, "startPR");



$comps_start = stripos($writeup, "startComps");

$comps_ends = stripos($writeup, "endComps");

$comps_length = $comps_ends - $comps_start;

$comps_wp = substr($writeup, $comps_start, $comps_length);

$comps_final = ltrim($comps_wp, "startComps");



$security_start = stripos($writeup, "startSecurity");

$security_ends = stripos($writeup, "endSecurity");

$security_length = $security_ends - $security_start;

$security_wp = substr($writeup, $security_start, $security_length);

$security_final = ltrim($security_wp, "startSECURITY");



$quartet_start = stripos($writeup, "startquartet");

$quartet_ends = stripos($writeup, "endquartet");

$quartet_length = $quartet_ends - $quartet_start;

$quartet_wp = substr($writeup, $quartet_start, $quartet_length);

$quartet_final = ltrim($quartet_wp, "startquartet");



$logs_start = stripos($writeup, "startLogs");

$logs_ends = stripos($writeup, "endLogs");

$logs_length = $logs_ends - $logs_start;

$logs_wp = substr($writeup, $logs_start, $logs_length);

$logs_final = ltrim($logs_wp, "startLogs");



$la_start = stripos($writeup, "startLA");

$la_ends = stripos($writeup, "endLA");

$la_length = $la_ends - $la_start;

$la_wp = substr($writeup, $la_start, $la_length);

$la_final = ltrim($la_wp, "startLA");



$ipa_start = stripos($writeup, "startIPA");

$ipa_ends = stripos($writeup, "endIPA");

$ipa_length = $ipa_ends - $ipa_start;

$ipa_wp = substr($writeup, $ipa_start, $ipa_length);

$ipa_final = ltrim($ipa_wp, "startIPA");



$wpa_start = stripos($writeup, "startWPA");

$wpa_ends = stripos($writeup, "endWPA");

$wpa_length = $wpa_ends - $wpa_start;

$wpa_wp = substr($writeup, $wpa_start, $wpa_length);

$wpa_final = ltrim($wpa_wp, "startWPA");



$winc_start = stripos($writeup, "startWINC");

$winc_ends = stripos($writeup, "endWINC");

$winc_length = $winc_ends - $winc_start;

$winc_wp = substr($writeup, $winc_start, $winc_length);

$winc_final = ltrim($winc_wp, "startWINC");



$etc_start = stripos($writeup, "startETC");

$etc_ends = stripos($writeup, "endETC");

$etc_length = $etc_ends - $etc_start;

$etc_wp = substr($writeup, $etc_start, $etc_length);

$etc_final = ltrim($etc_wp, "startETC");



$texxx_start = stripos($writeup, "startTexxx");

$texxx_ends = stripos($writeup, "endTexxx");

$texxx_length = $texxx_ends - $texxx_start;

$texxx_wp = substr($writeup, $texxx_start, $texxx_length);

$texxx_final = ltrim($texxx_wp, "startTexxx");



$fa_start = stripos($writeup, "startFA");

$fa_ends = stripos($writeup, "endFA");

$fa_length = $fa_ends - $fa_start;

$fa_wp = substr($writeup, $fa_start, $fa_length);

$fa_final = ltrim($fa_wp, "startFA");



$hospi_start = stripos($writeup, "startHospitality");

$hospi_ends = stripos($writeup, "endHospitality");

$hospi_length = $hospi_ends - $hospi_start;

$hospi_wp = substr($writeup, $hospi_start, $hospi_length);

$hospi_final = ltrim($hospi_wp, "startHospitality");



$mktg_start = stripos($writeup, "startMarketing");

$mktg_ends = stripos($writeup, "endMarketing");

$mktg_length = $mktg_ends - $mktg_start;

$mktg_wp = substr($writeup, $mktg_start, $mktg_length);

$mktg_final = ltrim($mktg_wp, "startMarketing");



$admin_start = stripos($writeup, "startAdmin");

$admin_ends = stripos($writeup, "endAdmin");

$admin_length = $admin_ends - $admin_start;

$admin_wp = substr($writeup, $admin_start, $admin_length);

$admin_final = ltrim($admin_wp, "startAdmin");



$raga_start = stripos($writeup, "startRaga");

$raga_ends = stripos($writeup, "endRaga");

$raga_length = $raga_ends - $raga_start;

$raga_wp = substr($writeup, $raga_start, $raga_length);

$raga_final = ltrim($raga_wp, "startRaga");



$souvenirs_start = stripos($writeup, "startSouvenirs");

$souvenirs_ends = stripos($writeup, "endSouvenirs");

$souvenirs_length = $souvenirs_ends - $souvenirs_start;

$souvenirs_wp = substr($writeup, $souvenirs_start, $souvenirs_length);

$souvenirs_final = ltrim($souvenirs_wp, "startSouvenirs");



$graffix_start = stripos($writeup, "startGraffix");

$graffix_ends = stripos($writeup, "endGraffix");

$graffix_length = $graffix_ends - $graffix_start;

$graffix_wp = substr($writeup, $graffix_start, $graffix_length);

$graffix_final = ltrim($graffix_wp, "startGraffix");



$finance_start = stripos($writeup, "startFinance");

$finance_ends = stripos($writeup, "endFinance");

$finance_length = $finance_ends - $finance_start;

$finance_wp = substr($writeup, $finance_start, $finance_length);

$finance_final = ltrim($finance_wp, "startFinance");

?>