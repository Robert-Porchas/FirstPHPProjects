<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Port Sniffer Page</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body class ="dark">
    <h1>This is a Port Sniffer Page</h1>
    <form method="POST" action="portScanner.php">
        <button type="submit">Start Port Sniffing</button>
    </form>
    <p>This bottom buttom is the same thing, but only runs on the most common ports.</p>
    <form method="POST" action="portScannerLite.php">
        <button type="submit">Start Port Sniffing (Lite)</button>
    </form>
</body>
</html>