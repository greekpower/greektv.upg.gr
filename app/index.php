<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>GreekTV by UPG.GR</title>
  <meta name="author" content="Jake Rocheleau">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  <script type="text/javascript" src="retina.js"></script>
<!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
	<div id="view">
		<header>
			<h1>GreekTV by UPG.GR</h1>
		</header>

		<div id="container">
			<ul>
				<!-- row 01 -->
				<a href="#"><li class="clearfix">
						<img src="images/modern-castle-kitchen.png" alt="thumb" class="thumbnail">
						<h2>Full-Room Mansion with Open Kitchen</h2>
						<p class="desc">Rental located in Pheonix, AZ. 2 bedrooms 1.5 baths. </p>

						<span class="price">$2,650/month</span>
				</li></a>

				<!-- row 02 -->
				<a href="#"><li class="clearfix">
					<img src="images/penthouse-with-bar.png" alt="Modern penthouse bar" class="thumbnail">
					<h2>Modern Penthouse Highrise with Bar</h2>
					<p class="desc">Rental located in New York City, NY. 1 bedroom 1 bath.</p>

					<span class="price">$1,800/month</span>
				</li></a>

				<!-- row 03 -->
				<a href="#"><li class="clearfix">
					<img src="images/single-room-loft.png" alt="An adventure room with sofa" class="thumbnail">
					<h2>Single-Room 3rd Floor Rental</h2>
					<p class="desc">Rental located in New York City, NY. 1 bedroom 2 baths.</p>

					<span class="price">$1,350/month</span>
				</li></a>

				<!-- row 04 -->
				<a href="#"><li class="clearfix">
					<img src="images/dining-room-duplex.png" alt="2nd story duplex apartment" class="thumbnail">
					<h2>2nd Floor Duplex Apartment with Balcony</h2>
					<p class="desc">Rental located in Madison, WI. 2 bedrooms 1 bath.</p>

					<span class="price">$1,650/month</span>
				</li></a>

				<!-- row 05 -->
				<a href="#"><li class="clearfix">
					<img src="images/yacht-style-bedroom.png" alt="unique yacht-style bedroom set" class="thumbnail">
					<h2>Open Apartment with Yacht-Style Interior</h2>
					<p class="desc">Rental located in Los Angeles, CA. 2 bedrooms 1 bath.</p>

					<span class="price">$2,100/month</span>
				</li></a>

				<!-- row 06 -->
				<a href="#"><li class="clearfix">
					<img src="images/kids-room-apartment.png" alt="big apartment with a kids room" class="thumbnail">
					<h2>Large Apartment Space with Children's Bedroom</h2>
					<p class="desc">Rental located in New Haven, CT. 3 bedrooms 1 bath.</p>

					<span class="price">$2,850/month</span>
				</li></a>

				<!-- row 07 -->
				<a href="#"><li class="clearfix">
					<img src="images/circular-apartment.png" alt="Open circular apartment complex" class="thumbnail">
					<h2>Circular Living Room Space 1st Floor</h2>
					<p class="desc">Rental located in Greensboro, NC. 2 bedrooms 1 bath.</p>

					<span class="price">$1,890/month</span>
				</li></a>

				<!-- row 08 -->
				<a href="#"><li class="clearfix">
					<img src="images/beautiful-villa-ocean.png" alt="beautiful villa rental overlooking the ocean" class="thumbnail">
					<h2>Beachfront Ocean Villa Rental</h2>
					<p class="desc">Rental located in Naxos, Greece. 2 bedrooms 2 bath.</p>

					<span class="price">$2,200/month</span>
				</li></a>
			</ul>
		</div>
	</div>
<script type="text/javascript">
$(document).ready(function(){

     $.getJSON('http://greektv.upg.gr/api/?type=unijson', function (data) {
       console.log(data);
       var items = data.items.map(function (item) {
         return item.key + ': ' + item.value;
       });

       showData.empty();

       if (items.length) {
         var content = '<li>' + items.join('</li><li>') + '</li>';
         var list = $('<ul />').html(content);
         showData.append(list);
       }
     });


	$("a").on("click", function(e){
		e.preventDefault();
    alert('click');
	});
});
</script>
</body>
</html>
