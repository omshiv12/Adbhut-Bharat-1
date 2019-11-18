<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/banner.css">
</head>
<body>
    <?php
    
    $sql="select * from `advertisement` where city='kashmir'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
    ?>
    <div class="row">
        <div class="column">
          <div class="card">
            <img src="images/k1.jpg" alt="Jane" style="width:100%">
            <div class="container">
              <h2><?php echo $row["city"]." ".$row["state"];?></h2>
              <p><?php echo "Agent id-".$row["agent_id"].'<br>'.$row["offer"]."   ".$row["price"];?></p>
              <p><?php echo "Rating-".$row["rating"];?></p>
              <p><button class="button">BOOK NOW</button></p>
            </div>
          </div>
        </div>
        <?php
     }
    }
    ?>
</body>
</html>