<html>
<head></head>

<body>
<h1 align="center">
    ISS Space station is currently above:
</h1>
<p align="center">
    <?php
    /** @var \IssRadar\DAO\CurlResponseDAO $response */
    $response = $controller->indexAction();
    if (!empty($response->results)) {

        echo $response->results[0]->formatted_address;
    } else {
        echo "In the middle of nowhere";
    }
    ?>
</p>


</body>
</html>