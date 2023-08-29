<?php
require "../model/image_data.php";

$imageTabTemp = null;
$imageTabTemp = getImage();
$imageTab=null;
$typeTab = getImageType();

$nbrType=count($typeTab);

if(isset($_GET['type']) && $_GET['type']!="all")
{
    $typeRequired = $_GET['type'];
    global $imageTabTemp;
    global $imageTab;

    $imageTab=getImageByType($typeRequired);
}
else
{
    $imageTab=$imageTabTemp;
}

require "../content/gallery_template.php";