<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome to iDiscuss - forum</title>
<style>
.container{
    min-height:100vh;
}
</style>

</head>

<body>
<?php include 'partials/dbconnect.php'; ?>
    <?php include 'partials/header.php';?>

    
<?php
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `contectme` (`name`, `email`, `number`, `message`, `timestamp`) VALUES ('$name', '$email', '$number', '$message', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>Added Successfully!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
        
    }
    else{
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong>You are message has not send!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }

}

?>


    <div class="container my-3">
<h1 class= "text-center" >Contact Me!</h1>



    <form action = "/forum/contect.php" method = "post">
    <div class="form-group">
    <label for="name">Your Name</label>
    <input type="text" class="form-control" id="name" name = "name" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="email">Your Email</label>
    <input type="email" class="form-control" id="email" name = "email" placeholder="Enter Your Email">
  </div>
  <div class="form-group">
    <label for="number">Enter Your Number(with contury code)</label>
    <input type="text" class="form-control" id="number" name = "number" placeholder="Enter Your Phone Number">
  </div>
  <div class="form-group">
    <label for="message">Descibe what you want to contect me for here</label>
    <input type="text" class="form-control" id="message" name = "message" placeholder="Your message">
  </div>
 
  <button class="btn btn-success">Submit</button>
</form>

</div>


    <?php include 'partials/footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>