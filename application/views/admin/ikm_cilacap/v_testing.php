




<!DOCTYPE html>
<html>
<head>
 <title>ROUTE MAP</title>
 <style type="text/css">
  html, body {
        height: 100%;
        margin: 0;
        padding: 0;
       }
       #map_canvas {
         height: 100%;
       }
 </style>
</head>
<body>
 <div id="map_canvas">  

 </div>



</body>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>  
<script type="text/javascript">
 //DUA VARIABLE BERIKUT DIPERLUKAN UNTUK RUTE
 var directionsDisplay;
 var directionsService = new google.maps.DirectionsService();


 (function() {  // fungsi untuk dijalankan ketika halaman web dubuka  
   var infowindow = null;  
      
   initialize(); // mengeksekusi fungsi initialize()  
     
  })();  
    
    function initialize() {  

     //BARIS DIBAWAH INI JUGA DIPERLUKAN UNTUK RUTE
     directionsDisplay = new google.maps.DirectionsRenderer();

        // Baris berikut digunakan untuk mengisi marker atau tanda titik di peta  
        var sites = [  
    
         ['Polinela', -5.358725,105.233413 ,1, '<h4>Politeknik Negeri Lampung</h4><p>Keterangan didalam marker</p>'], // pertama merupakan judul market, kedua adalah titik koordinan latitude, ketiga longitude, dan keempat merupakan z index (titik mana yang ditampilkan lebih dulu) untuk menentukan titik mana diatas titik mana, ketiga merupakan isi keterangan marker nya.  
         ['Unila', -5.364505,105.243442 ,2, '<h4>Universitas Lampung</h4><p>Keterangan didalam marker</p>'],  
         ['DJ',-5.3745833,105.2425024,3,'<h4>IBI DARMAJAYA</h4><p>Keterangan untuk marker</p>']
   
        ];  
        var centerMap = new google.maps.LatLng(-5.364505,105.243442); // mengatur pusat peta  
          
        var myOptions = {  
          zoom: 15, // level zoom peta  
          center: centerMap, // setting pusat peta ke centerMap  
          mapTypeId: google.maps.MapTypeId.ROADMAP //menentukan tipe peta  
        }  
    
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); //menempatkan peta pada div dengan ID map_canvas di html  

        //BARIS DIBAWAH INI UNTUK MELETAKKAN RUTE PADA MAP "map_canvas" ^
      directionsDisplay.setMap(map);

        setMarkers(map, sites); // memanggil fungsi setMarker untuk menandai titik di peta.  
          
        infowindow = new google.maps.InfoWindow({  
            content: "loading..."  
          });  
    
        var bikeLayer = new google.maps.BicyclingLayer();  
        bikeLayer.setMap(map); //memnunculkan peta  

        //BARIS DIBAWAH INI UNTUK MEMANGGIL FUNGSI calcRoute()
        calcRoute();   
      }  
    
        

        //FUNGSI CALCROUTE UNTUK MENGGAMBAR RUTE DARI TITIK A KE TITIK B / START ke END
        function calcRoute() {
    var start = '-5.358725,105.233413';
    var end = '-5.3745833,105.2425024';
    var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(result, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(result);
      }
    });
  }
    
    
     
        function setMarkers(map, markers) {  
         //berikut merupakan perulangan untuk membaca masing masing titik yang telah kita definisikan di sites[];  
        for (var i = 0; i < markers.length; i++) {  
          var sites = markers[i];  
          var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);  
          var marker = new google.maps.Marker({  
            position: siteLatLng,  
            map: map,  
            title: sites[0],  
            zIndex: sites[3],  
            html: sites[4]  
    
          });  
    
          var contentString = "Some content";  
          // berikut merupakan fungsi untuk mengatur agar keterangan marker muncuk ketika mouse diarahkan ke marker (mouse over)  
          google.maps.event.addListener(marker, "mouseover", function () {  
              
            infowindow.setContent(this.html);  
            infowindow.open(map, this);  
          });  
        }  
      }  
    

</script>

</html>