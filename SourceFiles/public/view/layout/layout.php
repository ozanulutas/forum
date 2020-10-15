<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="/forum/SourceFiles/public/view/css/style.css">
</head>
<body>

    <div class="container">
        <!-- HEADER -->
        <header class="header">
            <h1>HEADER</h1>
        </header>

        <!-- NAV & SIDE-NAV -->
        <?php include VIEW_PATH . 'layout/navigation.php'; ?>

        <!-- MAIN -->
        <main class="main">

            <?php include VIEW_PATH . $template . '.php'; ?>

        </main>

        <!-- FOOTER -->
        <footer class="footer">
            <h2>FOOTER</h2>
        </footer>
    </div>
    
</body>
</html>