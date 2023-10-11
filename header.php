<div>
    <link rel="stylesheet" href="css/style_header.css">
    <nav id="headerli">

        <li><a href="/Acceuil">Acceuil</a></li>
        <li><a href="/inscription">Inscription</a></li>
        <li><a href="/listedeclub">Liste des clubs</a></li>
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