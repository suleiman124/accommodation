	// TO MAKE THE MAP APPEAR YOU MUST
	// ADD YOUR ACCESS TOKEN FROM
	// https://account.mapbox.com
  mapboxgl.accessToken =
  "pk.eyJ1IjoienlnZXNhbTE5OTkiLCJhIjoiY2wxZjl0ZHVhMDJ3NjNsbWozNWQyNDh3ZyJ9.-p3xg86y--GtvMDIFhtXnw"
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-74.5, 40],
zoom: 9
});
 
document.getElementById('fly').addEventListener('click', () => {
// Fly to a random location by offsetting the point -74.50, 40
// by up to 5 degrees.
map.flyTo({
center: [
-74.5 + (Math.random() - 0.5) * 10,
40 + (Math.random() - 0.5) * 10
],
essential: true // this animation is considered essential with respect to prefers-reduced-motion
});
});