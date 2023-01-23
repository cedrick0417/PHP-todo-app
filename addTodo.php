
<?php  include './db.php'; ?>
<?php

if (isset($_POST['submit'])) {

    $inputData = mysqli_real_escape_string($conn, $_POST['todo-input']);

    $sql = "INSERT INTO todos SET task = '$inputData'";

    $query = mysqli_query($conn,$sql);

    if($query){
        echo 'Todo added succesfully ';
        header("location: ./");

        echo $inputData;  
    }
     
}
?>