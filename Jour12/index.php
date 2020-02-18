<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Click JS</title>
    </head>
    <body>
    <header>
    <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>


        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</button>
            <h2>Collapsed Sidebar</h2>
            <p>Content...</p>
        </div>
    </header>
    <main>
        <h1>Évenement Click</h1>
            <div>
                <h2>Les événéments liés au clic de la souris</h2>
                <div id="Modal">
                    <div class="button-container">
                    <input id="popup" type="button" value="Cliquez ici" 
                    style="background-color: green;padding: 14px;font-size: xx-large;font-family: serif;">
                    </div>
                </div>
                <script src="assets/js/app.js"></script>
    </main>
    <footer>
    </footer>
    </body>
</html>