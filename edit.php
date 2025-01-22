<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Book</title>
</head>

<body>
        <div class="container">
            <header class="d-flex justify-content-between my-4">
                <h1>Edit Book</h1>
                <div><a href="index.php" class="btn btn-primary" >Back</a></div>
            </header>

                <!-- TODO: PHP CODE REQUIRED CONTINUE FRO HERE  -->
                    <?php 
                        if(isset($_GET['id']))
                        {
                            $id = $_GET['id'];
                            include("connect.php");
                            $sql = "select * from books where books.id = $id";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                            ?>
                            <!-- form starts -->
                            <form action="process.php" method="post">
                                <div class="form-element my-4">
                                    <input  required type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="Book Title:" class="form-control">
                                </div>
                                <div class="form-element my-4">
                                    <input  required type="text" name="author" value="<?php echo $row['author']; ?>" placeholder="Author Name:" class="form-control">
                                </div>
                                <div class="form-element my-4">
                                    <select name="type" class="form-control" >
                                        <option value="">Select Book Type</option>
                                        <option value="Adventure"
                                            <?php 
                                                if($row['type'] == "Adventure")
                                                echo "selected"
                                            ?>
                                        >Adventure</option>
                                        <option value="Fantasy"
                                        <?php 
                                                if($row['type'] == "Fantasy")
                                                echo "selected"
                                            ?>
                                        >Fantasy</option>
                                        <option value="SciFi"
                                            <?php 
                                                    if($row['type'] == "SciFi")
                                                    echo "selected"
                                                ?>
                                        >
                                            SciFi</option>
                                        <option value="Horror"
                                            <?php 
                                                    if($row['type'] == "Horror")
                                                    echo "selected"
                                                ?>
                                        >Horror</option>
                                    </select>
                                </div>
                                <div class="form-element my-4">
                                    <input  required type="text" name="description" value="<?php echo $row['description']; ?>" placeholder="Book Description:" class="form-control">
                                </div>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-element">
                                    <input type="submit" value="Edit Book" class="btn btn-success" name="edit">
                                </div>
                            </form>
                             <!-- form ends -->
                            <?php
                        }
                    ?>
            
        </div>
</body>

</html>