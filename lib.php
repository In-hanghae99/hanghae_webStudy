<?
    //API와 소통하는 엔진
    $api_key = "31fcdca165beeaf37fc68b20b23de45f";
    $search_city = urlencode($_POST["search_city"]);    //사용자가 요청한 도시 정보

    $url = "api.openweathermap.org/data/2.5/weather?q=".$search_city."&appid=".$api_key;

    $is_post = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec ($ch);
    $state_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    if($state_code == 200)
    {
        echo $response;
    }
?>