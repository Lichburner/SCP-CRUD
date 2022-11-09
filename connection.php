<?php

    $user = "a18587727_user";
    $pw = "Toiohomai1234";
    $db = "a18587727_SCP";
    $connection = new mysqli('localhost',$user,$pw,$db);
    $result = $connection->query("select * from pages");
    
    if(isset($_POST['submit']))
    {
        $pg = $_POST['pg'];
        $h1 = $_POST['h1'];
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $img1 = $_POST['img1'];
        
        $sql = "insert into pages(pg,h1,p1,p2,p3,img1)
        values('$pg','$h1','$p1','$p2','$p3','$img1')";
        
        if($connection->query($sql)===TRUE)
        {
            echo "
                <h1>Record added successfully</h1>
                <p><a href='index.php'>Back to index page</p>
            ";
        }
        else
        {
            echo "
                <h1>Error submitting data</h1>
                <p>{$connection->error()}</p>
                <p><a href='index.php'>Back to index page</p>
            ";
        }
    }
    
   // Delete Portion of CRUD
   if(isset($_GET['delete']))
   {
       $id = $_GET['delete'];
       
       // delete sql command
       $del = "delete from pages where id=$id";
       
       if($connection->query($del) === TRUE)
       {
           echo "
                <h1>Record Deleted</h1>
                <p><a href='index.php'>Return to index page.</a></p>
           ";
       }
       else
       {
           echo "
                <h1>Problem deleting record.</h1>
                <p><a href='index.php'>Return to index page.</a></p>
           ";
       }
       
       
   } // end delete
   
   if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $pg = $_POST['pg'];
        $h1 = $_POST['h1'];
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $img1 = $_POST['img1'];
        
        $update = "update pages set pg='$pg', h1='$h1', p1='$p1', p2='$p2', p3='$p3', img1='$img1' where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo "
                <h1>Record updated succesfully</h1>
                <p><a href='index.php'>Return to index page</a></p>
            ";
        }
        else
        {
            echo "
                <h1>Error updating data</h1>
                <p>{$connection->error}</p>
                <p><a href='update.php'>Return to form</a></p>
            
            ";
        }
    }
    
?>