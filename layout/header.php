<?php
//dostavam aktualny stav z query parametru
$theme = $_GET["theme"];
?>

<header style="background-color: <?php echo $theme === "dark" ? "black" : "white" ?>" class="container main-header">
    <div>
        <a href="index.php">
            <img style="background-color: <?php echo $theme === "dark" ? "white" : "" ?>" src="img/logo.png"
                 height="40">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu">
            <li><a href="index.php" style="color: <?php echo $theme === "dark" ? "#e0e0e0" : "black" ?>">Domov</a></li>
            <li><a href="portfolio.html"
                   style="color: <?php echo $theme === "dark" ? "#e0e0e0" : "black" ?>">Portfólio</a></li>
            <li><a href="qna.php" style="color: <?php echo $theme === "dark" ? "#e0e0e0" : "black" ?>">Q&A</a></li>
            <li><a href="kontakt.html" style="color: <?php echo $theme === "dark" ? "#e0e0e0" : "black" ?>">Kontakt</a>
            </li>
            <!--            pridal som tlacidlo pre zmenu temy, ktora bude menit query param-->
            <li><a style="color: <?php echo $theme === "dark" ? "#e0e0e0" : "black" ?>"
                   href="?theme=<?php echo $theme === 'dark' ? 'light' : 'dark'; ?>" class="btn">
                    Switch to <?php echo $theme === 'dark' ? 'Light' : 'Dark'; ?> Theme
                </a></li>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>

    </nav>
</header>
