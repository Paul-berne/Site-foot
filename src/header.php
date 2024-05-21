<div>
    <link rel="icon" type="image/png" href="./img/icon_ligue1.png" />
    <link rel="stylesheet" href="css/style_header.css">
    <script src="script/script.js"></script>
    <nav id="headerli">

        <li><a href="/Acceuil">Acceuil</a></li>
        <li><a href="/Classement">Liste des clubs</a></li>
        <?php
        session_start();
        if (isset($_SESSION['nom'])) {
            echo "<li> <a href='/Profil'>Mon Profil</a><img src='" . $_SESSION['image'] . "' alt='User Image'></li>";
        } else {
            echo '<li><a href="/inscription">Inscription</a></li>';
            echo '<li><a href="/Connexion">Connexion</a></li>';
        }
        ?>

    </nav>
</div>

<script>
let lastScrollTop = 0;
const header = document.querySelector("#headerli");

window.addEventListener("scroll", () => {
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScrollTop > lastScrollTop) {
        header.classList.add("hide");
    } else {
        header.classList.remove("hide");
    }

    lastScrollTop = currentScrollTop;
});
</script>