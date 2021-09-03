


//map configuration

var map;
      function initialize() {
        myPos = new google.maps.LatLng(52.796151, 18.253589);  
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: new google.maps.LatLng(52.796151, 18.253589),
          mapTypeId: 'roadmap',
          styles: [
              {featureType: 'all',
                  elementType: 'geometry',
               stylers: [
                   {saturation: -100},
                   {gamma:1.2},
                   { lightness: -20 },
                   {contrast: 20}
               ] },
           {featureType: 'all',
                  elementType: 'labels.text.stroke',
               stylers: [
                   {visibility: 'off'},
                   {gamma:0.5},
                   { lightness: -36 }
               ] },
           {featureType: 'all',
                  elementType: 'labels.text.fill',
               stylers: [
                   {color:'#373737'},
                   { lightness: 10 }
               ] } 
                  /*
            {
             featureType: 'road',
              elementType: 'geometry',
              stylers: [
                { color: '#737373' },
                { weight: 1 }
              ]
            },  {
              featureType: 'landscape',
              elementType: 'geometry',
              stylers: [
                { hue: '#000000' },
                { gamma: 1.4 },
                { saturation: 82 },
                { lightness: 96 }
              ]
            }, {
              featureType: 'poi.school',
              elementType: 'geometry',
              stylers: [
                { hue: '#fff700' },
                { lightness: -15 },
                { saturation: 99 }
              ]
            }, {
              featureType: 'poi',
              elementType: 'geometry',
              stylers: [
                { visibility: 'off' }
              ]
            }, {
              featureType: 'poi.school',
              elementType: 'geometry',
              stylers: [
                { visibility: 'on' },
                { hue: '#fff700' },
                { lightness: -15 },
                { saturation: 99 }
              ]
            }
          */]
        });
        var marker = new google.maps.Marker({
            position: myPos,
            map: map,
            title: 'Prestige Nieruchomości'
        });
    };




