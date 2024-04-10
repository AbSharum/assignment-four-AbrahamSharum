<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Framework</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Center the login form */
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<div class="container text-bg-light m-3">
    <?php if($_SESSION['loggedin'] == null) {
        $username = "Empty";
        $firstname = "Empty";
        $lastname = "Empty";
        $promptOne = "Not logged in";
        $promptTwo = "";
    } else {
        $username = $data->getUsername();
        $firstname = $data->getFirstname();
        $lastname = $data->getLastname();
        $promptOne = "You are currently logged in as";
        $promptTwo = "Do you wish to logout?";
    }
      ?>

    <h3>Logout</h3>
    <p class="lead"><?php echo $promptOne?></p>
    <h5><?php echo "Username: ".$username."<br>Firstname: ".$firstname."<br>Lastname: ".$lastname;?></h5>
    <p class="lead"><?php echo $promptTwo?></p>

  <form action="start.php?action=logout" method="POST">
    <div class="form-group p-2">
        <input type="submit" name="submit" value="Confirm" class="btn btn-primary">
        <input type="submit" name="submit" value="Cancel" class="btn btn-primary">
    </div>
  </form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>