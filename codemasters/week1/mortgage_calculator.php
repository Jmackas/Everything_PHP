<?php
/***********************************************************************
---Calculate the monthly mortgage repayments using the formulae below---
------Monthly Interest Rate [MIR] = Interest Rate Percentage / 1200-----
---------------Loan Term in Months [LTM] = Loan Term * 12---------------
-------------------------Power = (1 + MIR) ^ LTM------------------------
----------Repayments = Loan Amount * MIR * Power / (Power - 1)----------
***********************************************************************/

$loan = 100000;
$rate = 6 / 1200;
$term = 15 *12;

$power = (1 + $rate) ** $term;

$repayments = $loan * $rate * $power / ($power - 1);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Construction of Mortgage Equation</title>
<style>
body {
    font-size: 150%;
    font-family: calibri;
}

.outputValue {
    color: red;
}
</style>


</head>

<body>
    
    <h2>Mortgage Repayment</h2>
    
    <p>Repayments: <span class="outputValue"><?php echo round($repayments, 2)?></span></p>

    <p>Loan: <span class="outputValue"><?php echo $loan?></span></p>

    <p>Rate: <span class="outputValue"><?php echo $rate?></span></p>

    <p>Power: <span class="outputValue"><?php echo round($power, 2)?></span></p>
    
    <p><a href="#">Next iteration</a></p>
</body>