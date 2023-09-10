<?php
header('Content-Type: text/html; charset=utf-8');

$data = array(
    "AUB" => "Ditto",
    "AU" => "DistroDirect",
    "TC" => "TuneCore",
    "USDA" => "Level Music",
    "QZWDW" => "Revelator Ltd.",
    "DEKC" => "Ingrooves",
    "BXIV" => "MusicPro",
    "BX4IU" => "En Contro De Mc's, iMusics",
    "GX7VP" => "Terrabyte Music (Ampsuite Limited)",
    "QZLBC" => "Venice Innovation Labs",
    "QZMHN" => "Repost Network",
    "QZMHP" => "Repost Network",
    "QZMHK" => "Repost Network",
    "NLRD" => "FUGA / SONOMO",
    "FRDKW" => "Wiseband",
    "FR" => "Believe SAS",
    "CBB7W" => "Move Music / Boost Collective",
    "QZPJ" => "Soundrop LLC",
    "TRUM" => "Universal Music Turkey",
    "USUM" => "Universal Music United States",
    "FRUM" => "Universal Music France",
    "SE" => "Amuseio AB",
    "QZS" => "Repost Network",
    "QZPEW" => "Repost Network",
    "QM42K" => "Repost Network",
    "QZNW" => "Sonosuite S.L.",
    "GB9GM" => "GRGDN",
    "GB8KE" => "Cygnus Music Limited",
    "TR" => "Netd Müzik Video Dijital Platform A.Ş.",
    "SPOSE" => "SoundExpose Inc.",
    "FJTNS" => "SoundExpose, Inc.",
    "URELL" => "Cygnus Music Limited",
    "URLLA" => "Cygnus Music Limited",
    "QZYFZ" => "SoundExpose, Inc.",
    "QMDA" => "The Orchard Music, The state51 Conspiracy",
    "FZY" => "Columbia Local",
    "QZVEM" => "Amp Suite Limited",
    "ARIXB" => "Farolatino S.A",
    "DE" => "MyCms",
    "PL" => "Independent Digital",
    "QM3DF" => "Fuga / The Orchard",
    "US" => "SME / WMG",
    "ES64E" => "Musicadders S.L.",
    "QZTAY" => "UniGlobalMusic Covers",
    "QZWD" => "Symphonic",
    "QZTB" => "DistroKid",
    "GX8LE" => "Custom Label, Revelator Pro",
    "QZHN" => "DistroKid",
    "DGA" => "Netd Müzik Dijital Platform Video A.Ş.",
    "FRX" => "Believe SAS"
);

$isrc = isset($_GET['isrc']) ? $_GET['isrc'] : '';

$result = isset($data[$isrc]) ? $data[$isrc] : 'Not Found';

$response = array(
    "owner" => "verxn1337",
    "distributor" => $result
); 

header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);
?>
