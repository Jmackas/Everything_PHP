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
/*
	Not sure how to get the program to read the user input before executing, tried the below code but it didn't work.

	if(isset($_POST['Submit'])) {

	}
*/

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weeklyIncome = $_POST['weeklyIncome']; 
}



$rate = $interest / 1200;
$term = $years * 12;

$power = (1 + $rate) ** $term;

$repayments = $loan * $rate * $power / ($power - 1);

/* Weekly income to monthly income */
$monthlyIncome = $weeklyIncome * 4;



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
	<p>Weekly income: <input type="text" name="weeklyIncome"></p>
	<input type="submit">
  </form>

	
	<h2>Mortgage Repayment</h2>

	<p>Loan amount: <span class="outputField">$<?php echo number_format($loan, 0, "", ",");?></span></p>
	
	<p>Interest rate: <span class="outputField"><?php echo $interest;?>%</span></p>
	
	<p>Loan term: <span class="outputField"><?php echo $years;?> years</span></p>

	<p>Monthly income: <span class="outputField">$<?php echo $monthlyIncome;?></span></p>

	<p><strong>Final repayment: <span class="outputField">$<?php echo number_format($repayments, 2);?> / month</span></strong></p>

	<p><?php 
	

/* Determining whether mortgage stress may occur */
if ($monthlyIncome / 3 < $repayments) {
	echo 'You will experience mortgage stress';
}

else {
	echo "This mortgage will most likely be successful";
}

	?></p>

</body>


<!--

Advanced Questions:
1. What happens if a user enters invalid data (e.g. text in the form fields)? What about if they enter malicious input? What are some server-side strategies we can use to handle this situation?
	It will throw an error if the input is not understandable. Server side strategies could consist of try catch blocks, or if-else statements to remind the user not to enter certain data, and to repeat the input. More advanced solutions could consist of Regex, dissallowing a user to even type a character that could be deemed to be deviating from the required input.


2. How can we use our code to be forgiving to users entering common invalid data, e.g. $ on amounts, % on interest rates?
	Restrict what they can input, so they don't have to guess what is valid input. Such things as regex may be of assistance.

	-->