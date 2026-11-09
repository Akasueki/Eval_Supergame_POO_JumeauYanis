
<?php

class View{

    public function displayHeader(){

        echo '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supergame</title>
</head>
<body>
<header>

</header>';

    return $this;
    }

    public function displayFooter(){

        echo '
<footer>

</footer>
</body>
</html>';

    return $this;
    }
}
