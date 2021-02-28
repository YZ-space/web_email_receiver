<html>
<head>
<title>Web E-mail Receiver</title>
</head>

<body>

<form action="process.php" method="post">
    <p>
    Name:<br> <input type="name" name="name" id="name"><br>
    </p>
    <p>
    Email:<br> <input type="email" name="email" id="email"><br>
    </p>
    <p>
    Subject:<br> <input type="subject" name="subject" id="subject" cols="30" rows="1"><br>
    </p>
    <textarea name="comment" id="comment" cols="45" rows="5"></textarea><br>
    <input type="submit" name="submit" id="submit" value="Send mail">
</form>

</body>
</html>