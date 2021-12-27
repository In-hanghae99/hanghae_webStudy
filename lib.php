<?
    //API와 소통하는 엔진
    $api_key = "31fcdca165beeaf37fc68b20b23de45f";
    $search_city = urlencode($_POST["search_city"]);    //사용자가 요청한 도시 정보

    $ㅕ기 = "api.openweathermap.org/data/2.5/weather?q=".$search_city."&appid=".$api_key;
?>