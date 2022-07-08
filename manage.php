<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
  <div class="container my-5">
    <div class="container my-5">
     <form method='POST'>
      <button class="w-100 <?php if (isset($_POST["ongletCmt"]))
        {echo "bg-danger text-white"; } ?> py-2" name="ongletCmt" value="msg">Comment
      </button>
      <button class="w-100 <?php if (isset($_POST["ongletMsg"]))
        {echo "bg-danger text-white"; } ?> py-2" name="ongletMsg" value="msg">Message
      </button>
      <button class="w-100 <?php if (isset($_POST["ongletGly"])) 
        {echo "bg-danger text-white"; } ?> py-2" name="ongletGly" value="msg">Gallery
      </button>;
      </form>
<?php

  // Guest Book
      if(isset($_POST['ongletCmt'])){
        $sql2='SELECT * from guest';
        $result2=$con->query($sql2);
        $values2= $result2->fetchAll(PDO::FETCH_ASSOC);
        
        echo '<div class="container my-5">
 <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Restaurant</th>
      <th scope="col">Date</th>
      <th scope="col">Comment</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>';
    if($result2){
        foreach($values2 as $row){
              $id3=$row['id3'];
              $name2=$row['name2'];
              $restaurant=$row['restaurant'];
              $date=$row['date'];
              $comment=$row['comment'];
              echo '<tr>
              <td>'.$name2.'</td>
                          <td>'.$restaurant.'</td>
                          <td>'.$date.'</td>
                          <td>'.$comment.'</td>
                          <td><button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid3='.$id3.'">Delete</a></button></td>
                          </tr>';
          }

          
          }
          
  echo '</tbody>
</table>
    </div>';
                
      }
    ?>

<!-- Message -->
<div class="container my-5">
     
<?php
      if(isset($_POST['ongletMsg'])){
        $sql='SELECT * from message';
        $result=$con->query($sql);
        $values= $result->fetchAll(PDO::FETCH_ASSOC);
        if($result){
          foreach($values as $row){
             $id=$row['id'];
                $date=$row['date'];
                $name=$row['name'];
                $email=$row['email'];
                $message=$row['message'];
            }
          }
        echo '<div class="container my-5">
 <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>';
    if($result){
        foreach($values as $row){
              $id=$row['id'];
              $name=$row['name'];
              $date=$row['date'];
              $message=$row['message'];
              echo '<th scope="row">'.$id.'</th>
                        <td>'.$date.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td class="col-md-3">'.$message.'</td>
                        <td><button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button></td>
                        </tr>';
          }

          
          }
          
 echo '</tbody>
</table>
    </div>';
                
      }
    ?>
    <!-- message fin -->


    <!-- UPLOAD IMAGES -->
    <?php
    if(isset($_POST['ongletGly'])){
        $sql3='SELECT * from upload';
        $result3=$con->query($sql3);
        $values3= $result3->fetchAll(PDO::FETCH_ASSOC);
        if($result3){
          foreach($values3 as $row){
                $id2=$row['id2'];
                $date=$row['date'];
                $name=$row['name'];
                $size=$row['size'] / 1000;
            }
          }

      if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $date= date('Y-m-d');
   $sql3="insert into `upload` (date,name,size) values('$date','$name','$size')";
        $result3=$con->prepare($sql3);
        
        $maxSize= 400000;
        
        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));
        //Tableau des extensions que l'on accepte
        $extensions = ['png', 'jpeg', 'gif', 'webp'];
        
        if($result3 && in_array($extension, $extensions) && $size <= $maxSize){
          $result3->execute();
          echo "Data inserted successfully";
          unset($_FILES['file']);
          move_uploaded_file($tmpName,'img/'.$name);
        }else{
             echo 'Taille du fichier ou extension pas prise en charge';
        }
  
  }
        echo '
        <form action="manage.php" method="POST" enctype="multipart/form-data">
        <label for="file">Fichier</label>
        <input type="file" name="file" multiple>
        <button type="submit">Enregistrer</button>
    </form>
        <div class="container my-5">
                  <table class="table my-5">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Size</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>$date</td>
                        <td>$name</td>
                        <td><img width="20%" src="./img/'.$name.'/></td>
                        <td>'.$size.' Ko</td>
                        <td><button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid2='.$id2.'">Delete</a></button></td>
                        </tr>
  </tbody>
</table>
    </div>';
                
      }
    ?>


    
<!-- fin upload -->
    
  
  <script src="index.js"></script>
</body>
</html>