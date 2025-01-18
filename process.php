<?php 
    // including the connection file to form connection
    include("connect.php");
    // checking the form is submitted via pressing  Add Book button
    // $_Post is global variable 
    if(isset($_POST['create']))
    {
        // is yes then extract data and perform sanitization(removing special symbols ) on data.
        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $author = mysqli_real_escape_string($conn,$_POST['author']);
        $type = mysqli_real_escape_string($conn,$_POST['type']);
        $description = mysqli_real_escape_string($conn,$_POST['description']);

        // preparing the query for the inserting data into database
        $sql = "INSERT INTO books(title, author, type, description)
                    VALUES(
                                    '$title','$author','$type','$description '
                                    )";
        // running the query
        if(mysqli_query($conn,$sql))
        echo "Record Inserted";
        else
        die ("Something went wrong");
    }

?>