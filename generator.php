

<?php
require("vendor/autoload.php");

$openapi = \OpenApi\Generator::scan(['api']);

header('Content-Type: application/x-yaml');
echo $openapi->toYaml();

