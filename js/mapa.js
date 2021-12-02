
function sSalvador()
          {}
                 /*Creamos el punto a partir de la latitud y longitud de una dirección:
                 const center = {-24.193748997656325,  lng:-65.29800283873035,]; 
                 var hospitalesSa = [[-24.18262019705783, -65.31191627355226,'Pablo Soria'], 
                  [-24.243727465256793, -65.26281829988646, 'Carlos Snopek'],
                  [-24.181142271841498, -65.31513492466975, 'Hospital Materno Infatil Dr. Hector Quintana'],
                [-24.18524958711928, -65.29803579988646, 'Santorio del Rosario'], 
                  [-24.184891258671342, -65.30145580238872, 'Clinica Lavalle'], 
                  [-24.190236384374312, -65.29729490238867,'Sanatorio Los Lapachos'] ];
                 
                  //Configuramos las opciones indicando zoom, punto y tipo de mapa
                var bounds= new google.maps.LatLngBounds();
                  var myOptions = {
                   zoom: 12.5, 
                   center: center, 
                   mapTypeId: google.maps.MapTypeId.ROADMAP
               };
            
               //Creamos el mapa y lo asociamos a nuestro contenedor
               var map = new google.maps.Map(document.getElementById("showMap"),  myOptions);
               for (i=0; i< hospitalesSa.length; i++){
                marker = new google.maps.Marker({
                 position: hospitalesSa[i],
                 map:map, 
                 });
                } */
                var locations = [[-24.18262019705783, -65.31191627355226,'Pablo Soria'], 
                [-24.243727465256793, -65.26281829988646, 'Carlos Snopek'],
                [-24.181142271841498, -65.31513492466975, 'Hospital Materno Infatil Dr. Hector Quintana'],
              [-24.18524958711928, -65.29803579988646, 'Santorio del Rosario'], 
                [-24.184891258671342, -65.30145580238872, 'Clinica Lavalle'], 
                [-24.190236384374312, -65.29729490238867,'Sanatorio Los Lapachos'] ];
                
                  function sanSalvador() {
                
                    var myOptions = {
                      center: new google.maps.LatLng(33.890542, 151.274856),
                      zoom: 15,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                
                    };
                    var map = new google.maps.Map(document.getElementById("showMap"),
                        myOptions);
                
                    setMarkers(map,locations)
                
                  }
                  function setMarkers(map,locations){
                
                      var marker, i
                
                for (i = 0; i < locations.length; i++)
                 {  
                
                 
                 var lat = locations[i][0]
                 var long = locations[i][1]
                 var add =  locations[i][2]
                
                 latlngset = new google.maps.LatLng(lat, long);
                
                  var marker = new google.maps.Marker({  
                          map: map, position: latlngset  
                        });
                        map.setCenter(marker.getPosition())
                        var content = add    
                
                  var infowindow = new google.maps.InfoWindow()
                
                google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
                        return function() {
                           infowindow.setContent(content);
                           infowindow.open(map,marker);
                        };
                    })(marker,content,infowindow)); 
                    google.maps.event.addListener(marker,'mouseout', (function(marker,content,infowindow){ 
                      return function() {
                         infowindow.setContent(content);
                         infowindow.close(map,marker);
                      };
                  })(marker,content,infowindow));   
                
                  } 
                 
                }      
  

       
function palpala()
          {
              //Creamos el punto a partir de la latitud y longitud de una dirección:
              const center = {lat:-24.25800658339726, lng: -65.20539815079944};
              var hospitalespa = [{lat: -24.25379661294046, lng: -65.20559563655208},
                                 {lat: -24.256956994333482, lng:-65.2132195000662}];
              var texto = " <p style= 'font-size:10pt' <h1> palpala </h1> <p>";
               //Configuramos las opciones indicando zoom, punto y tipo de mapa
              var myOptions = {
                zoom:15, 
                center: center, 
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
         
            //Creamos el mapa y lo asociamos a nuestro contenedor
            var map = new google.maps.Map(document.getElementById("showMap"),  myOptions);
         
            //Mostramos el marcador en el punto que hemos creado
            
              var marker = new google.maps.Marker({
              position: center,
              map:map   
              });
             
            var informacion = new google.maps.InfoWindow({
              content: texto
            });
            marker.addListener('mouseover', function(){
              informacion.open(map,marker);
            });
            marker.addListener('mouseout', function(){
              informacion.close(map,marker);
            });
            
          }
          function principal(){ 
            const center= { lat:-24.1894, lng:-65.2945};
            var myOptions = {
              zoom: 12.5, 
              center: center, 
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map"),  myOptions);
          
          
           }

