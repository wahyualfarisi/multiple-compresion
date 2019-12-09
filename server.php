<?php

    try{

        foreach($_FILES["file_uploaded"]["tmp_name"] as $item => $tmp_name){

            $filename = $_FILES["file_uploaded"]["name"][$item];
            $filetmp  = $_FILES["file_uploaded"]["tmp_name"][$item];

            $ext      = pathinfo($filename, PATHINFO_EXTENSION);


            move_uploaded_file($_FILES['file_uploaded']['tmp_name'][$item], __DIR__.'/img/'.$_FILES['file_uploaded']['name'][$item]);
        }

        
    }catch(Exception $e){
        echo $e;
    }

?>