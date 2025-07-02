
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBD</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php//this is just more html?>
    <form action="functions.php" method="get"><?php //method can be get or post, post is more secure, get is in url, post isn't?>
        <input type="text" name="num01" placeholder="Please enter a number">
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="text" name="num02" placeholder="Please enter second number">
        <button type="submit">Calculate</button>
    </form>

</body>
</html>
