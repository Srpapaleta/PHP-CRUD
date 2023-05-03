<?php 
    include("database.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = "Task Removed Succesfully";
        $_SESSION['message_type'] = 'danger';

        header("Location: index.php");
    }
?>