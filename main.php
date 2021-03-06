<?php
session_start();
  if(!isset($_SESSION['username']) || $_SESSION['username'] == "" || empty($_SESSION['username'])){
    print($_SESSION['username']);
  }else{
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Accommodation Service Provider</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/mediaelementplayer.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style2.css">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style2.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
  <link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
    type="text/css"
  />
  <link rel="stylesheet" href="css/main.css">
  <script src="./js/jquery.min.js"></script>
<style>
body { margin: 0; padding: 0; }

#marker {
  background-image: url('./images/img_3.jpg');
  background-size: cover;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 2px solid;
  cursor: pointer;
}

.mapboxgl-popup {
    max-width: 200px;
    max-height: 300px;
}


#map {
  height: 450px;
  /* background-color:blue; */
  width:100%;
  stroke-width: 80%;
  }
  #info {
    display: table;
    position: relative;
    margin: 0px auto;
    word-wrap: anywhere;
    white-space: pre-wrap;
    padding: 10px;
    border: none;
    border-radius: 3px;
    font-size: 12px;
    text-align: center;
    color: #222;
    background: #fff;
    }

</style>
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            Accommodation Service Provider
          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <a href="./php/logout.php">Logout</a>
              </div>
            </ul>

            
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">HOME</a>
                <a href="about.html">ABOUT</a>
                <a href="house.html">HOUSE</a>
                <a href="price.html">PRICING</a>
                <a href="contact.html">CONTACT US</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
     <!-- slider section -->
    <section class="slider_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">
              <h1>
                <span> Modern</span> <br>
                Apartment <br>
                House
              </h1>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of
              </p>
              <div class="btn-box">
                <a href="" class="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container bg-white border border-4-primary mt-4 px-5">
    <div class="row">
        <div class="col-12">
            <p class="lead text-center mt-5 ">Select a map</p>
        </div>
       
        <div class="col-md-9  main_map">
            <div id="map"></div>
        </div>
        <div class="col-md-3 maps">
            <div class="cities">
                <div class="image_maps" id="map1">
                    <img src="images/map1.jpeg" alt="England">
                    <p class="m-2 text-center">AB10 1XG</p>
                </div>
                <div class="image_maps" id="map2">
                    <img src="images/map2.jpeg" alt="Scotland">
                    <p class="m-2 text-center">AB10 6RN</p>
                </div>
                <div class="image_maps" id="map3">
                    <img src="images/map3.jpeg" alt="Ireland">
                    <p class="m-2 text-center">AB10 7JB</p>
                </div>
                <div class="image_maps" id="map4">
                    <img src="images/map4.jpeg" alt="Wales">
                    <p class="m-2 text-center">AB11 5QN</p>
                </div>
                <div class="image_maps" id="map5">
                    <img src="images/map4.jpeg" alt="Wales">
                    <p class="m-2 text-center">AB11 6UL</p>
                </div>
                <div class="image_maps" id="map6">
                    <img src="images/map4.jpeg" alt="Wales">
                    <p class="m-2 text-center">AB11 8RQ</p>
            </div>
            </div>
            <form action="" id="myForm">
                <label for="budget" id="budget_label"> What is your budget(pounds): </label>
                <input type="range"  class ="input" name="budget" id="budget" min="100" max="100000">

                <label for="valuation"style="margin-right:5px;">Choose valuation type</label>
                <select class="form-control input" id="valuation_type" name="valuation_type">
                  <option value="Rent">Rent</option>
                  <option value= "Sale">Sale</option>
                  <option value="shortlet">Shortlet</option>
                  <option>All</option>
                </select>

                <label for="landmark"style="margin-right:5px;">Choose landmark</label>
                <select class="form-control input" id="landmark" name="landmark">
                  <option value="Nightclub">Tourism</option>
                  <option value="Parks">School</option>
                  <option  value="Beach">Beach</option>
                  <option value="Pol">Playground</option>
                  <option value="Pol">Supermarket</option>
                </select>

                <label for="mile" style="margin-right:5px;" id="mile_label">Choose mile: </label>
                <input type="range"  class ="input" name="mile" id="mile"  min="10" max="100">

    

                <label for="number_of_bedrooms"style="margin-right:5px;" id="bedroom_label">Choose number_of_bedrooms: </label>
                <input type="range"  class ="input" name="num_of_bedrooms" id="num_of_bedrooms" min="1" max="6">
            </form>
        </div>
    </div>
    
  </div>
  
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto mt-4">
          <h2 class="my-5">Browse Apartments</h2>
          <p>Select the locations you want and click the map to get houses you desire.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_1.jpg');"></div>
            <div class="unit-9-content">
              <h2>Aberdeen</h2>
              <span class="border border-outline-dark">$100/night</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_2.jpg');"></div>
            <div class="unit-9-content">
              <h2>Glasgow</h2>
              <span class="border border-outline-dark">$230/night</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_3.jpg');"></div>
            <div class="unit-9-content">
              <h2>Fife</h2>
              <span class="border border-outline-dark">$130/night</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_4.jpg');"></div>
            <div class="unit-9-content">
              <h2>Sussex</h2>
              <span class="border border-outline-dark">$150/night</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

    <!-- sale section -->

    <section class="sale_section layout_padding-bottom pt-5 mt-5">
      <div class="container-fluid">
        <div class="heading_container">
          <h2>
            House For Sale
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the
          </p>
        </div>
        <div class="sale_container">
          <div class="box">
            <div class="img-box">
              <img src="images/s-1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                WEST TOWERS
              </h6>
              <p>
                Aberdeen City, AB11 8RQ, United Kingdom
              </p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/s-2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                STUDIO HOUSE
              </h6>
              <p>
                AB11 6QN, Scotland, United Kingdom
              </p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/s-3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                THREE ROOM CONDO
              </h6>
              <p>
                Aberdeen City, AB10 6QN, United Kingdom
              </p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/s-4.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                PHILLIPS MANSION
              </h6>
              <p>
                Fife, Scotland, United Kingdom
              </p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/s-5.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                FOUR STAR PENTHOUSE
              </h6>
              <p>
                Perth, PH1, United Kingdom
              </p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/s-6.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
                EUGENE FLAT
              </h6>
              <p>
                Glasgow, Glasgow City, Scotland, United Kingdom
              </p>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            To Find More Houses, Go to the map above.
          </a>
        </div>
      </div>
    </section>
    <!-- end sale section -->

    <footer class="static-bottom text-center py-3 mt-4 bg-primary text-light">
        Copyright&copy;Suleiman Oluwashola Ahmed 2022
    </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
