<?php

session_start();
if(!isset($_POST['Adminloginid'])){
   header("location : adminpanel.php");
 }

require("connection.php");

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous"> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous"></script>
    
    <style>
        dialog {
            width: 500px;
            max-width: 100%;
            margin: auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
        dialog::backdrop {
            background: rgba(0,0,0,.5);
        }
    </style>
</head>
<body class="bg-light">
    
<div class="container bg-dark text-light p-3 rounded my-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2>
            <a href="index.php" class="text-white text-decoration-none"><i class="bi bi-bar-chart-fill"></i></a>
            Admin Panel
        </h2>
        <div>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addstudent">
                <i class="bi bi-plus-lg"></i> Add Student
            </button>
            <a href="logout.php" class="btn btn-warning"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>
    </div>
</div>

<!-- modal started  -->
<div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="printadd.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Add Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                        </div>
                        <input type="text" class="form-control" name="firstname" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">college name</span>
                        </div>
                        <input type="text" class="form-control" name="colgname" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Phone-Number</span>
                        </div>
                        <input type="text" class="form-control" name="phonenumber" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Events</span>
                        </div>
                        <input type="text" class="form-control" name="events" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" name="addstudent">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5 p-0">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">ColgName</th>
                <th scope="col">Email</th>
                <th scope="col">Phonenumber</th>
                <th scope="col">Event</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php 
                $query = "SELECT * FROM `registration`";
                $result = mysqli_query($co, $query);
                $i = 1;

                while ($fetch = mysqli_fetch_assoc($result)) {
                    echo <<<product
                    <tr>
                        <th scope="row">$i</th>
                        <td>{$fetch['firstname']}</td>
                        <td>{$fetch['colgname']}</td>
                        <td>{$fetch['email']}</td>
                        <td>{$fetch['phonenumber']}</td>
                        <td>{$fetch['events']}</td>
                        <td>
                            <a href="?edit=$fetch[id]" class="btn btn-warning me-2">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <button onclick="confirm_rem($fetch[id])" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    product;
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<script>
    function confirm_rem(id) {
        if (confirm("Are you sure you want to delete this item?")) {
            window.location.href = "printadd.php?rem=" + id;
        }
    }
</script>

</body>
</html>
