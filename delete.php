
<?php include "./db.php"; ?>
<!-- get the id from the url -->
<?php
if (isset($_GET["id"])) {
    $TodoID = $_GET['id']; //declare a TodoID variable from the Query String id
    // prepare SQL statement to delete Todo
    $sql = "DELETE FROM todos WHERE id = '$TodoID'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo 'Todo deleted successfully';
        header("location: ./");
    }
}
?>