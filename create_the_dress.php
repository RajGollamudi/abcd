<?php

include_once 'db_configuration.php';


    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db,$_POST['description']);
    $did_you_know = mysqli_real_escape_string($db,$_POST['did_you_know']);
    $category = mysqli_real_escape_string($db,$_POST['category']);
    $type = mysqli_real_escape_string($db,$_POST['type']);
    $state_name = mysqli_real_escape_string($db,$_POST['state_name']);
    $key_words = mysqli_real_escape_string($db,$_POST['key_words']);
    $imageName = basename($_FILES["fileToUpload"]["fileToUpload"]);
    $status = mysqli_real_escape_string($db,$_POST['status']);
    $notes = mysqli_real_escape_string($db,$_POST['notes']);


    $sql = "INSERT INTO `dresses` (`name`, `description`, `did_you_know`, `category`, `type`, `state_name`, `key_words`, `image_url`, `status`, `notes`)
            VALUES ('$name', '$description', '$did_you_know', '$category', '$type', '$state_name', '$key_words', '$imageName', '$status', '$notes')";

    mysqli_query($db, $sql);
    header('location: list_dresses.php?create_dress=success');

//     if($validate){
        
//         $target_dir = "Images/$topic/";
//         $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//         $uploadOk = 1;
//         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//         // Check if image file is a actual image or fake image
//         if(isset($_POST["submit"])) {
//             $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//             if($check !== false) {
//                 $uploadOk = 1;
//             } else {
//                 header('location: create_dres.php?create_dress=fileRealFailed');
//                 $uploadOk = 0;
//             }
//         }
//         // Check if file already exists
//         if (file_exists($target_file)) {
//             header('location: create_dress.php?create_dress=fileExistFailed');
//             $uploadOk = 0;
//         }
        
//         // Allow certain file formats
//         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//         && $imageFileType != "gif" ) {
//             header('location: create_dress.php?create_dres=fileTypeFailed');
//             $uploadOk = 0;
//         }
//         // Check if $uploadOk is set to 0 by an error
//         if ($uploadOk == 0) {
            
//         // if everything is ok, try to upload file
//         } else {
//             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                
//                 $sql = "INSERT INTO questions(topic,question,choice_1,choice_2,choice_3,choice_4,answer,image_name)
//                 VALUES ('$topic','$question','$choice1','$choice2','$choice3','$choice4','$answer','$target_file')
//                 ";

//                 mysqli_query($db, $sql);
//                 header('location: questions_list.php?createQuestion=Success');
//                 }
//             }
//         }else{
//             header('location: createQuestion.php?createQuestion=answerFailed'); 
//     }        

// }end if


?>
