<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Borussia Dortmund</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/favicon.png" type="image/png">
</head>

<body>
    <header>
        <a href="index.html">
            <img src="../img/logo.png" alt="Borussia Dortmund Logo" class="logo-image">
        </a>
        <button class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <nav>
            <ul class="menu">
                <li><a href="index.html">Startseite</a></li>
                <li><a href="history.html">Geschichte</a></li>
                <li><a href="players.html">Spieler</a></li>
                <li><a href="coach.html">Trainer</a></li>
                <li><a href="season-overview.html">Saisonübersicht</a></li>
                <li><a href="fan-community.html">Community</a></li>
                <li><a href="shop.php" class="active">Shop</a></li>
                <li><a href="contact.html">Kontakt</a></li>
                <li><a href="team.html">Team</a></li>
            </ul>
        </nav>
    </header>
    <main class="shop-page">
        <h1>Borussia Dortmund Shop</h1>
        <section class="product-grid">
            <?php
            include '..\db_connect.php'; // Verbindung zur Datenbank herstellen

            $sql = "SELECT id, product_name, description, price, image_url FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Produkte ausgeben
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<img src='" . $row["image_url"] . "' alt='" . $row["product_name"] . "'>";
                    echo "<h2>" . $row["product_name"] . "</h2>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<p>Preis: " . $row["price"] . " CHF</p>";
                    echo "<button class='buy-button'>Kaufen</button>";
                    echo "</div>";
                }
            } else {
                echo "Keine Produkte gefunden.";
            }

            $conn->close();
            ?>
        </section>
    </main>
    <hr class="footer-transition">
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h3>Über uns</h3>
                <p>Wir sind mehr als nur ein Fußballclub. Wir sind eine Familie, eine Gemeinschaft, eine Leidenschaft.</p>
            </div>
            <div class="footer-contact">
                <h3>Kontakt</h3>
                <p>Email: info@bvb.de</p>
                <p>Telefon: +49 123 456 789</p>
            </div>
            <div class="footer-links">
                <h3>Nützliche Links</h3>
                <ul>
                    <li><a href="index.html">Startseite</a></li>
                    <li><a href="history.html">Geschichte</a></li>
                    <li><a href="players.html">Spieler</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Folge uns</h3>
                <div class="footer-social-icons">
                    <a href="#"><img src="../img/facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="../img/twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="../img/instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-bottom">
            <img src="../img/logo.png" alt="Borussia Dortmund Logo" class="footer-logo">
            <p>&copy; 2023 Borussia Dortmund Fan Webseite. Alle Rechte vorbehalten.</p>
        </div>
    </footer>
    <div class="modal" id="purchaseModal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Super gemacht!</h2>
            <p>Vielen Dank für den Produktkauf! <br>Dies ist nur ein Test Shop für unser Projekt in Grundlagen der Webprogrammierung an der HFTM.</p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById("mobile-menu");
            const menu = document.querySelector("nav ul.menu");

            menuToggle.addEventListener("click", function() {
                menu.classList.toggle("active");
            });
        });
    </script>
    <script>
        const modal = document.getElementById("purchaseModal");
        const closeButton = document.querySelector(".close-button");

        document.addEventListener("DOMContentLoaded", function() {
            const buyButtons = document.querySelectorAll(".buy-button");

            buyButtons.forEach(button => {
                button.addEventListener("click", function() {
                    modal.style.display = "block";
                });
            });

            closeButton.addEventListener("click", function() {
                modal.style.display = "none";
            });

            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>