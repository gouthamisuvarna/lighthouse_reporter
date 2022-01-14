<?php


if(isset($_POST['submit'])){
    $file = $_FILES['file'];
     
    //print_r($file);

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    if($fileError===0)
    {
        if($fileSize<10000000){
            $fileDestination = 'uploads/'.$fileName;
            move_uploaded_file($fileTmpName,$fileDestination);
            header("Location:index.php?uploadsuccess");

             //Read the json file
            $json = file_get_contents($fileDestination);

            //Decode the json file
            $json_data = json_decode($json,true);


           

        }else{
            echo "Your file is too big!";
        }

    }else{
        echo "No file is selected!";
    }

    



}


?>


