<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form practice</title>
    
</head>
<style>
    *{
    margin:0;
    padding:0;
}

fieldset{
    border:2px solid black;
    padding:20px;
    width: 200px;
    height:40vh;
    display:flex;
    position:relative;
    left:40%;
    margin-top:20%;
    justify-content:center;
    align-items:center;
}

</style>
<body>
    <fieldset>
<form action="display.php" method="post">
    <label for="name">name</label>
    <input type="text" name="name" id="name"><br><br>
    <label for="email">email</label>
    <input type="email" name="email" id="email"><br><br>
    <label for="password">password</label>
    <input type="text" name="password" id="password"><br><br>
    <input type="submit" value="Submit">
</form>
    </fieldset>
    
</body>
</html>