<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update a Record</title>
  <style>
    h1,h2,p,p1,p2,p3,pg,nav-link,label,hr{font-family: "Lato", sans-serif; color:white}
    img {max-width: 100%; height: auto;}
    body{font-family: "Lato", sans-serif; color:black; background-image:linear-gradient(to top, rgb(0, 0, 0), rgb(120, 120, 120))}
    </style>
  </head>
  <body class="container">
    <h1>Update SCP Record</h1>
    <p><a href="index.php" class="btn btn-danger">Back to index page</a></p>
    
    <?php
    
        include "connection.php";
        
        $id = $_GET['update'];
        $record = $connection->query("select * from pages where id=$id");
        $row = $record->fetch_assoc();
    
    ?>
    
    <form method="post" action="connection.php" class="form-group">
        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label>SCP Record</label>
        <br>
        <input type="text" name="pg" placeholder="Page Name" class="form-control" value="<?php echo $row['pg']; ?>">
        <br><br>
        <label>Heading</label>
        <br>
        <input type="text" name="h1" placeholder="Heading" class="form-control" value="<?php echo $row['h1']; ?>">
        <br><br>
        <label>Paragraph one</label>
        <br>
        <input type="text" name="p1" placeholder="Paragraph one" class="form-control" value="<?php echo $row['p1']; ?>">
        <br><br>
        <label>Paragraph two</label>
        <br>
        <input type="text" name="p2" placeholder="Paragraph two" class="form-control" value="<?php echo $row['p2']; ?>">
        <br>
        <label>Paragraph three</label>
        <br>
        <input type="text" name="p3" placeholder="Paragraph three" class="form-control" value="<?php echo $row['p3']; ?>">
        <br>
        <label>Image Address</label>
        <br>
        <input type="text" name="img1" placeholder="image address" class="form-control" value="<?php echo $row['img1']; ?>">
        <br><br>
        <input type="submit" name="update" value="Update record" class="btn btn-danger">
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>