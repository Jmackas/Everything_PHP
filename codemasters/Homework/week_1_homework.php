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

/* Parsing of 'Loan amount' to variable $loan */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loan = $_POST['loanAmount']; 
}

/* Parsing of 'Interest rate' to variable $interest */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $interest = $_POST['interestRate']; 
}

/* Parsing of 'Loan term' to variable $years */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $years = $_POST['loanTerm']; 
}


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

	.outputField {
		color: red;
	}

</style>


<meta charset="utf-8">
<title>Construction of Mortgage Equation</title>
</head>

<body>

	<h2>Loan Details</h2>
	
	<p>Please enter the details of your loan below.</p>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<p>Loan amount: <input type="text" name="loanAmount"></p>
	<p>Interest rate: <input type="text" name="interestRate"></p>
	<p>Loan term: <input type="text" name="loanTerm"></p>
	<input type="submit">
  </form>

	
	<h2>Mortgage Repayment</h2>

	<p>Loan amount: <span class="outputField">$<?php echo number_format($loan, 0, "", ",");?></span></p>
	
	<p>Interest rate: <span class="outputField"><?php echo $interest;?>%</span></p>
	
	<p>Loan term: <span class="outputField"><?php echo $years;?> years</span></p>

	<p><strong>Final repayment: <span class="outputField">$<?php echo number_format($repayments, 2);?> / month</span></strong></p>

</body>