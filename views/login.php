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
<body style="background-color: lightgray;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 login-container">
        <div class="card bg-dark">
          <div class="card-body">
            <h3 class="card-title text-center text-light">Login</h3>
            <form action="start.php?action=login" method="POST">
                <div class="form-group mb-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group mb-2">
                    <label for="passwd">Password</label>
                    <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Password">
                </div>
                <div class="form-group mb-2">
                    <button type="submit" name="submit" class="btn btn-dark">Login</button>
                    <input type="submit" name="submit" value="Cancel" class="btn btn-dark">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>