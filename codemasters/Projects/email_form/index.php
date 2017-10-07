<?php

include 'functions.php';

?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact form</title>
    <link rel="stylesheet" href="style.css" media="screen" />
</head>

<body>

    <h1>Enquire about Excellent Hotel now</h1>

    <form id="contact-form" action="contact-submitted-01.php" method="post">

        <input class="contact-field hidden" type="text" id="subject" name="subject">

        <div class="form-row">
            <label for="name">First name</label>
            <div>
                <input type="text" id="name" name="fName" />
            </div>
        </div>


        <div class="form-row">
            <label for="name">Last name</label>
            <div>
                <input type="text" id="name" name="lName" />
            </div>
        </div>


        <div class="form-row">
            <label for="phone">Phone number</label>
            <div>
                <input type="text" id="phone" name="phone" />
            </div>
        </div>


        <div class="form-row">
            <label for="email">Email</label>
            <div>
                <input type="text" id="email" name="email" />
            </div>
        </div>


        <div class="form-row">
            <label for="message">Message</label>
            <div>
                <textarea id="message" name="message"></textarea>
            </div>
        </div>

        <div class="form-row">
            <label></label>
            <div>
                <input type="checkbox" name="enews" checked /> Yes, I want to hear from Excellent Hotel for special deals, discounts and more
            </div>
        </div>

        <div class="form-row">
            <label></label>
            <div>
                <input type="submit" name="submit" value="Get in touch!">
            </div>
        </div>

    </form>
</body>

</html>