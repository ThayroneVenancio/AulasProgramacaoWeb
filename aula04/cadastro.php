<?php
if(empty($_POST['nome']) or empty($_POST['senha']) or ($_POST['email']) or ($_POST['observacao'])){
    echo "<script>
    alert('Nome muito curto');";
    echo "javascript:windows.location='index.php';</script>";
}

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$observacao= $_POST['observacao'];


if (strlen($nome) >= 10){
    echo $nome."<br>";
    echo strlen($nome)."</br>";
}else{
    echo "<script>
    alert('Nome muito curto');";
    echo "javascript:windows.location='index.php';</script>";
}

echo $email."</br>";
echo $senha."</br>";
echo $observacao."</br>";

?>