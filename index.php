<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon" href="src/img/MatchMate_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="src/global.css">
    <link rel="stylesheet" href="src/sections.css">
    <script src="https://kit.fontawesome.com/e76b4b3d7b.js" crossorigin="anonymous" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatchMate</title>
</head>
<body id="top">
    <a class="back-To-Top" title="Powrót do góry" href="#top"></a>
    <div id="scroll-viewer"></div>

    <header>
        <h3>
            <img src="src/img/MatchMate_logo.png" alt="MatchMate_logo.png">
            MatchMate
        </h3>
        <nav>
            <a href="#"><i class="fa-solid fa-house"></i> Home</a>
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Szukaj</a>
            <a href="#"><i class="fa-solid fa-address-card"></i> O nas</a>
            <a href="#"><i class="fa-solid fa-shield-halved"></i> Pomoc</a>
            <div class="accont-buttons">
                <a href="login/"><button type="cta">Zaloguj się</button></a>
                <a href="register/"><button type="cta">Zarejestruj się</button></a>
            </div>
        </nav>
    </header>

    <main>

        <section class="hero-section full">
            <h1>Najlepsza wyszukiwarka graczy</h1>
            <p center="true" type="important">MatchMate pomaga graczom znaleźć osoby do wspólnego grania. Wystarczy wybrać swoje preferencje i wyszukać, a MatchMate dopasuję nam odpowiednie osoby.</p>
            <a href=""><button><i class="fa-solid fa-magnifying-glass"></i> Szukaj!</button></a>
        </section>

        <section class="text-image-section">
            <div class="text-last">
              <h1>2137</h1>
              <h3>Zadowolonych użytkowników</h3>
            </div>
            <img src="src/img/MatchMate_person.png" alt="MatchMate_person.png">
        </section>
        
        <section class="text-image-section">
            <div class="text">
                <h1>420</h1>
                <h3>Różnych gier i kategorii</h3>
            </div>
            <img src="" alt="coś tu trzeba wymyślić">
        </section>

        <section class="text-image-section">
            <div class="text-last">
                <h1>Dołącz</h1>
                <h3>już dziś!</h3>
                <br>
                <br>
                <button>Zarejestruj się</button>
            </div>
            <img src="" alt="coś tu trzeba wymyślić">
        </section>

        <section class="title-section">
            <div class="title-container">
                <h2>O nas</h2>
                <p>Witaj! Nazywamy się Cors. Jesteśmy początkującym zespołem programistów z Polski, który stworzył tę stronę. Programowanie to nasza pasja. Uwielbiamy tworzyć ciekawe i przydatne strony internetowe. Pomimo, że dopiero zaczynamy, wiemy, co robimy. Wszyscy nasi pracownicy ukończyli wysokiej jakości kursy na najlepszych uczelniach. Naszym celem jest sprawienie, by internet stał się przyjaźniejszy, zwłaszcza dla najmłodszych uczestników. Chcesz wiedzieć, kto jest w naszym zespole?</p>
                <a href="#"><button type="cta">Zobacz więcej!</button></a>
            </div>
        </section>

        <section class="feature" id="faq">
            <h2>FAQ</h2>
            <ul class="faq-container">
                <button style="width: 100%; height: auto;">
                    <li style="width: 100px">Pytanie?  <!-- To jest most likely do poprawy --> 
                    </li>
                </button>
                <hr style="color: blueviolet; background-color: blueviolet; height: 3px;">
                <p>Odpowiedź!</p>
                <li>Pytanie?
                    <p>Odpowiedź!</p>
                </li>
                <li>Pytanie?
                    <p>Odpowiedź!</p>
                </li>
                <li>Pytanie?
                    <p>Odpowiedź!</p>
                </li> 
            </ul> 
            </section>

        <section class="flex-grid-section popout">
            <h2>Obserwuj nas</h2>
            <div class="flex-grid-container">
                <a href="#">
                    <img src="src/img/logo-instagram.svg" alt="logo-instagram.svg">
                    <div class="text">
                        <h4 type="important">Instagram</h4>
                        <p type="secondary">@cos_tam</p>
                    </div>
                </a>

                <a href="#">
                    <img src="src/img/logo-discord.svg" alt="logo-discord.svg">
                    <div class="text">
                        <h4 type="important">Discord</h4>
                        <p type="secondary">@cos_tam</p>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <footer>
        <hr>
        <nav>
        <a href="#"><i class="fa-solid fa-house"></i> Home</a>
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Szukaj</a>
            <a href="#"><i class="fa-solid fa-address-card"></i> O nas</a>
            <a href="#"><i class="fa-solid fa-address-card"></i> FAQ</a>
            <a href="#"><i class="fa-solid fa-shield-halved"></i> Pomoc</a>
            <a href="login/">Zaloguj się</a>
            <a href="register/">Zarejestruj się</a>
        </nav>
        <hr>
        <img src="src/img/MatchMate_logo.png" alt="MatchMate_logo.png">
    </footer>

    <p
      style="
        position: absolute;
        top: 100%;
        margin: 0;
        width: 100%;
        max-width: unset;
        padding: 4px 0;
        background: black;
        color: white;
        text-align: center;
        font-size: 16px;
      "
    >
    © 2024 Cors • This website is designed by
      <a
        href="http://goodday.great-site.net/"
        target="_blank"
        title="goodday.great-site.net/"
        style="color: #69ccff"
        >Mr.GoodDay</a
      >.
    </p>
</body>
</html>