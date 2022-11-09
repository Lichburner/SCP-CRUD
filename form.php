<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    h1,h2,p,p1,p2,p3,pg,nav-link,label,hr{font-family: "Lato", sans-serif; color:white}
    img {max-width: 100%; height: auto;}
    body{font-family: "Lato", sans-serif; color:black; background-image:linear-gradient(to top, rgb(0, 0, 0), rgb(120, 120, 120))}
    </style>
  </head>
  <body class="container">
      <h1>SCP Object Creation</h1>  <p><a href="index.php" class="btn btn-danger">Back to index page</a></p>
        <h2>Use the form to enter a new SCP record</h2>
        <form class="form-group" method="post" action="connection.php">
        <label>SCP Record</label>
        <br>
        <input type="text" name="pg" placeholder="SCP Record (Page Name)" class="form-control">
        <br><br>
        <label>Object Class</label>
        <br>
        <input type="text" name="h1" placeholder="Object Class" class="form-control">
        <br><br>
        <label>Description</label>
        <br>
        <input type="text" name="p1" placeholder="Description" class="form-control">
        <br><br>
        <label>Image Address</label>
        <br>
        <input type="text" name="img1" placeholder="images/nameOfImage.jpg or similar" class="form-control">
        <br>
            <hr width="100%">
            
            
            <label>Paragraph Two</label>
            <br>
            <textarea class="form-control" name="p2" rows="5"></textarea>
            <br>
            <hr width="100%">
            
            <br>
            <label>Paragraph Three</label>
            <br>
            <textarea class="form-control" name="p3" rows="5"></textarea>
            <br>
            <hr width="100%">
            <input type="submit" class="btn btn-danger" name="submit" value="Submit SCP Data">
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>