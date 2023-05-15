let map;
let coord;
function initMap() {
  coord= { lat: 19.4443379, lng: -99.2722807 };  
  map = new google.maps.Map(document.getElementById("map"), {
      zoom: 7,
      center: coord
    });
    var marker=new google.maps.Marker({
      position: coord,
      map: map
    })

  }
  
  window.initMap = initMap;