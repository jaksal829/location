<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>지도 생성하기</title>
    
</head>
<body>
    <!-- 지도를 표시할 div 입니다 -->
    <div id="map" style="width:100%;height:350px;"></div>

    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=dce8def3a21921f5d72d060cd4da648a"></script>
    <script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(35.1800298, 128.7387107), // 지도의 중심좌표
        level: 10 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다


var x = "";
var y = "";

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
  }
}
function showPosition(position) {
  x = position.coords.latitude;
  y = position.coords.longitude;
}
getLocation();

// 마커가 표시될 위치입니다 
var markerPosition  = new kakao.maps.LatLng(parseFloat(x), parseFloat(y)); 

// 마커를 생성합니다
var marker = new kakao.maps.Marker({
    position: markerPosition
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);

// 아래 코드는 지도 위의 마커를 제거하는 코드입니다
// marker.setMap(null);    
</script>
</body>
</html>
