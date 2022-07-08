<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE from message WHERE id= :id";
        $result=$con->prepare($sql);
        $result->bindValue(':id', $id);
        $count= $result->execute();
        
        if($count > 0){
            // echo "Deleted successfully";
            header('location:manage.php');
        }else{
            echo 'ERROR';
        }
    }

    if(isset($_GET['deleteid3'])){
        $id3=$_GET['deleteid3'];

        $sql2="DELETE from guest WHERE id3= :id3";
        $result2=$con->prepare($sql2);
        $result2->bindValue(':id3', $id3);
        $count2= $result2->execute();
        if($count2 > 0){
            // echo "Deleted successfully";
            header('location:manage.php');
        }else{
            echo 'ERROR';
        }
    }

    if(isset($_GET['deleteid2'])){
        $id2=$_GET['deleteid2'];

        $sql3="DELETE from upload WHERE id2= :id2";
        $result3=$con->prepare($sql3);
        $result3->bindValue(':id2', $id2);
        $count3= $result3->execute();
        if($count3 > 0){
            // echo "Deleted successfully";
            header('location:manage.php');
        }else{
            echo 'ERROR';
        }
    }
?>