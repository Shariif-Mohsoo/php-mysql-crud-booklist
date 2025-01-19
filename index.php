<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book List</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New Book</a>
            </div>
        </header>
        
        <?php 
            session_start();
            if(isset($_SESSION['create']))
            {
                ?>
                    <div class="alert alert-success">
                        <?php 
                            echo $_SESSION['create'];
                            // to don't see the message again and again;
                            unset($_SESSION['create']);
                        ?>
                    </div>
                <?php
            }
        ?>
        
        <?php 
            if(isset($_SESSION['update']))
            {
                ?>
                    <div class="alert alert-success">
                        <?php 
                            echo $_SESSION['update'];
                            // to don't see the message again and again;
                            unset($_SESSION['update']);
                        ?>
                    </div>
                <?php
            }
        ?>

<?php 
            if(isset($_SESSION['delete']))
            {
                ?>
                    <div class="alert alert-success">
                        <?php 
                            echo $_SESSION['delete'];
                            // to don't see the message again and again;
                            unset($_SESSION['delete']);
                        ?>
                    </div>
                <?php
            }
        ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // including the path to the database connection file to form the connection.
                    include("connect.php");
                    // preparing query to fetch all records from books table.
                    $sql = "select * from books";
                    // result will be an object
                    $result = mysqli_query($conn,$sql);
                    // to see the result 
                    // print_r($result);
                    // convert result to an array
                    while($row = mysqli_fetch_array($result))
                    {
                        // print_r($row);
                        // php script ends 
                        ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['title'];?> </td>
                            <td><?php echo $row['author'];?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td>
                                <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Read More</a>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <!-- php script starts -->
                         <?php
                    }
                        ?>
            </tbody>
        </table>
    </div>
</body>
</html>