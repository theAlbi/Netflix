<?php
if (isset($_GET['city'])) {
    $city = urlencode($_GET['city']);
    $apiKey = e7458b4b3835d38ddf64bc717bd7ba05;

    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if ($data['cod'] == 200) {
        echo "<h2>Rezultati për: " . htmlspecialchars($city) . "</h2>";
        echo "Temperatura: " . $data['main']['temp'] . "°C<br>";
        echo "Pershkrimi: " . $data['weather'][0]['description'] . "<br>";
        echo "Shpejtesia e eres: " . $data['wind']['speed'] . " m/s<br>";
    } else {
        echo "Qyteti nuk u gjet!";
    }
} else {
    echo "Nuk eshte futur qyteti.";
}
?>
