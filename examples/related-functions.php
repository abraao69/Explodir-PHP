<html>
<head>
<title>Funções relacionadas ao PHP-Explode</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../assets/css/style.css" />
</head>
<body>
    <div class="container">
        <div>
            <h4>String dividida por uma expressão regular</h4>
        <?php
        $string = ' Hello & World! & Welcome | to | learn new';
        $pattern = "/[\&,|]+/";
        print "<pre>";
        $array = preg_split($pattern, $string);
        print_r($array);
        print "</pre>";
        ?>
        </div>
        <div>
            <h4>Converter uma string em uma matriz</h4>
            <?php
            $string1 = 'Hello';
            print "<pre>";
            $result = str_split($string1);
            print_r($result);
            print "</pre>";
            ?>
        </div>
        <div>
            <h4>Dividir string multibyte usando expressão regular</h4>
            <?php
            $string2 = 'Welcome David!';
            $pattern = "\s";
            print "<pre>";
            $result = mb_split($pattern, $string2);
            print_r($result);
            print "</pre>";
            ?>
        </div>
        <div>
            <h4>String de tokenização</h4>
            <?php
            $string3 = "Owl-Parrot-Fox-Crane";
            $remove = "-";
            $token = strtok($string3, $remove);

            while ($token !== false) {
                echo $token . "\n";
                $token = strtok($remove);
            }
            ?>
        </div>
    </div>
</body>
</html>