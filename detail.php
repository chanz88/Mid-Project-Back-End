<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="d-flex justify-content-between my-4 container">
            <h1>Book Detail</h1>
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

            echo '<div style="font-size: 23px; margin-bottom: 10px; margin-left: 84px">Book title: ' . $data['title'] . '</div>';
            echo '<div style="font-size: 23px; margin-bottom: 10px; margin-left: 84px">Author: ' . $data['author'] . '</div>';
            echo '<div style="font-size: 23px; margin-bottom: 10px; margin-left: 84px">Publisher: ' . $data['publisher'] . '</div>';
            echo '<div style="font-size: 23px; margin-left: 84px">Number of Pages: ' . $data['page'] . '</div>';
        ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>