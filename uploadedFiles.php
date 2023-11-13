<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Images!</title>
</head>
<body>
<h1>THE HALL</h1>



<?php
$dir="./uploads";
if(is_dir($dir)){
    $files=scandir($dir);
    unset($files[array_search('.',$files)]);
    unset($files[array_search('..',$files)]);
    $sn=0;
    foreach($files as $key=>$val){
        echo "SNo: ".++$sn."<br/>\n";
        echo "Filename: ".$val."<br/>\n";
        echo "Date-Time Modified: ".date('Y/m/d h:i',filemtime(rtrim($dir,'\/')."/".$val))."<br/>\n";
        echo "Filesize: ".filesize(rtrim($dir,'\/')."/".$val)."bytes<br/>\n";
        echo "<img src=\"".rtrim($dir,'\/')."/".$val."\" /><br/><br/>\n\n";
    }
}else{
    echo "(".$dir.") does not exist or is not a valid directory";
}
?>



</body>
</html>