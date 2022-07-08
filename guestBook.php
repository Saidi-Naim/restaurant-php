<?php 
    include 'connect.php';
    if(isset($_POST['submit'])){
        $id3=$_POST['id'];
        $restaurant=$_POST['restaurant'];
        $date=$_POST['date'];
        $comment=$_POST['comment'];

        $sql2="insert into `guest` (id,restaurant,date,comment) values('$id3','$restaurant','$date', '$comment')";
        $result2=$con->prepare($sql2);
        $result2->execute();



        if($result2){
            echo "Data inserted successfully";
        }else{
             die(mysqli_error($con));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="input-group">
                <input name="name2" type="text" class="form-control" placeholder="name">
            </div>
            <div class="input-group">
                <input name="restaurant" type="text" class="form-control" placeholder="Restaurant">
                <input name="date" type="date">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                <input maxlenght="255" placeholder="Your text" required name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>