<!-- <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8iMIgYxHwgG_5pqlz7K3w6F7dSfZc0Gg&callback=initMap&v=weekly"
async
></script> -->
<script>
  $(document).ready(function(){
    var budget_label =$("#budget_label").append("<span><b>"+$("#budget").val()+"</b></span>");
    var mile_label =$("#mile_label").append("<span><b>"+$("#mile").val()+"</b></span>");
    var bedroom_label = $("#bedroom_label").append("<span><b>"+$("#num_of_bedrooms").val()+"</b></span>");
    var budget_value = $("#budget_label span b");
    var mile_value = $("#mile_label span b");
    var bedroom_value = $("#bedroom_label span b");
    $("#budget").click(function () { 
        var budget= $(this).val();
        budget_value.text(budget);
        console.log(budget);
    });
    $("#mile").click(function () { 
        var mile = $(this).val();
        mile_value.text(mile);
        console.log(mile);
    });
    $("#num_of_bedrooms").click(function () { 
        var bed_no = $(this).val();
        bedroom_value.text(bed_no);
        console.log(bed_no);
    });
    $("#valuation_type").mouseenter(function () { 
        var valu_type = $("#valuation_type option:selected").text();
        console.log(valu_type);
    });
    $("#landmark").mouseenter(function () { 
        var landmark = $("#landmark option:selected").text();
        console.log(landmark);
    });
    $("#building").mouseenter(function () { 
        var building = $("#building option:selected").text();
        console.log(building);
    });


	// TO MAKE THE MAP APPEAR YOU MUST
	// ADD YOUR ACCESS TOKEN FROM
	// https://account.mapbox.com
  mapboxgl.accessToken =
  "pk.eyJ1IjoienlnZXNhbTE5OTkiLCJhIjoiY2wxZjl0ZHVhMDJ3NjNsbWozNWQyNDh3ZyJ9.-p3xg86y--GtvMDIFhtXnw";
  const map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [-2.098302664062488, 57.14246896712912],
      zoom: 12,
      pitch: 60, // pitch in degrees
      bearing: -60, // bearing in degrees
  });

  const nav = new mapboxgl.NavigationControl();
  map.addControl(nav);
  map.addControl(new mapboxgl.FullscreenControl());

  map.on('mousemove', (e) => {
    document.getElementById('info').innerHTML =
    // `e.point` is the x, y coordinates of the `mousemove` event
    // relative to the top-left corner of the map.
    JSON.stringify(e.point) +
    '<br />' +
    // `e.lngLat` is the longitude, latitude geographical position of the event.
    JSON.stringify(e.lngLat.wrap());
    });


  document.getElementById('map1').addEventListener('click', () => {
  // Fly to a random location by offsetting the point -74.50, 40
  // by up to 5 degrees.
    map.flyTo({
      center: [-2.114864, 57.144156], 
      zoom:12,
      pitch: 60, // pitch in degrees
      bearing: -60, // bearing in degrees
      essential: true 
    });
    
    var mile = $("#mile").val()
    var valu_type = $("#valuation_type option:selected").text()
    var budget_type = $("#budget_label span b").text()
   var landmark_type =  $("#landmark option:selected").text();
    
    var postcode = 'AB10+1XG'
    if(valu_type== 'Rent'){
      var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=high-rental-demand&postcode='+postcode+'&radius='+mile+'&results=60'
    }
    if(valu_type== 'Sale')
    {
      var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=quick-sale-properties&postcode='+postcode+'&radius='+mile+'&results=60'
    }
    if(valu_type== 'Shortlet'){
      var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=short-lease-properties&postcode='+postcode+'&radius='+mile+'&results=60'
    }
    console.log(url)

    var requestOptions = {
      method: 'GET',
    };
   

    fetch(url)
    .then(data => {
      return data.json();
      }).then( house => {
        if(house.properties.length===0)
        {
          alert('No available property')
        }
        else{
           

          var j=0;
          for(i=0; i<house.properties.length; i++){
            
            if(house.properties[i]['price'] <= budget_type)
            {
              continue;
            }
            console.log(budget_type)
            if(valu_type== 'Sale')
          {
            const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'</p>'
          ).setMaxWidth("500px");

          // create DOM element for the marker
          const el = document.createElement('div');
          el.id = 'marker';

          // create the marker
          new mapboxgl.Marker(el)
            .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
            .setPopup(popup) // sets a popup on this marker
            .addTo(map);
          }

          if(valu_type== 'Rent')
          {
            const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
          ).setMaxWidth("500px");
          
            // create the marker
            new mapboxgl.Marker()
            .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
            .setPopup(popup) // sets a popup on this marker
            .addTo(map);
            
          }
          if(valu_type== 'Shortlet')
          {
            const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
            '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
          ).setMaxWidth("500px");
            // create the marker
            new mapboxgl.Marker({ color: 'black', rotation: 45 })
            .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
            .setPopup(popup) // sets a popup on this marker
            .addTo(map);
            
          }
          if(landmark_type=='Tourism'){
            fetch("https://api.geoapify.com/v2/places?categories=tourism&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
      
            .then(response => response.json())
            .then(result => {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>'+result.features[0].properties.address_line2+'</h5>'
                ).setMaxWidth("500px");
              
              
              new mapboxgl.Marker({ color: 'green', rotation: 60 })
                  .setLngLat(result.features[0].geometry.coordinates)
                  .setPopup(popup)
                  .addTo(map);
            })
          }

          if(landmark_type=='Supermarket')
          {
            fetch("https://api.geoapify.com/v2/places?categories=commercial.supermarket&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
      
            .then(response => response.json())
            .then(result => {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>'+result.features[0].properties.address_line2+'</h5>'
                ).setMaxWidth("500px");
              
              
              new mapboxgl.Marker({ color: 'green', rotation: 60 })
                  .setLngLat(result.features[0].geometry.coordinates)
                  .setPopup(popup)
                  .addTo(map);
            })
          }
          if(landmark_type=='Hotel')
          {
            fetch("https://api.geoapify.com/v2/places?categories=accommodation.hotel&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
      
            .then(response => response.json())
            .then(result => {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>'+result.features[0].properties.address_line2+'</h5>'
                ).setMaxWidth("500px");
              
              
              new mapboxgl.Marker({ color: 'green', rotation: 60 })
                  .setLngLat(result.features[0].geometry.coordinates)
                  .setPopup(popup)
                  .addTo(map);
            })
          }
          if(landmark_type=="School"){
            fetch("https://api.geoapify.com/v2/places?categories=education.school&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
      
            .then(response => response.json())
            .then(result => {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>'+result.features[0].properties.address_line2+'</h5>'
                ).setMaxWidth("500px");
              
              
              new mapboxgl.Marker({ color: 'green', rotation: 60 })
                  .setLngLat(result.features[0].geometry.coordinates)
                  .setPopup(popup)
                  .addTo(map);
            })
          }
      if(landmark_type=='Playground'){    
        fetch("https://api.geoapify.com/v2/places?categories=leisure.playground&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
      
          .then(response => response.json())
          .then(result => {
              const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                '<h5>'+result.features[0].properties.address_line2+'</h5>'
              ).setMaxWidth("500px");
            
            
            new mapboxgl.Marker({ color: 'green', rotation: 60 })
                .setLngLat(result.features[0].geometry.coordinates)
                .setPopup(popup)
                .addTo(map);
          })
        }
            
    }
        
        
        
        j = Math.round(i/2)
        console.log("The total number is "+ j)

          map.flyTo({
            center: [house.properties[j]['lng'], house.properties[j]['lat']], 
            zoom:11,
            pitch: 60, // pitch in degrees
            bearing: -60, // bearing in degrees
            essential: true 
          });

          
        
      }
        
      })
      
  });



  document.getElementById('map2').addEventListener('click', () => {
    // Fly to a random location by offsetting the point -74.50, 40
    // by up to 5 degrees.
      map.flyTo({
        center: [-2.121487, 57.137871], 
        zoom:12,
        pitch: 60, // pitch in degrees
        bearing: -60, // bearing in degrees
        essential: true 
      });
      
      var mile = $("#mile").val()
      var valu_type = $("#valuation_type option:selected").text()
      var budget_type = $("#budget_label span b").text()
     var landmark_type =  $("#landmark option:selected").text();
      
      var postcode = 'AB10+6RN'
      if(valu_type== 'Rent'){
        var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=high-rental-demand&postcode='+postcode+'&radius='+mile+'&results=60'
      }
      if(valu_type== 'Sale')
      {
        var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=quick-sale-properties&postcode='+postcode+'&radius='+mile+'&results=60'
      }
      if(valu_type== 'Shortlet'){
        var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=short-lease-properties&postcode='+postcode+'&radius='+mile+'&results=60'
      }
      console.log(url)
  
      var requestOptions = {
        method: 'GET',
      };
     
  
      fetch(url)
      .then(data => {
        return data.json();
        }).then( house => {
          if(house.properties.length===0)
          {
            alert('No available property')
          }
          else{
             
  
            var j=0;
            for(i=0; i<house.properties.length; i++){
              
              if(house.properties[i]['price'] <= budget_type)
              {
                continue;
              }
              console.log(budget_type)
              if(valu_type== 'Sale')
            {
              const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
              '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'</p>'
            ).setMaxWidth("500px");
  
            // create DOM element for the marker
            const el = document.createElement('div');
            el.id = 'marker';
  
            // create the marker
            new mapboxgl.Marker(el)
              .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
              .setPopup(popup) // sets a popup on this marker
              .addTo(map);
            }
  
            if(valu_type== 'Rent')
            {
              const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
              '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
            ).setMaxWidth("500px");
            
              // create the marker
              new mapboxgl.Marker()
              .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
              .setPopup(popup) // sets a popup on this marker
              .addTo(map);
              
            }
            if(valu_type== 'Shortlet')
            {
              const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
              '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
            ).setMaxWidth("500px");
              // create the marker
              new mapboxgl.Marker({ color: 'black', rotation: 45 })
              .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
              .setPopup(popup) // sets a popup on this marker
              .addTo(map);
              
            }
            if(landmark_type=='Tourism'){
              fetch("https://api.geoapify.com/v2/places?categories=tourism&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
        
              .then(response => response.json())
              .then(result => {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>'+result.features[0].properties.address_line2+'</h5>'
                  ).setMaxWidth("500px");
                
                
                new mapboxgl.Marker({ color: 'green', rotation: 60 })
                    .setLngLat(result.features[0].geometry.coordinates)
                    .setPopup(popup)
                    .addTo(map);
              })
            }
  
            if(landmark_type=='Supermarket')
            {
              fetch("https://api.geoapify.com/v2/places?categories=commercial.supermarket&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
        
              .then(response => response.json())
              .then(result => {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>'+result.features[0].properties.address_line2+'</h5>'
                  ).setMaxWidth("500px");
                
                
                new mapboxgl.Marker({ color: 'green', rotation: 60 })
                    .setLngLat(result.features[0].geometry.coordinates)
                    .setPopup(popup)
                    .addTo(map);
              })
            }
            if(landmark_type=='Hotel')
            {
              fetch("https://api.geoapify.com/v2/places?categories=accommodation.hotel&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
        
              .then(response => response.json())
              .then(result => {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>'+result.features[0].properties.address_line2+'</h5>'
                  ).setMaxWidth("500px");
                
                
                new mapboxgl.Marker({ color: 'green', rotation: 60 })
                    .setLngLat(result.features[0].geometry.coordinates)
                    .setPopup(popup)
                    .addTo(map);
              })
            }
            if(landmark_type=="School"){
              fetch("https://api.geoapify.com/v2/places?categories=education.school&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
        
              .then(response => response.json())
              .then(result => {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>'+result.features[0].properties.address_line2+'</h5>'
                  ).setMaxWidth("500px");
                
                
                new mapboxgl.Marker({ color: 'green', rotation: 60 })
                    .setLngLat(result.features[0].geometry.coordinates)
                    .setPopup(popup)
                    .addTo(map);
              })
            }
        if(landmark_type=='Playground'){    
          fetch("https://api.geoapify.com/v2/places?categories=leisure.playground&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
        
            .then(response => response.json())
            .then(result => {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>'+result.features[0].properties.address_line2+'</h5>'
                ).setMaxWidth("500px");
              
              
              new mapboxgl.Marker({ color: 'green', rotation: 60 })
                  .setLngLat(result.features[0].geometry.coordinates)
                  .setPopup(popup)
                  .addTo(map);
            })
          }
              
      }
          
          
          
          j = Math.round(i/2)
          console.log("The total number is "+ j)
  
            map.flyTo({
              center: [house.properties[j]['lng'], house.properties[j]['lat']], 
              zoom:11,
              pitch: 60, // pitch in degrees
              bearing: -60, // bearing in degrees
              essential: true 
            });
  
            
          
        }
          
        })
        
    });

  


  document.getElementById('map3').addEventListener('click', () => {
      // Fly to a random location by offsetting the point -74.50, 40
      // by up to 5 degrees.
        map.flyTo({
          center: [-2.127206, 57.124274], 
          zoom:12,
          pitch: 60, // pitch in degrees
          bearing: -60, // bearing in degrees
          essential: true 
        });
        
        var mile = $("#mile").val()
        var valu_type = $("#valuation_type option:selected").text()
        var budget_type = $("#budget_label span b").text()
       var landmark_type =  $("#landmark option:selected").text();
        
        var postcode = 'AB10+7JB'
        if(valu_type== 'Rent'){
          var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=high-rental-demand&postcode='+postcode+'&radius='+mile+'&results=60'
        }
        if(valu_type== 'Sale')
        {
          var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=quick-sale-properties&postcode='+postcode+'&radius='+mile+'&results=60'
        }
        if(valu_type== 'Shortlet'){
          var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=short-lease-properties&postcode='+postcode+'&radius='+mile+'&results=60'
        }
        console.log(url)
    
        var requestOptions = {
          method: 'GET',
        };
       
    
        fetch(url)
        .then(data => {
          return data.json();
          }).then( house => {
            if(house.properties.length===0)
            {
              alert('No available property')
            }
            else{
               
    
              var j=0;
              for(i=0; i<house.properties.length; i++){
                
                if(house.properties[i]['price'] <= budget_type)
                {
                  continue;
                }
                console.log(budget_type)
                if(valu_type== 'Sale')
              {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'</p>'
              ).setMaxWidth("500px");
    
              // create DOM element for the marker
              const el = document.createElement('div');
              el.id = 'marker';
    
              // create the marker
              new mapboxgl.Marker(el)
                .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                .setPopup(popup) // sets a popup on this marker
                .addTo(map);
              }
    
              if(valu_type== 'Rent')
              {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
              ).setMaxWidth("500px");
              
                // create the marker
                new mapboxgl.Marker()
                .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                .setPopup(popup) // sets a popup on this marker
                .addTo(map);
                
              }
              if(valu_type== 'Shortlet')
              {
                const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
              ).setMaxWidth("500px");
                // create the marker
                new mapboxgl.Marker({ color: 'black', rotation: 45 })
                .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                .setPopup(popup) // sets a popup on this marker
                .addTo(map);
                
              }
              if(landmark_type=='Tourism'){
                fetch("https://api.geoapify.com/v2/places?categories=tourism&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
          
                .then(response => response.json())
                .then(result => {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>'+result.features[0].properties.address_line2+'</h5>'
                    ).setMaxWidth("500px");
                  
                  
                  new mapboxgl.Marker({ color: 'green', rotation: 60 })
                      .setLngLat(result.features[0].geometry.coordinates)
                      .setPopup(popup)
                      .addTo(map);
                })
              }
    
              if(landmark_type=='Supermarket')
              {
                fetch("https://api.geoapify.com/v2/places?categories=commercial.supermarket&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
          
                .then(response => response.json())
                .then(result => {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>'+result.features[0].properties.address_line2+'</h5>'
                    ).setMaxWidth("500px");
                  
                  
                  new mapboxgl.Marker({ color: 'green', rotation: 60 })
                      .setLngLat(result.features[0].geometry.coordinates)
                      .setPopup(popup)
                      .addTo(map);
                })
              }
              if(landmark_type=='Hotel')
              {
                fetch("https://api.geoapify.com/v2/places?categories=accommodation.hotel&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
          
                .then(response => response.json())
                .then(result => {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>'+result.features[0].properties.address_line2+'</h5>'
                    ).setMaxWidth("500px");
                  
                  
                  new mapboxgl.Marker({ color: 'green', rotation: 60 })
                      .setLngLat(result.features[0].geometry.coordinates)
                      .setPopup(popup)
                      .addTo(map);
                })
              }
              if(landmark_type=="School"){
                fetch("https://api.geoapify.com/v2/places?categories=education.school&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
          
                .then(response => response.json())
                .then(result => {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>'+result.features[0].properties.address_line2+'</h5>'
                    ).setMaxWidth("500px");
                  
                  
                  new mapboxgl.Marker({ color: 'green', rotation: 60 })
                      .setLngLat(result.features[0].geometry.coordinates)
                      .setPopup(popup)
                      .addTo(map);
                })
              }
          if(landmark_type=='Playground'){    
            fetch("https://api.geoapify.com/v2/places?categories=leisure.playground&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
          
              .then(response => response.json())
              .then(result => {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>'+result.features[0].properties.address_line2+'</h5>'
                  ).setMaxWidth("500px");
                
                
                new mapboxgl.Marker({ color: 'green', rotation: 60 })
                    .setLngLat(result.features[0].geometry.coordinates)
                    .setPopup(popup)
                    .addTo(map);
              })
            }
                
        }
            
            
            
            j = Math.round(i/2)
            console.log("The total number is "+ j)
    
              map.flyTo({
                center: [house.properties[j]['lng'], house.properties[j]['lat']], 
                zoom:11,
                pitch: 60, // pitch in degrees
                bearing: -60, // bearing in degrees
                essential: true 
              });
    
              
            
          }
            
          })
          
      });
  





      document.getElementById('map4').addEventListener('click', () => {
        // Fly to a random location by offsetting the point -74.50, 40
        // by up to 5 degrees.
          map.flyTo({
            center: [-2.093295, 57.142611], 
            zoom:12,
            pitch: 60, // pitch in degrees
            bearing: -60, // bearing in degrees
            essential: true 
          });
          
          var mile = $("#mile").val()
          var valu_type = $("#valuation_type option:selected").text()
          var budget_type = $("#budget_label span b").text()
         var landmark_type =  $("#landmark option:selected").text();
          
          var postcode = 'AB11+5QN'
          if(valu_type== 'Rent'){
            var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=high-rental-demand&postcode='+postcode+'&radius='+mile+'&results=60'
          }
          if(valu_type== 'Sale')
          {
            var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=quick-sale-properties&postcode='+postcode+'&radius='+mile+'&results=60'
          }
          if(valu_type== 'Shortlet'){
            var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=short-lease-properties&postcode='+postcode+'&radius='+mile+'&results=60'
          }
          console.log(url)
      
          var requestOptions = {
            method: 'GET',
          };
         
      
          fetch(url)
          .then(data => {
            return data.json();
            }).then( house => {
              if(house.properties.length===0)
              {
                alert('No available property')
              }
              else{
                 
      
                var j=0;
                for(i=0; i<house.properties.length; i++){
                  
                  if(house.properties[i]['price'] <= budget_type)
                  {
                    continue;
                  }
                  console.log(budget_type)
                  if(valu_type== 'Sale')
                {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'</p>'
                ).setMaxWidth("500px");
      
                // create DOM element for the marker
                const el = document.createElement('div');
                el.id = 'marker';
      
                // create the marker
                new mapboxgl.Marker(el)
                  .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                  .setPopup(popup) // sets a popup on this marker
                  .addTo(map);
                }
      
                if(valu_type== 'Rent')
                {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
                ).setMaxWidth("500px");
                
                  // create the marker
                  new mapboxgl.Marker()
                  .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                  .setPopup(popup) // sets a popup on this marker
                  .addTo(map);
                  
                }
                if(valu_type== 'Shortlet')
                {
                  const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                  '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
                ).setMaxWidth("500px");
                  // create the marker
                  new mapboxgl.Marker({ color: 'black', rotation: 45 })
                  .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                  .setPopup(popup) // sets a popup on this marker
                  .addTo(map);
                  
                }
                if(landmark_type=='Tourism'){
                  fetch("https://api.geoapify.com/v2/places?categories=tourism&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
            
                  .then(response => response.json())
                  .then(result => {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                        '<h5>'+result.features[0].properties.address_line2+'</h5>'
                      ).setMaxWidth("500px");
                    
                    
                    new mapboxgl.Marker({ color: 'green', rotation: 60 })
                        .setLngLat(result.features[0].geometry.coordinates)
                        .setPopup(popup)
                        .addTo(map);
                  })
                }
      
                if(landmark_type=='Supermarket')
                {
                  fetch("https://api.geoapify.com/v2/places?categories=commercial.supermarket&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
            
                  .then(response => response.json())
                  .then(result => {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                        '<h5>'+result.features[0].properties.address_line2+'</h5>'
                      ).setMaxWidth("500px");
                    
                    
                    new mapboxgl.Marker({ color: 'green', rotation: 60 })
                        .setLngLat(result.features[0].geometry.coordinates)
                        .setPopup(popup)
                        .addTo(map);
                  })
                }
                if(landmark_type=='Hotel')
                {
                  fetch("https://api.geoapify.com/v2/places?categories=accommodation.hotel&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
            
                  .then(response => response.json())
                  .then(result => {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                        '<h5>'+result.features[0].properties.address_line2+'</h5>'
                      ).setMaxWidth("500px");
                    
                    
                    new mapboxgl.Marker({ color: 'green', rotation: 60 })
                        .setLngLat(result.features[0].geometry.coordinates)
                        .setPopup(popup)
                        .addTo(map);
                  })
                }
                if(landmark_type=="School"){
                  fetch("https://api.geoapify.com/v2/places?categories=education.school&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
            
                  .then(response => response.json())
                  .then(result => {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                        '<h5>'+result.features[0].properties.address_line2+'</h5>'
                      ).setMaxWidth("500px");
                    
                    
                    new mapboxgl.Marker({ color: 'green', rotation: 60 })
                        .setLngLat(result.features[0].geometry.coordinates)
                        .setPopup(popup)
                        .addTo(map);
                  })
                }
            if(landmark_type=='Playground'){    
              fetch("https://api.geoapify.com/v2/places?categories=leisure.playground&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
            
                .then(response => response.json())
                .then(result => {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>'+result.features[0].properties.address_line2+'</h5>'
                    ).setMaxWidth("500px");
                  
                  
                  new mapboxgl.Marker({ color: 'green', rotation: 60 })
                      .setLngLat(result.features[0].geometry.coordinates)
                      .setPopup(popup)
                      .addTo(map);
                })
              }
                  
          }
              
              
              
              j = Math.round(i/2)
              console.log("The total number is "+ j)
      
                map.flyTo({
                  center: [house.properties[j]['lng'], house.properties[j]['lat']], 
                  zoom:11,
                  pitch: 60, // pitch in degrees
                  bearing: -60, // bearing in degrees
                  essential: true 
                });
      
                
              
            }
              
            })
            
        });
    




        document.getElementById('map5').addEventListener('click', () => {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
            map.flyTo({
              center: [-2.112455, 57.137468], 
              zoom:12,
              pitch: 60, // pitch in degrees
              bearing: -60, // bearing in degrees
              essential: true 
            });
            
            var mile = $("#mile").val()
            var valu_type = $("#valuation_type option:selected").text()
            var budget_type = $("#budget_label span b").text()
           var landmark_type =  $("#landmark option:selected").text();
            
            var postcode = 'AB11+6UL'
            if(valu_type== 'Rent'){
              var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=high-rental-demand&postcode='+postcode+'&radius='+mile+'&results=60'
            }
            if(valu_type== 'Sale')
            {
              var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=quick-sale-properties&postcode='+postcode+'&radius='+mile+'&results=60'
            }
            if(valu_type== 'Shortlet'){
              var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=short-lease-properties&postcode='+postcode+'&radius='+mile+'&results=60'
            }
            console.log(url)
        
            var requestOptions = {
              method: 'GET',
            };
           
        
            fetch(url)
            .then(data => {
              return data.json();
              }).then( house => {
                if(house.properties.length===0)
                {
                  alert('No available property')
                }
                else{
                   
        
                  var j=0;
                  for(i=0; i<house.properties.length; i++){
                    
                    if(house.properties[i]['price'] <= budget_type)
                    {
                      continue;
                    }
                    console.log(budget_type)
                    if(valu_type== 'Sale')
                  {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'</p>'
                  ).setMaxWidth("500px");
        
                  // create DOM element for the marker
                  const el = document.createElement('div');
                  el.id = 'marker';
        
                  // create the marker
                  new mapboxgl.Marker(el)
                    .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                    .setPopup(popup) // sets a popup on this marker
                    .addTo(map);
                  }
        
                  if(valu_type== 'Rent')
                  {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
                  ).setMaxWidth("500px");
                  
                    // create the marker
                    new mapboxgl.Marker()
                    .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                    .setPopup(popup) // sets a popup on this marker
                    .addTo(map);
                    
                  }
                  if(valu_type== 'Shortlet')
                  {
                    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                    '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
                  ).setMaxWidth("500px");
                    // create the marker
                    new mapboxgl.Marker({ color: 'black', rotation: 45 })
                    .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                    .setPopup(popup) // sets a popup on this marker
                    .addTo(map);
                    
                  }
                  if(landmark_type=='Tourism'){
                    fetch("https://api.geoapify.com/v2/places?categories=tourism&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
              
                    .then(response => response.json())
                    .then(result => {
                        const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                          '<h5>'+result.features[0].properties.address_line2+'</h5>'
                        ).setMaxWidth("500px");
                      
                      
                      new mapboxgl.Marker({ color: 'green', rotation: 60 })
                          .setLngLat(result.features[0].geometry.coordinates)
                          .setPopup(popup)
                          .addTo(map);
                    })
                  }
        
                  if(landmark_type=='Supermarket')
                  {
                    fetch("https://api.geoapify.com/v2/places?categories=commercial.supermarket&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
              
                    .then(response => response.json())
                    .then(result => {
                        const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                          '<h5>'+result.features[0].properties.address_line2+'</h5>'
                        ).setMaxWidth("500px");
                      
                      
                      new mapboxgl.Marker({ color: 'green', rotation: 60 })
                          .setLngLat(result.features[0].geometry.coordinates)
                          .setPopup(popup)
                          .addTo(map);
                    })
                  }
                  if(landmark_type=='Hotel')
                  {
                    fetch("https://api.geoapify.com/v2/places?categories=accommodation.hotel&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
              
                    .then(response => response.json())
                    .then(result => {
                        const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                          '<h5>'+result.features[0].properties.address_line2+'</h5>'
                        ).setMaxWidth("500px");
                      
                      
                      new mapboxgl.Marker({ color: 'green', rotation: 60 })
                          .setLngLat(result.features[0].geometry.coordinates)
                          .setPopup(popup)
                          .addTo(map);
                    })
                  }
                  if(landmark_type=="School"){
                    fetch("https://api.geoapify.com/v2/places?categories=education.school&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
              
                    .then(response => response.json())
                    .then(result => {
                        const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                          '<h5>'+result.features[0].properties.address_line2+'</h5>'
                        ).setMaxWidth("500px");
                      
                      
                      new mapboxgl.Marker({ color: 'green', rotation: 60 })
                          .setLngLat(result.features[0].geometry.coordinates)
                          .setPopup(popup)
                          .addTo(map);
                    })
                  }
              if(landmark_type=='Playground'){    
                fetch("https://api.geoapify.com/v2/places?categories=leisure.playground&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
              
                  .then(response => response.json())
                  .then(result => {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                        '<h5>'+result.features[0].properties.address_line2+'</h5>'
                      ).setMaxWidth("500px");
                    
                    
                    new mapboxgl.Marker({ color: 'green', rotation: 60 })
                        .setLngLat(result.features[0].geometry.coordinates)
                        .setPopup(popup)
                        .addTo(map);
                  })
                }
                    
            }
                
                
                
                j = Math.round(i/2)
                console.log("The total number is "+ j)
        
                  map.flyTo({
                    center: [house.properties[j]['lng'], house.properties[j]['lat']], 
                    zoom:11,
                    pitch: 60, // pitch in degrees
                    bearing: -60, // bearing in degrees
                    essential: true 
                  });
        
                  
                
              }
                
              })
              
          });
      




          document.getElementById('map6').addEventListener('click', () => {
            // Fly to a random location by offsetting the point -74.50, 40
            // by up to 5 degrees.
              map.flyTo({
                center: [-2.072115, 57.135968], 
                zoom:12,
                pitch: 60, // pitch in degrees
                bearing: -60, // bearing in degrees
                essential: true 
              });
              
              var mile = $("#mile").val()
              var valu_type = $("#valuation_type option:selected").text()
              var budget_type = $("#budget_label span b").text()
             var landmark_type =  $("#landmark option:selected").text();
              
              var postcode = 'AB11+8RQ'
              if(valu_type== 'Rent'){
                var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=high-rental-demand&postcode='+postcode+'&radius='+mile+'&results=60'
              }
              if(valu_type== 'Sale')
              {
                var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=quick-sale-properties&postcode='+postcode+'&radius='+mile+'&results=60'
              }
              if(valu_type== 'Shortlet'){
                var url = 'https://api.propertydata.co.uk/sourced-properties?key=AVMTVRNTJ2&list=short-lease-properties&postcode='+postcode+'&radius='+mile+'&results=60'
              }
              console.log(url)
          
              var requestOptions = {
                method: 'GET',
              };
             
          
              fetch(url)
              .then(data => {
                return data.json();
                }).then( house => {
                  if(house.properties.length===0)
                  {
                    alert('No available property')
                  }
                  else{
                     
          
                    var j=0;
                    for(i=0; i<house.properties.length; i++){
                      
                      if(house.properties[i]['price'] <= budget_type)
                      {
                        continue;
                      }
                      console.log(budget_type)
                      if(valu_type== 'Sale')
                    {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'</p>'
                    ).setMaxWidth("500px");
          
                    // create DOM element for the marker
                    const el = document.createElement('div');
                    el.id = 'marker';
          
                    // create the marker
                    new mapboxgl.Marker(el)
                      .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                      .setPopup(popup) // sets a popup on this marker
                      .addTo(map);
                    }
          
                    if(valu_type== 'Rent')
                    {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
                    ).setMaxWidth("500px");
                    
                      // create the marker
                      new mapboxgl.Marker()
                      .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                      .setPopup(popup) // sets a popup on this marker
                      .addTo(map);
                      
                    }
                    if(valu_type== 'Shortlet')
                    {
                      const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                      '<h5>Price: &#163; '+house.properties[i]['price']+'</h5><p><b>Address: '+house.properties[i]['address']+'</p><p>Number of Bedrooms: '+house.properties[i]['bedrooms']+'</p><p>Type of house: '+house.properties[i]['type']+'</p><p>Postcode: '+house.properties[i]['postcode']+'</p><p> Copy and paste this link in your browser to view the pictures of this house: '+house.properties[i]['url']+'"</p>'
                    ).setMaxWidth("500px");
                      // create the marker
                      new mapboxgl.Marker({ color: 'black', rotation: 45 })
                      .setLngLat([house.properties[i]['lng'], house.properties[i]['lat']])
                      .setPopup(popup) // sets a popup on this marker
                      .addTo(map);
                      
                    }
                    if(landmark_type=='Tourism'){
                      fetch("https://api.geoapify.com/v2/places?categories=tourism&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
                
                      .then(response => response.json())
                      .then(result => {
                          const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                            '<h5>'+result.features[0].properties.address_line2+'</h5>'
                          ).setMaxWidth("500px");
                        
                        
                        new mapboxgl.Marker({ color: 'green', rotation: 60 })
                            .setLngLat(result.features[0].geometry.coordinates)
                            .setPopup(popup)
                            .addTo(map);
                      })
                    }
          
                    if(landmark_type=='Supermarket')
                    {
                      fetch("https://api.geoapify.com/v2/places?categories=commercial.supermarket&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
                
                      .then(response => response.json())
                      .then(result => {
                          const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                            '<h5>'+result.features[0].properties.address_line2+'</h5>'
                          ).setMaxWidth("500px");
                        
                        
                        new mapboxgl.Marker({ color: 'green', rotation: 60 })
                            .setLngLat(result.features[0].geometry.coordinates)
                            .setPopup(popup)
                            .addTo(map);
                      })
                    }
                    if(landmark_type=='Hotel')
                    {
                      fetch("https://api.geoapify.com/v2/places?categories=accommodation.hotel&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
                
                      .then(response => response.json())
                      .then(result => {
                          const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                            '<h5>'+result.features[0].properties.address_line2+'</h5>'
                          ).setMaxWidth("500px");
                        
                        
                        new mapboxgl.Marker({ color: 'green', rotation: 60 })
                            .setLngLat(result.features[0].geometry.coordinates)
                            .setPopup(popup)
                            .addTo(map);
                      })
                    }
                    if(landmark_type=="School"){
                      fetch("https://api.geoapify.com/v2/places?categories=education.school&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
                
                      .then(response => response.json())
                      .then(result => {
                          const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                            '<h5>'+result.features[0].properties.address_line2+'</h5>'
                          ).setMaxWidth("500px");
                        
                        
                        new mapboxgl.Marker({ color: 'green', rotation: 60 })
                            .setLngLat(result.features[0].geometry.coordinates)
                            .setPopup(popup)
                            .addTo(map);
                      })
                    }
                if(landmark_type=='Playground'){    
                  fetch("https://api.geoapify.com/v2/places?categories=leisure.playground&conditions=wheelchair&bias=proximity:"+house.properties[i]['lng']+","+house.properties[i]['lat']+"&limit=200&apiKey=465daa7f012142208948eaa81d586cb3", requestOptions)
                
                    .then(response => response.json())
                    .then(result => {
                        const popup = new mapboxgl.Popup({ offset: 25 }).setHTML(
                          '<h5>'+result.features[0].properties.address_line2+'</h5>'
                        ).setMaxWidth("500px");
                      
                      
                      new mapboxgl.Marker({ color: 'green', rotation: 60 })
                          .setLngLat(result.features[0].geometry.coordinates)
                          .setPopup(popup)
                          .addTo(map);
                    })
                  }
                      
              }
                  
                  
                  
                  j = Math.round(i/2)
                  console.log("The total number is "+ j)
          
                    map.flyTo({
                      center: [house.properties[j]['lng'], house.properties[j]['lat']], 
                      zoom:11,
                      pitch: 60, // pitch in degrees
                      bearing: -60, // bearing in degrees
                      essential: true 
                    });
          
                    
                  
                }
                  
                })
                
            });
        

 });
           
</script>
 
</body>
</html>

<?php
  }
  ?>