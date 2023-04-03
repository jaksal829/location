<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
         <div id="map" style="width:100%;height:700px;"></div>
        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=dce8def3a21921f5d72d060cd4da648a"></script>
        <script>
            var mapContainer = document.getElementById('map'), // 지도 표시 DIV

            mapOption ={
                center: new kakao.maps.LatLng(33.4450701, 123.570667), //중심 좌표
                lever: 10 //지도 크기
            };

            var map = new kakao.maps.Map(mapContainer, mapOption); //지도 생성

            var lat; //위도 변수
            var lon; //경도 변수

            var options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            };
            //디바이스 위도 경도 가져오기
            function success(position){
                console.log(position);
                lat = position.coord.latitude; // 위도
                lon = position.coord.longitude; // 경도

                var locPosition = new kakao.maps.LatLng(lat, lon), //마커 표시 위치
                message = '<div style="padding:5px;">여기인가요?</div>'
                displayMarker(locPosition, message);
            };
            
            //error 처리
            function error(err){
                console.log(err);
            };

            if(navigator.geolocation){
                alert('위치정보 확인');
                var na = navigator.geolocation.watchPosition(success,error,options);
                console.log(na);
            }

            //마커 생성
            var marker;
            var flag=false;
            
            function displayMarker(locPosition, message){
                console.log(1);
                if(flag){
                    marker.setMap(null);
                }
                marker = new kakao.maps.Marker({position: locPosition});
                marker.setMap(map);
                flag=true;
                map.setCenter(locPosition);
            }
        </script>
    </body>
</html>
