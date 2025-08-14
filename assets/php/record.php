<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // 
//     $clientIP = $_POST["client_ip"];

//     // 处理获取的数据
//     echo "客户端 IP 地址是：" . $clientIP;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = include 'connect.php';

    $currentMonth = date('Y-m');


    $sql = "SELECT * FROM visit_counter WHERE month_year = '$currentMonth'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "UPDATE visit_counter SET visit_count = visit_count + 1 WHERE month_year = '$currentMonth'";
        $conn->query($sql);
    } else {
        $sql = "INSERT INTO visit_counter (month_year, visit_count) VALUES ('$currentMonth', 1)";
        $conn->query($sql);
    }

    $visitor_ip = $_POST["client_ip"];
    // API endpoint to get IP location information
    $api_endpoint = "http://ip-api.com/json/$visitor_ip?fields=status,country,regionName,city,zip,lat,lon";

    // Make API request and decode the JSON response
    $json_response = file_get_contents($api_endpoint);
    $data = json_decode($json_response, true);
    try {
        if ($data['status'] === 'success') {
            $country = $data['country'];
            $region = $data['regionName'];
            $city = $data['city'];
            $zip = $data['zip'];
            $latitude = $data['lat'];
            $longitude = $data['lon'];

            $sql = "SELECT * FROM visitors WHERE city = '$city'";
            // echo $city;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $sql = "UPDATE visitors SET visit_count = visit_count + 1 WHERE city = '$city'";
                $conn->query($sql);
            }
            else{
                $sql = "INSERT INTO visitors (country, city, latitude, longitude, visit_count) 
                VALUES ('$country', '$city', $latitude, $longitude, 1)";
                $conn->query($sql);
            }
            
        }
    }catch (ExceptionType $e) {
        // Code to handle the exception
        // echo 'qu';
    }

    $conn->close();
}
?>
