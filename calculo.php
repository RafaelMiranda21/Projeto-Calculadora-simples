<?php


if(!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['op'])){
   
   $n1 = addslashes($_GET['n1']);
   $n2 = addslashes($_GET['n2']);
   $op = addslashes($_GET['op']);
   
   switch ($op) {
   	case '1':
   	    $conta = $n1 + $n2;
   		echo $n1." + ".$n2." = ".$conta;
   		break;
   	case '2':
   	    $conta = $n1 - $n2;
   		echo $n1." - ".$n2." = ".$conta;
   		break;
   	case '3':
   	    $conta = $n1 / $n2;
   		echo $n1." / ".$n2." = ".$conta;
   		break;
   	case '4':
   	    $conta = $n1 * $n2;
   		echo $n1." * ".$n2." = ".$conta;
   		break;		
   	
   	
   }
}else{
	header("Location: index.php");
}

?>
<br/>
<a href="index.php">Sair</a>
