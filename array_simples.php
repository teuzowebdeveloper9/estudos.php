<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php

$nome = "mateus";
var_dump($nome);
if(is_string($nome)):
    echo "isso já era obvio";
else:
    echo "não é string";
endif;
echo "<hr>";

$carros = array("uno","celta","fusca");

class dados{
    public $nome = "mateus";
    public function __construct($nome)
    {
        
    }
}

?>

</body>
</html>
