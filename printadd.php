<?php


require("connection.php");

if(isset($_POST['addstudent'])){
   
    print_r($_POST);
}

    if (isset($_GET['rem'])) {
        $rem = intval($_GET['rem']);
        
    
        $query = "DELETE FROM `registration` WHERE id = ?";
        if ($stmt = $co->prepare($query)) {
            $stmt->bind_param("i", $rem);
            $stmt->execute();
            $stmt->close();
            echo"<script> alert ('Record with id $rem  has been deleted');</script>";
        } else {
            echo "Error preparing statement: " . $co->error;
        }
    } else {
        echo "No 'rem' parameter provided.";
    }

    if(isset($_POST['addstudent'])){
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($co,$value);
        }
    $query = "INSERT INTO `registration`(`id`, `firstname`, `colgname`, `email`, `phonenumber`, `events`) 
    VALUES ('$_POST[id]','$_POST[firstname]','$_POST[colgname]','$_POST[email]','$_POST[phonenumber]','$_POST[events]')";
    }
    if(mysqli_query($co,$query)){
        header("location :index.php?success =added");
        echo "Added";
    }
    else{
        header("location:index.php?alert=add_failed");
    }
    
    if(isset($_POST['editstudent'])){
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($co,$value);

        $query = "UPDATE `registration` SET `id`='[id]',`firstname`='[firstname]',`colgname`='[colgname]',
        `email`='[email]',`phonenumber`='[phonenumber]',`events`='[events]'";

    }
    if(mysqli_query($co,$query)){
        header("location :index.php?success =added");
        echo "Added";
    }
    else{
        header("location:index.php?alert=add_failed");
    }




    }


    ?>

