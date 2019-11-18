<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Adbhut Bharat &mdash; Advertisements</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400i|Slabo+27px|Permanent+Marker|Cinzel|Satisfy|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        
        <link rel="stylesheet" type="text/css" href="header.css">
		
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
<br><br><br>
		
		<div class="content">
			<div class="container_12">
				<div class="banners">
					<div class="grid_4">
						<div class="banner">
							<img src="images/k2.jpg" alt="">
							<div class="label">
								<div class="title">Kashmir</div>
								<div class="price">from<span>Rs.40k</span></div>
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
					<div class="grid_4" onmouseover ="show()">
						<div class="banner">
							<img src="images/rajasthan.png" alt="">
							<div class="label" >
								<div class="title">JAIPUR</div>
								<div class="price">from<span>Rs.25k</span></div>
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/uttar_pradesh.png" alt="">
							<div class="label">
								<div class="title">VARANASI</div>
								<div class="price">from<span>Rs 25k</span></div>
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/kerela.png" alt="">
							<div class="label">
								<div class="title">KERELA</div>
								<div class="price">from<span>Rs.30k</span></div>
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/agra.png" alt="">
							<div class="label">
								<div class="title">AGRA</div>
								<div class="price">from<span>Rs.25k</span></div>
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/maharashtra.png" alt="">
							<div class="label">
								<div class="title">MUMBAI</div>
								<div class="price">from<span>Rs.40k</span></div>
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<br><br><br><br><br>
		<script type="text/javascript">
			function show($id){
				data=document.getElementById('label'+id);
				data.removeClass('hidden');
			}
		</script>
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