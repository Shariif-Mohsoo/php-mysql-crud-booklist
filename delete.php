<?php 
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        include("connect.php");
        $sql = "DELETE FROM books WHERE books.id = $id";
        if(mysqli_query($conn,$sql))
        {
                // echo "Deleted Successfully";
            // session is kind of storage;
            session_start();
            $_SESSION['delete'] = "Book Deleted Successfully";
            // redirect to main page;
            header("Location:index.php");
        }
        else 
            echo "Something went wrong";
    }
?>