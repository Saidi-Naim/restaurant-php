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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/bootstrap-5.2.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/makiLogo.png">
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="./img/makiLogo.png">
    <link rel="stylesheet" href="style.css" />
    <title>Contact</title>
</head>

<body style="background-image: url('./img/bgJumbotron2.jpg'); background-size: cover; height: 90vh;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark pl-3 pr-3">
    
        <!-- Logo Navbar -->
        <a href="index.html" class="navbar-brand"><img src="./img/makiLogo.png" alt="logo" width="30" height="40" class="d-inline-block align-text-top"></a>
        <!-- Logo Navbar x -->

        <!-- Hamburger menu and links -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle Navigation">
        
            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="toggleMobileMenu">
            <div class="navbar-nav ml-md-auto">
                <div>
                    <a class="nav-item nav-link" href="menu.html"><img src="./img/poulpe.png"> Menu</a>
                </div>
                <div>
                    <a class="nav-item nav-link" href="gallery.php"><img src="./img/poulpe.png"> Gallery</a>
                </div>
                <div>
                    <a class="nav-item nav-link" href="contact.html"><img src="./img/poulpe.png"> Contact</a>
                </div>
                <div>
                    <a class="nav-item nav-link" href="Locations.html"><img src="./img/poulpe.png"> Locations</a>
                </div>
            </div>
        
        </div>
    </nav>
    <!-- Hamburger menu and links x-->

    <!-- Form -->
    <div class="m-3 pt-5 mt-4 text-light">
        <form class="row g-3">
            <div class="col-5">
                <label class="form-label">First name</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col-5">
                <label class="form-label">Last name</label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            <div class="col-5">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" placeholder="Email" class="form-control" id="inputEmail4">
            </div>

            <!-- Subject -->
            <div class="mb-3 mb-1">
                <label for="formDataList" class="form-label">Subject</label>
                <input class="form-control" list="datalistOptions" id="formDataList" placeholder="Subject">
                    <datalist id="datalistOptions">
                        <option value="Suggestion">
                        <option value="Command">
                        <option value="Question">
                    </datalist>
            </div>
            <!-- Subject x-->

            <!-- Description -->
            <div class="mb-3 mt-1">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Description..." id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <!-- Description x-->

            <div class="col-12">
            <button type="submit" class="btn btn-primary"><i class="bi bi-send"> Submit</i></button>
            </div>
            
        </form>
    </div>
    <!-- Form x-->

    

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- JS x-->
</body>
</html>