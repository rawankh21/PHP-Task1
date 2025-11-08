<?php
$user1=["name"=>"Carl","age"=>"12","year"=>"Year 7"];
$user2=["name"=>"Sandra","age"=>"13","year"=>"Year 8"];
$user3=["name"=>"Kate","age"=>"11","year"=>"Year 6"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap-5.3.7-dist/bootstrap.min.css" rel="stylesheet">
    <link href="/session2/style.css" rel="stylesheet">
    <title>PHP|USERS</title>
</head>
<body>
 <div class="container mt-5">
  <div class="row">
   <div class="col-md-4 mb-4">
    <div class="card h-100">
     <img src="/session2/imgs/Screenshot 2025-11-08 110728.jpg" class="card-img-top" alt="User Image">
      <div class="card-body">
        <h5 class="card-title"><?php echo $user1["name"]; ?></h5>
         <p class="card-text">
          Age: <?php echo $user1["age"]; ?><br>
          Year: <?php echo $user1["year"]; ?>
        </p>
      </div>
    </div>
  </div>
<div class="col-md-4 mb-4">
 <div class="card h-100">
  <img src="/session2/imgs/Screenshot 2025-11-08 110853.jpg" class="card-img-top" alt="User Image">
   <div class="card-body">
    <h5 class="card-title"><?php echo $user2["name"]; ?></h5>
     <p class="card-text">
      Age: <?php echo $user2["age"]; ?><br>
      Year: <?php echo $user2["year"]; ?> 
     </p>
    </div>
   </div>
  </div>
<div class="col-md-4 mb-4">
 <div class="card h-100">
  <img src="/session2/imgs/Screenshot 2025-11-08 110935.jpg" class="card-img-top" alt="User Image">
   <div class="card-body">
    <h5 class="card-title"><?php echo $user3["name"]; ?></h5>
     <p class="card-text">
      Age: <?php echo $user3["age"]; ?><br>
      Year: <?php echo $user3["year"]; ?>
     </p>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
