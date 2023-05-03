<?php

    include("database.php");

    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "INSERT INTO task(title, description) VALUES ('$title','$description')";

        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Task Saved succesfully';
        $_SESSION['message_type'] = 'success';
        
        header("Location: index.php");

    }
?>