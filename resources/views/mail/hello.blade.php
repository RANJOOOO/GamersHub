<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    <form action="mail" method="post">
    @csrf
    <label for="InputEmail">Send to: </label>
    <input type="email" name="email" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter Email">
    <br>
    <label for="InputEmail">cc:</label>
    <input type="email" name="cc" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter cc">
    <br>
    <label for="InputEmail">bcc:</label>
    <input type="email" name="bcc" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter Bcc">
    <label for="subject">Subject &nbsp;</label>
    <input type="text" name="subject" id="subject" aria-describedby="emailHelp" placeholder="Enter subject">
    <label for="mail">Mail </label>
    <textarea name="body" id="mail" rows="8" placeholder="Enter Body here"></textarea>
    <br>
    <button type="submit"> send </button>
</form>
</body>
</html>