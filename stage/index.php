<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="http://localhost/stage/assets/css/styles.css">
    <title>Document</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#" class="nav__link"><i class="ri-arrow-right-up-line"></i><span>Home</span></a></li>
                    <li class="nav__item"><a href="#" class="nav__link"><i class="ri-arrow-right-up-line"></i><span>About Us</span></a></li>
                    <li class="nav__item"><a href="#" class="nav__link"><i class="ri-arrow-right-up-line"></i><span>Projects</span></a></li>
                    <li class="nav__item"><a href="#" class="nav__link"><i class="ri-arrow-right-up-line"></i><span>Contact</span></a></li>
                    <li class="nav__item"><a href="inscription.php" class="nav__link"><i class="ri-arrow-right-up-line"></i><span>s'inscrire</span></a></li>
                    <li class="nav__item"><a href="connexion.php" class="nav__link"><i class="ri-arrow-right-up-line"></i><span>Connexion</span></a></li>
                </ul>
                <!-- Close button -->
                <div class="nav__close" id="nav-close"><i class="ri-close-line"></i></div>
            </div>
            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle"><i class="ri-menu-line"></i></div>
        </nav>
    </header>
    <main class="main">
        <div class="container">
            <div class="image">
                <img src="assets\css\logo.png" alt="logo">
            </div>
            <div class="left-content">
                <h1>Le moyen fiable d'engager un artisan</h1>
                <div class="project-input">
                    <h2>Quel est votre projet ?</h2>
                    <form class="search-form" id="projectForm">
    <div class="profession">
        <select name="metier" id="metier" required>
            <option value="">par exemple peinture</option>
            <option value="jardinage">jardinage</option>
            <option value="peinture">Peinture</option>
            <option value="plomberie">Plomberie</option>
            <option value="electricite">installation electrique</option>
        </select>
    </div>
    <button type="submit">→</button>
</form>
                </div>
            </div>
            <div class="right-content">
                <div class="image-container">
                    <img src="assets\css\artisant.jpg" alt="Artisan en train de travailler">
                    <div class="rating">Anthony ★ 5/5</div>
                </div>
            </div>
        </div>
    </main>
    <footer> hello</footer>
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
</html>
