<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error" style="padding-top: 20px;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <form action="request.php" method="post">
        <div class="d-flex justify-content-between my-4">
            <h1>Register</h1>
            <a href="index.php" class="btn btn-primary d-flex align-items-center justify-content-center">Already have Account</a>
        </div>
            <div class="mb-3">
                <label for="username" class="form-label">
                    Username
                </label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">
                    Password
                </label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">
                    Confirm Password
                </label>
                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required>
            </div>
            <form action="login.php" method="post">
                    <input type="submit" value="Create" name="register" class="btn btn-success">
            </form>
        </form>
    </div>
</body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>