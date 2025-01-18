<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <title>Add New Book</title>
</head>

<body>
        <div class="container">
            <header class="d-flex justify-content-between my-4">
                <h1>Add New Book</h1>
                <div><a href="" class="btn btn-primary" >Back</a></div>
            </header>
            <form action="process.php" method="post">
                <div class="form-element my-4">
                    <input  required type="text" name="title" placeholder="Book Title:" class="form-control">
                </div>
                <div class="form-element my-4">
                    <input  required type="text" name="author" placeholder="Author Name:" class="form-control">
                </div>
                <div class="form-element my-4">
                    <select name="type" class="form-control" >
                        <option value="">Select Book Type</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="SciFi">SciFi</option>
                        <option value="Horror">Horror</option>
                    </select>
                </div>
                <div class="form-element my-4">
                    <input  required type="text" name="description" placeholder="Book Description:" class="form-control">
                </div>
                <div class="form-element">
                    <input type="submit" value="Add Book" class="btn btn-success" name="create">
                </div>
            </form>
        </div>
</body>

</html>