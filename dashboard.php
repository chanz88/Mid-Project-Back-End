<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .content {
            flex-grow: 1;
         }
        footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }
        .modal-dialog {
        max-width: 500px;
        }
    </style>
  </head>
  <body>
    <nav class="navbar" style="background-color:rgb(217, 223, 228);">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand ms-4 mb-0 h1" href="dashboard.php">Library</a>
        <a href="logout.php" class="btn d-flex align-items-center justify-content-center me-4" style="background-color:rgb(224, 37, 37); color: white;">Log Out</a>
    </div>
    </nav>
    <div class="content container">
        <div class="d-flex justify-content-between my-4">
            <h1>Book List</h1>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Page</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    session_start();
                    include("connect.php");
                    $id = $_SESSION['id'];
                    $query = "SELECT * FROM databuku WHERE user_id='$id'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) { 
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['author'] ?></td>
                        <td><?php echo $row['publisher'] ?></td>
                        <td><?php echo $row['page'] ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pick an Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="detail.php?id=<?php echo $row['id'] ?>">Book Detail</a></li>
                                    <li><a class="dropdown-item" href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></li>
                                    <li><a class="dropdown-item" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this book?');">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
            </table>
            <?php
                if (mysqli_num_rows($result) == 0){
                    echo '<p class="mb-4">No book found</p>';
                }
            ?>
            <a href="create.php" class="btn btn-primary mb-4">Add new Book</a>
    </div>
            <footer class="bg-grey text-black text-center py-3 mt-auto">
                @chandranafiadi
            </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>