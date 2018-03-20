<?php
    $requestParams = array(
        'CountryName' => 'United Arab Emirates'
    );

    $client = new SoapClient('http://www.webservicex.net/globalweather.asmx?WSDL');
    $response = $client->GetCitiesByCountry($requestParams);

    print_r($response);
?>