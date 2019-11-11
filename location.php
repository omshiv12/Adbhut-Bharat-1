
<?php
$con=mysqli_connect("localhost","root","","bharat");
$query1="select distinct city_name,state_name from trip WHERE location_type='mountains and valley'";
$query2="select distinct city_name,state_name from trip WHERE location_type='desert and history'";
$query3="select distinct city_name,state_name from trip WHERE location_type='beach wave and chill'";
$run1=mysqli_query($con,$query1);
$run2=mysqli_query($con,$query2);
$run3=mysqli_query($con,$query3);
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Locations &mdash; Adbhut Bharat</title>
       
    
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400i|Slabo+27px|Permanent+Marker|Cinzel|Satisfy|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        
        <link rel="stylesheet" type="text/css" href="header.css">
        <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <!-- <script src="https://use.fontawesome.com/d07bcaf3b8.js"></script> -->
        <link rel="stylesheet" type="text/css" href="set.css">
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
        <br><br><br><br><br><br><br><br>
        <div class="panel" style="display: block;width: 100%;height: 100%;display: block;">
            <br>
        <h1 class="hed">MOUNTAINS AND VALLEYS</h1>
        <?php
        while($f=mysqli_fetch_assoc($run1))
        {
            $t=$f['city_name'];
            $query7="select image_address from trip natural join images where city_name='$t'";
            $run7=mysqli_query($con,$query7);
            $a=mysqli_fetch_assoc($run7);
        ?>
        <div class="container" style="float: left;">
            	<div class="box1">
    		               <div id="imga"><img src="maharashtra.png" height="90%" width="100%"></div><!-- <?php echo $a['image_address'];?> -->
    		               <div class="content">
    	                        <a href="#"><i class="fa fa-heart" aria-hidden="true">like</i></a>
    	                    </div>
    	                    <div class="content1">
    	                        <a href="#"><i class="fa fa-comment" aria-hidden="true">Review</i></a>
    	                    </div>
    	                    <div id="cty"><b><?php echo $f['city_name']?></b></div> 
    	                    <div id="stt">(<?php echo $f['state_name']?>)</b></div>
    	                    <div id="txt">Famous for :</div>
    	                <div id="plc">
    	                <?php
    	                $r=$f['city_name'];
    	                $query4="select * from trip where city_name= '$r' AND location_type='mountains and valley'";
    	                $run4=mysqli_query($con,$query4);
    	                $z=mysqli_fetch_array($run4);
    	                echo $z['place_name'];
    	                while($z=mysqli_fetch_array($run4))
    	                { 
    	                    echo "," .$z['place_name'];
    	                ?>
    	                <?php
    	                }
    	                ?>
    	            	</div>
            	</div>
            </div>
        <?php
        }
        ?>
    </div>
    <br><br><br><br><br><br>
    <div class ="panel" style="width: 100%;height: 100%;display: block;">
        <br><br><br>
        <h1 class="hed">DESERT AND HISTORY</h1>
        <?php
        while($f=mysqli_fetch_assoc($run2))
        {
        ?>
         <div class="container" style="float: left;">
            <div class="box1">
                <div id="imga"><img src="maharashtra.png" height="90%" width="100%"></div>
                <div class="content">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true">like</i></a>
                </div>
                <div class="content1">
                    <a href="#"><i class="fa fa-comment" aria-hidden="true">Review</i></a>
                </div>
                <div id="cty"><b><?php echo $f['city_name']?></b></div> 
                    <div id="stt">(<?php echo $f['state_name']?>)</b></div>
                    <div id="txt">Famous for :</div>
              <div id="plc">
                <?php
                $r=$f['city_name'];
                $query5="select * from trip where city_name= '$r' AND location_type='desert and history'";
                $run5=mysqli_query($con,$query5);
                $z=mysqli_fetch_array($run5);
                echo $z['place_name'];
                while($z=mysqli_fetch_array($run5))
                { 
                    echo "," .$z['place_name'];
                ?>
                <?php
                }
                ?>
            </div>
            </div>   
            </div>
            <?php
        }
        ?>
    </div>
    <br><br><br><br><br><br>
    <div class="panel" style="width: 100%;height: 100%;display: block;  ">
            <h1 class="hed" style="display: block;text-align: left;">BEACH WAVE AND CHILL </h1>
        <?php
        while($f=mysqli_fetch_assoc($run3))
        {
        ?>
       <div class="container" style="float: left;">
            <div class="box1">
                <div id="imga"><img src="maharashtra.png" height="90%" width="100%"></div>
                <div class="content">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true">like</i></a>
                </div>
                <div class="content1">
                    <a href="#"><i class="fa fa-comment" aria-hidden="true">Review</i></a>
                </div>
              <div id="cty"><b><?php echo $f['city_name']?></b></div> 
                    <div id="stt">(<?php echo $f['state_name']?>)</b></div>
                    <div id="txt">Famous for :</div>
              <div id="plc">
                <?php
                $r=$f['city_name'];
                $query6="select * from trip where city_name= '$r' AND location_type='beach wave and chill'";
                $run6=mysqli_query($con,$query6);
                $z=mysqli_fetch_array($run6);
                echo $z['place_name'];
                while($z=mysqli_fetch_array($run6))
                { 
                    echo "," .$z['place_name'];
                ?>
                <?php
                }
                ?>
            </div>
     
            </div>    
        </div>
            <?php
        }
        ?>
    </div>
    
        <br><br><br><br><br>
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
    <br><br><br><br><br><br><br><br><br><Br><Br><Br><br><br><br><br><Br><br><br><br><Br><Br><Br>
    <br><br><br><br><br><br><br><br><br><Br><Br><Br><br><br><br><br><Br><br><br><br><Br><Br><Br>
    <br><br><br><br><br><br><br><br><br><Br><Br><Br><br><br><br><br><Br><br><br><br><Br><Br><Br>
    <footer>
        <div id="footer"></div>
        </footer>
    </body>
</html>