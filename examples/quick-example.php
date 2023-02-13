<?php
$employees = "David Moshe Marco Steffan Devin William";
$result = explode(" ", $employees);
?>
<html>
<head>
<title>Exemplo rápido do PHP-Explode</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../assets/css/style.css" />
</head>
<body>
	<div class="container">
		<h4>Exemplo rápido do PHP Explode</h4>
    
         <?php
        // Prints array
        print "<PRE>";
        print_r($result);

        // Iterates array generated using PHP explode
        foreach ($result as $value) {
            ?>
		<div class="explode"><?php echo $value;?></div>
		<?php
        }
        ?>
    </div>
</body>
</html>