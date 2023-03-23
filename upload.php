<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $namefile=$_FILES["fileToUpload"]["name"];
// Check if image file is a actual image or fake image


// Check if file already exists
if (file_exists($target_file)) {
    $errors["uploads-error"]="Fisierul exista deja";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   $errors["uploads-error"]="Fisierul este prea mare ";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf" ) {
  $errors["uploads-error"]="Fisierul nu este in format pdf";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
        $emailus=$_SESSION["email"];
        
       $sql1_=$con->query("SELECT cv_name FROM usertable WHERE email='$emailus'");
        
    $sql12=$con->query("UPDATE usertable SET cv_name='$namefile' WHERE email='$emailus'");
    
    header("Location:index.php");

      
  } 
}
?>