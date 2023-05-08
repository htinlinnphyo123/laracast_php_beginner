<?php

    $title = '404 Not Found';

    http_response_code(404);

    require('views/404.view.php');