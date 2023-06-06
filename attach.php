<?php
if(ISSET($_POST['insert'])){
 
 if(file_exists("tourism.xml")){
     $tourism = simplexml_load_file('tourism.xml');
     $municipality = $tourism->addChild('municipality');
     $municipality->addChild('title', $_POST['title']);
     $municipality->addChild('image', $_POST['image']);
     $municipality->addChild('content', $_POST['content']);
     file_put_contents('tourism.xml', $tourism->asXML());

     header('location:admin.php');
 }
}

//Upload Images to directory and XML

$uploadDirectory = __DIR__ . "/images/";
if (!is_dir($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}
$image = $_FILES["image"];
$filename = uniqid() . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
$destination = $uploadDirectory . $filename;
move_uploaded_file($image["tmp_name"], $destination);

$xmlFile = 'tourism.xml';
?>
