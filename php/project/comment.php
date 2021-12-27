<?php
    $showAlert = false;
    $showError = false;
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = mysqli_connect($server, $username, $password, $database);

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $comment = $_POST["comment"];
    $sql = "INSERT INTO `feedback` (`comment`, `timestamp`) VALUES ('$comment', CURRENT_TIMESTAMP)";
    $result= mysqli_query($conn, $sql);
    if ($result){
       $showAlert = true;
    }
    else{
        $showError = true;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Comment Project</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Comment Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/project/comment.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contect Us</a>
      </li>
 
    </ul>
    
  </div>
</nav>
<?php
   if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> your comment has been submitted successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
} 
if($showError){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Soory</strong> Your comment has not been submitted. 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
    
?>

      <h1>This is the Comment Project</h1>
      <div class="container">
    <h2>Type here to Comment</h2>
    <form action = "/project/comment.php" method = "post">
  <div class="form-group">
    <label for="comment">Comment:</label>
    <input type="text" class="form-control" id="comment" name= "comment" aria-describedby="type here to comment">
</div>
  <button type="submit" class="btn btn-primary">Add a comment</button>
</form>
</div>
<?php
     $sql = "SELECT * FROM `feedback`WHERE comment='$comment'";
     $result = mysqli_query($conn, $sql);
     $num = mysqli_num_rows($result);
     while($row=mysqli_fetch_assoc($result)){
         $comment = $row['comment'];
     }
    
?>
<table>
  <thead>
    <tr>
      <th>sno</th>
    </tr>
  </thead>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>