<?php
//session_start();
$_SERVER = "localhost";
$username= "root";
$password= "";
$dbname= "recipeDB";
$conn = mysqli_connect($_SERVER, $username, $password, $dbname);
if(isset($_POST["btnRegister"])){

    $username= $_POST["txtusername"];
    $email= $_POST["txtemail"];
    $password= $_POST["txtpassword"];
    $query="INSERT INTO tbluser(Username, Email, Passwords ) VALUES ('$username', '$email', '$password')";
     $run = mysqli_query($conn, $query) or die(mysqli_error($conn));
     if($run){
        echo "record saved";
     }
     else{
        echo "error";
     }


     }
     if (isset($_POST["btnAddRecipes"])) {
      $category = $_POST["dprCat"];
      $title = $_POST["txtrecipe_title"];
      $ingredients = $_POST["txtingredients"];
      $instructions = $_POST["txtinstructions"];
  
      // File upload configuration
      $targetDirectory = "uploads/"; // Change this to your desired directory
      $targetFile = $targetDirectory . basename($_FILES["recipeImage"]["name"]);
      $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  
      // Check if the file is an actual image
      $check = getimagesize($_FILES["recipeImage"]["tmp_name"]);
      if ($check === false) {
          die("Error: File is not an image.");
      }
  
      // Check if the file already exists
      if (file_exists($targetFile)) {
          die("Error: File already exists.");
      }
  
      // Upload the file
      if (move_uploaded_file($_FILES["recipeImage"]["tmp_name"], $targetFile)) {
          echo "File uploaded successfully.";
  
          // Insert data into the database
          $query = "INSERT INTO tblrecipes (RecipeCat, RecipeTitle, Ingredients, Instructions, ImagePath) 
                    VALUES ('$category', '$title', '$ingredients', '$instructions', '$targetFile')";
          $run = mysqli_query($conn, $query);
  
          if ($run) {
              echo "Record saved successfully.";
          } else {
              echo "Error: " . mysqli_error($conn);
          }
      } else {
          echo "Error uploading file.";
      }
  }



