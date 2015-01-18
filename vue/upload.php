<?php
session_start();
$login=$_SESSION[login];
$output_dir = "upload/".$login;
if (!is_dir($output_dir)) {
    mkdir($output_dir);
}
$output_dir=$output_dir."/";

if(isset($_FILES["myfile"]))
{
    $ret = array();

    $error =$_FILES["myfile"]["error"];
    //You need to handle  both cases
    //If Any browser does not support serializing of multiple files using FormData()
    if(!is_array($_FILES["myfile"]["name"])) //single file
    {
        $fileName = $_FILES["myfile"]["name"];
        move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
        $ret[]= $fileName;
    }
    else  //Multiple files, file[]
    {
        $fileCount = count($_FILES["myfile"]["name"]);
        for($i=0; $i < $fileCount; $i++)
        {
            $fileName = $_FILES["myfile"]["name"][$i];
            move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
            $ret[]= $fileName;
        }

    }
    echo json_encode($ret);
    if(!isset($_SESSION['images'])) {
        $_SESSION['images']=array($output_dir.$fileName);
    }else{
        array_push($_SESSION['images'],$output_dir.$fileName);
    }

}
?>
