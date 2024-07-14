<?php

$co = mysqli_connect("localhost", "root", "","gyan");


if(mysqli_connect_error()){
    die ("NOt connected ".mysqli_connect_error());
}
else{
    echo "connected";
}

?>