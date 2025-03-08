<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 04</title>
</head>
<body>

<form action="process04.php" method="post">
    <p>Type ur name: <input type="text" name="username" id="" required></p>
    <p>E-mail: <input type="email" name="user-email" id="" required></p>
    <p>Enter your date of birth: <input type="date" name="user-data" id=""></p>
    <select name="card_flags" id="">
        <option value="Mastercard">Mastercard</option>
        <option value="Visa">Visa</option>
        <option value="Cielo">Cielo</option>
        <option value="American">Express</option>
    </select>
    <br>
    <br>
<input type="submit" value="SUBMIT">


</form>
    
</body>
</html>