<?php 
    include("connect.php"); 
    session_start();
    $id = $_SESSION['id'];
    if(isset($_POST['create'])) {
        $user_id = $_SESSION['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $page = $_POST['page'];

        $query = "INSERT INTO databuku(title, author, publisher, page, user_id) VALUES('$title', '$author', '$publisher', $page, $user_id)";

        if (mysqli_query($conn, $query)) {
            header("Location: dashboard.php");
        } else {
            die("Something went wrong");
        }
    }

    if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $page = $_POST['page'];

        $query = "UPDATE databuku SET title='$title', author='$author', publisher='$publisher', page=$page WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header("Location: dashboard.php");
        } else {
            die("Something went wrong");
        }
    }

    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
	    $confirmPassword = $_POST['confirmPassword'];

        if(strlen($password) < 8) {
            header("Location: register.php?error=Password must be at least 8 characters long");
            exit();
        }

        if($password !== $confirmPassword){
            header("Location: register.php?error=Password confirmation does not match");
            exit();
        }

        else{
            $password = md5($password);

            $sql = "SELECT * FROM datapengguna WHERE username='$username' ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                header("Location: register.php?error=Username is already taken, try another");
                exit();
            }else {
                $query = "INSERT INTO datapengguna(username, password) VALUES('$username', '$password')";
                $result2 = mysqli_query($conn, $query);
                if ($result2) {
                    header("Location: index.php?success=Your account has been created successfully");
                    exit();
                }else {
                    header("Location: register.php?error=Unknown error occurred");
                    exit();
            }
            }
        }

    }
?>