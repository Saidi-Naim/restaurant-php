<?php 
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $date=date('Y-m-d');
        $sql="insert into `message` (date,name,email,message) values('$date','$name','$email','$message')";
        $result=$con->prepare($sql);
        $result->execute();



        if($result){
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
    <title>message</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="input-group">
                <input name="name" type="text" aria-label="name" class="form-control" placeholder="name">
                <input name="email" type="email" aria-label="email" class="form-control" placeholder="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <input name="message" class="form-control" id="exampleFormControlTextarea1" rows="3">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>