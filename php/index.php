<?php
    $text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque laudantium corporis sint reiciendis doloribus cupiditate molestiae. Nisi aliquid quidem incidunt tenetur repellat repudiandae, quae excepturi aspernatur error asperiores voluptas ratione?";
    $censorword = $_GET["badword"];
    $censor = "***";
    $censoredtext = str_replace($censorword, $censor, $text);

    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
</style>
</head>

<body>
    <?php
        
    ?>
    <p>
    <?php
    echo $censoredtext
    ?>
    </p>
    
</body>
</html>