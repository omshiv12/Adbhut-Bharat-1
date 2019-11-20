<?php require 'db_connect.php';
$state=$_GET['state'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advertisements &mdash; Adbhut Bharat</title>
    <link rel="stylesheet" href="css/banner.css">
</head>
<body>
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
    <script type="text/javascript">
        $(function(){
  $("#header").load("header.html"); 
 
});
    </script>
  <header>
    <div id="header"></div>
  </header>
  <br><br><br><Br><Br><br><br><br><br>

  <div class ="ad_box">
    <center><h1>Advertisements</h1></center> 

    <?php
    
   $sql="select a.*, b.name from advertisement a join agent b on a.agent_id=b.agent_id where a.state='$state';";

    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      ?>
      <div class="row">
        <?php

      while($row=$result->fetch_assoc())
      {
        
        if($row['status']=='Active')
        {
    ?>
    
        <div class="column" style="float: left;">
          <div class="card">
            <img src="images/k1.jpg" alt="Jane" style="width:100%">
            <div class="container">
              <center><h2 style="text-transform: capitalize;"><?php echo $row["city"]." ".$row["state"];?></h2></center>
              <p><?php echo $row["offer"]."   ".$row["price"];?></p>
              <div>
              <p style="text-transform: capitalize;"><?php echo $row["name"];?></p>
              <p><?php echo "Rating-".$row["rating"]; ?></p>
              <p ><button class="button">BOOK NOW</button></p>
            </div>
            </div>
          </div>
        </div>
        <?php
     }
   }
    }
    ?>
  </div>
</div>
<br><br><br><br><br><br><br>
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
    <script type="text/javascript">
        $(function(){
  $("#footer").load("footer.html"); 
 
});
    </script>
    <footer>
      <div id="footer"></div>
    </footer>
</body>
</html>