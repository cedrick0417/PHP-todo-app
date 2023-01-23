<?php include "./db.php" ?>
<?php  
    //get the id from the url query string parameters
    if(isset($_GET['id'])){
        
            $id = $_GET['id'];
            
            //prepare Query to update status of todo-item
            $sql = "UPDATE todos SET status = 'completed' WHERE id = '$id'";
            $query = mysqli_query($conn , $sql);
            //check if query as succesfull or not
            if($query){
                echo 'Todom status Updated Successfully';
                header("location: ./");
                
            }else{
                echo 'Failed to Update Todo status';
            }
    }