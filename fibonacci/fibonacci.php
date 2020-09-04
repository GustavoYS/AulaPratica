<html>
<head><title>Fibonacci</title></head>
<body>
<?php
$valor=$_GET["valor"];
for($i=0;$i<$valor;$i++){
    if($i<=1)
    $vetor[$i]=1;
    else{
        $vetor[$i]=$vetor[$i-1]+$vetor[$i-2];
    }
    echo 'Fibonacci '.($i+1).': '.$vetor[$i].'<br>';
}
?>
</body>
</html>