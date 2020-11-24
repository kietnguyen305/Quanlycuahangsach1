
<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>AddBookPage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
          <a class="navbar-brand" href="index.php">BOOKDREAM</a>
          
  </nav>
  <div>
  <form class="md-3"  method="post" >
          
          <div class="imgcontainer">
            <img src="img/login.png" alt="Avatar" class="avatar">
          </div>
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
          </div>
          <div  class="container">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
          </div>
          
       
       
          <?php
                  if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
                    header("Location: book_manager.php");
                  }
                  else
                  {
                  if (isset($_POST['username']) && isset($_POST['password'])) {
                    require_once("connect.php");
                                  
                    $username = $_POST['username'];
                                  
                    $sql = "SELECT * FROM employee WHERE username like '$username'";    
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                                  
                    if ($_POST['password'] == $row['password']) {
                      $_SESSION['isLoggedIn'] = true;
                      if($row['role'] == 1){
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['isAdmin'] = 1;
                        header("Location: book_manager.php");
                      }else if($row['role'] == 2){
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['isAdmin'] = 2;
                        header("Location: book_manager.php");
                      }
                      else{
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['isAdmin'] = 0;
                        header("Location: index.php");
                      }
                                    
                    } else {
                      echo "<div class='alert alert-danger'> Invalid username or password </div>";
                    }
                  }
                }
              ?>
          <div  class="container">
            <button type="submit">Login</button>
          </div>
  </form>
  </div> 






  </body>
</html>



