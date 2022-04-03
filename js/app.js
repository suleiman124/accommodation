mapboxgl.accessToken =
"pk.eyJ1IjoienlnZXNhbTE5OTkiLCJhIjoiY2wxZjl0ZHVhMDJ3NjNsbWozNWQyNDh3ZyJ9.-p3xg86y--GtvMDIFhtXnw"

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
});
function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude])
}

function errorLocation() {
  setupMap([-2.24, 53.48])
}

function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15
  })

  const nav = new mapboxgl.NavigationControl()
  map.addControl(nav)

  var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  })

  map.addControl(directions, "top-left")
}

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
})
$(document).ready(function(){
    $('#map1').click(function(){
        
navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    //enableHighAccuracy: true
  });
  function successLocation(position) {
    setupMap([57.15, 2.11])
  }
  
  function errorLocation() {
    setupMap([57.15, 2.11])
  }
  
  function setupMap(center) {
    const map = new mapboxgl.Map({
      container: "map",
      style: "mapbox://styles/mapbox/streets-v11",
      center: center,
      zoom: 15
    })
  
    const nav = new mapboxgl.NavigationControl()
    map.addControl(nav)
  
    var directions = new MapboxDirections({
      accessToken: mapboxgl.accessToken
    })
  
    map.addControl(directions, "top-left")
  }
    })
  
})
