<?php
if (! empty($_POST["submit"])) {
    if (! empty($_POST["languages"])) {
        $languages = $_POST["languages"];
        $result = explode(",", $languages);
    }
}
?>
<html>
<head>
<title>PHP-Obter linguagens conhecidas</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../assets/css/style.css" />
</head>
<body>
    <div class="container">
    <h4>Explodir os idiomas de entrada do usuário conhecidos</h4>
        <form action="" method="post">
            <div class="row">
                <div class="label">Insira os idiomas<span class="note">(Digite separado por vírgula):</span></div>
                <input type="text" name="languages" class="input">
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="btn-submit"
                    name="submit">
            </div>
            <div class="row">
 <?php if(!empty($result)){?>
                <div class="label font-bold">
Idiomas compreendidos :</div>
         <?php  foreach($result as $language){?>
        <div class="explode"> <?php echo $language;?></div><?php } }?>
            </div>
        </form>
    </div>
</body>
</html>