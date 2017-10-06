<?php
/***********************************************************************
---Calculate the monthly mortgage repayments using the formulae below---
------Monthly Interest Rate [MIR] = Interest Rate Percentage / 1200-----
---------------Loan Term in Months [LTM] = Loan Term * 12---------------
-------------------------Power = (1 + MIR) ^ LTM------------------------
----------Repayments = Loan Amount * MIR * Power / (Power - 1)----------
------------------------------------------------------------------------
-----Output the Loan Amount, Interest Rate Percentage, and Loan Term----
***********************************************************************/

$loan = 
$interest =
$years = 

$rate = $interest / 1200;
$term = $years * 12;

$power = (1 + $rate) ** $term;

$repayments = $loan * $rate * $power / ($power - 1);
?>

<!doctype html>
<html>
<head>
<style>
	body {
		font-family:  calibri;
		font-size: 150%;
	}

</style>


<meta charset="utf-8">
<title>Construction of Mortgage Equation</title>
</head>

<body>

	<h2>Loan Details</h2>
	
	<form action="welcome_get.php" method="get">
	Loan amount: <input type="number" name="loanAmount"><br>
	Interest rate: <input type="number" name="interestRate"><br>
	Loan term: <input type="number" name="loanTerm"><br>
	<input type="submit">
	</form>

	
	<h2>Mortgage Repayment</h2>
	
	<p>$<?php echo number_format($repayments, 2);?> / month</p>
</body>