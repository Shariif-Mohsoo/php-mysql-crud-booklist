<?php 
    // including the connection file to form connection
    include("connect.php");
    // checking the form is submitted via pressing  Add Book button
    // $_Post is global variable 
    if(isset($_POST['create']) || isset($_POST['edit']))
    {
        // is yes then extract data and perform sanitization(removing special symbols ) on data.
        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $author = mysqli_real_escape_string($conn,$_POST['author']);
        $type = mysqli_real_escape_string($conn,$_POST['type']);
        $description = mysqli_real_escape_string($conn,$_POST['description']);
        // preparing the query for the inserting data into database
        if($_POST['create'])
        {
            $sql = "INSERT INTO books(title, author, type, description)
                    VALUES(
                                    '$title','$author','$type','$description '
                                    )";
        }
        else
        {
            $id = $_POST['id'];
            $sql = "UPDATE books SET 
            title = '$title', 
            author = '$author', 
            type = '$type', 
            description = '$description'
            WHERE books.id = $id
            ";
        }
        // running the query
        if(mysqli_query($conn,$sql))
       {     
            if($_POST['create'])
            {
                // echo "Record Inserted";
                // session is kind of storage;
                session_start();
                $_SESSION['create'] = "Book Added Successfully";
                // redirect to main page;
                header("Location:index.php");
            }
            else
            {
                // echo "Record Update";
                // session is kind of storage;
                session_start();
                $_SESSION['update'] = "Book Edited Successfully";
                // redirect to main page;
                header("Location:index.php");
            }
        }
        else
        die ("Something went wrong");
    }

?>