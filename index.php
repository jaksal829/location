<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>지도 생성하기</title>
    
</head>
<body>
    <!-- 지도를 표시할 div 입니다 -->
    <div id="map" style="width:100%;height:350px;"></div>

    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f6e4b36ec6c88cd63ebbe33a1dda73f2"></script>
    <script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = { 
            center: new kakao.maps.LatLng(35.1800298, 128.7387107), // 지도의 중심좌표
            level: 10 // 지도의 확대 레벨
        };

    // 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
    var map = new kakao.maps.Map(mapContainer, mapOption); 


    var alat = document.getElementById("demo1");    
    var alon = document.getElementById("demo2");

    function getlocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }
        else { 
        }
    }

    function showPosition(position) {
    alat.innerHTML = position.coords.latitude;
    alon.innerHTML = position.coords.longitude;
    }
    getlocation();

    var markerPosition  = new kakao.maps.LatLng(alat, alon); 

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);
</script>
</body>
</html>
