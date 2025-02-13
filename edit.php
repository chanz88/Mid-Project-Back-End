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
        <div class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>

            <a href="dashboard.php" class="btn btn-primary d-flex align-items-center justify-content-center">Back</a>
        </div>
        <?php 
            include("connect.php");
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM databuku WHERE id=$id";
                $result = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($result);
            }
        ?>

        <form action="request.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">
                    Title
                </label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $data['title'] ?>">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">
                    Author
                </label>
                <input type="text" name="author" id="author" class="form-control" value="<?php echo $data['author'] ?>">
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">
                    Publisher
                </label>
                <input type="text" name="publisher" id="publisher" class="form-control" value="<?php echo $data['publisher'] ?>">
            </div>
            <div class="mb-3">
                <label for="page" class="form-label">
                    Page
                </label>
                <input type="number" name="page" id="page" class="form-control" value="<?php echo $data['page'] ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="submit" value="Save" name="edit" class="btn btn-success">
        </form>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>