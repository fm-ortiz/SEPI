<?php
$yearActual = date("Y");
$mesactual = date("n");

if ($mesactual <= 6) {
	$strPeriodo= 1;
//  echo "periodo uno";
} else {
	$strPeriodo = 2;
//  echo "periodo dos";
}

?>
