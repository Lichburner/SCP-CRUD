<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    h1,h2,p,p1,p2,p3{font-family: "Lato", sans-serif; color:white}
    img {max-width: 100%; height: auto;}
    body{font-family: "Lato", sans-serif; color:white; background-image:linear-gradient(to top, rgb(0, 0, 0), rgb(120, 120, 120))}
    </style>
  </head>
  <body class="container">
      <?php include "connection.php"; ?>
    <div class="row">
        <div class="col">
            <ul class="nav bg-dark text-light">
                
               <?php foreach($result as $page): ?>
                    <li class="nav-item active">
                    <a href="index.php?page='<?php echo $page['pg'];?>'" class="nav-link"><?php echo $page['pg'];?></a>
                    </li>
                <?php endforeach; ?>
               
                <li>
                    <a href="form.php" class="nav-link">Enter a new Page Record</a>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col">
            <?php
                if(isset($_GET['page']))
                {
                    $scp = trim($_GET['page'], "'");
                    // run sql command to retrieve record based on GET value
                    $record = $connection->query("select * from pages where pg = '$scp'");
                    
                    // turn record into associative array
                    $array = $record->fetch_assoc();
                    
                    // Variables to hold our delete and update url settings
                    $id = $array['id'];
                    $delete = "connection.php?delete=" . $id;
                    $update = "update.php?update=" . $id;
                    
                    echo "
                    
                    <h1>{$array['pg']}</h1>
                    <h2>{$array['h1']}</h2>
                    <p>{$array['p1']}</p>
                    <p><img src='{$array['img1']}'></p>
                    
                    <p>
                        <a href='{$delete}' class='btn btn-danger'>Delete Record</a>
                        <a href='{$update}' class='btn btn-warning'>Update Record</a>
                    </p>
                    ";
                }
                else
                {
                    echo "
                            <h1>Welcome to the SCP CRUD Application</h1>
                            <p>Use the menu above to browse subjects in the database.</p>
                    
                    ";
                }
            ?>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>