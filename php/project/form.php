<?php
$showAlert = false;
$showerror = false;
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "project";

  $conn = mysqli_connect($server, $username, $password, $database);

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $fname= $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $adress = $_POST['adress'];
    $about = $_POST['about'];

    $sql = "INSERT INTO `form` (`name`, `fname`, `email`, `number`, `dob`, `gender`, `adress`, `about`, `datestamp`) VALUES ('$name', '$fname', '$email', '$number', '$dob', '$gender', '$adress', '$about', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $sql);
    if($result){
      $showAlert = true;
    }
    else{
      $showerror = true;
    }
  }
  
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
    <!-- <style>
      *{
        margin: 0;
        padding: 0;
      }
      form{
        height: 630px;
        width: 520px;
        box-sizing: border-box;
        font-size: 15px;

        border: 2px solid #fec140;
        border-radius: 10px;
        margin-left: 60%;
        margin-top: 7%;
        margin-bottom: 5%;
        padding: 20px;
        background-color: #ff6a378c;
      }
    input {
      border: 2px solid #484848;
      border-radius: 5px;

    }
    input[name]{
      border: 2px solid #484848;
    }
    .btn{
      padding: 8px 15px;
      background-color: #ff6434;
      border: 2px solid #484848;
      border-radius: 8PX;
      margin-top: 10px;
    }

    body {
        background-image: url('frnd.jpg');
        background-size: cover;
    }

    div {
      color: white;
    } -->
    </style>
</head>

<body>
    <?php
    if($showAlert){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your Form is Submitted.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    if($showerror){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Oops!</strong> Something is Wrong. Your Form has been not Submitted.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div';
    }
    
  ?>
    <div class="container">
        <h3>This is the part of my project:Form</h3>
        <form action="/project/form.php" method="post">
            <label for="name">Name:</label>
            <div>
                <input type="text" id="name" name="name">
            </div>
            <label for="fname">Father Name:</label>
            <div>
                <input type="text" id="fname" name="fname">
            </div>
            <label for="email">Email:</label>
            <div>
                <input type="email" id="email" name="email">
            </div>

            <label for="number">Number:</label>
            <div>
                <input type="number" id="number" name="number">
            </div>
            <label for="dob">Date of Birth:</label>
            <div>
                <input type="date" id="dob" name="dob">
            </div>
            <label for="gender">Gender:</label>
            <div>
                Male <input type="radio" id="gender" name="gender" value="male">
                Female <input type="radio" id="gender" name="gender" value="femail">
                Shemale <input type="radio" id="gender" name="gender" value="Shemail">
            </div>
            <label for="adress">Where's You belong:</label>
            <div>
                <select name="adress" id="adress">
                    <option value="Kasur">kasur</option>
                    <option value="Nazam Pura">Nazam Pura</option>
                    <option value="Hussan Khan Wala">Hussan Khan Wala</option>
                    <option value="Rao Khan Wala">Rao Khan Wala</option>
                </select>
            </div>
            <label for="about">Write about Your Self:</label>
            <div>
                <textarea name="about" id="about" cols="60" rows="5"></textarea>
            </div>
            <div>
                <input class="btn" type="Submit" Value="Submit Now">
                <input class="btn" type="reset" Value="Reset Now">
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>