<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="js/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <img class="logo" src="img/logo.png" alt="">
        <button class="nav-toggler" id="nav-toggler" aria-controls="nav-content" aria-expanded="false"></button>

        <ul class="nav-list" id="nav-content" data-visible="false">
            <li class="nav-item"><a class="button btn-blue" href="#">Track Day</a></li>
            <ul class="nav-sub-list">
                <li class="nav-item"><button class="button btn-dark-mode"></button></li>
                <li class="nav-item"><a href="#" class="button">Zaloguj</a></li>
            </ul>
            <li class="nav-item"><a class="button btn-transparent" href="#">Racing Team</a></li>
            <li class="nav-item"><a class="button btn-transparent" href="#">Kontakt</a></li>
        </ul>
    </nav>
    <main class="main">
        <img class="logo" src="img/logo.png" alt="">
        <article class="container">
            <span>#01</span>
            <h2>Track Day</h2>
        </article>
        <article class="container">
            <div class="clock">00:00</div>
            <div class="clock-info">
                <div class="info">
                    <p>Czas trwania sesji</p>
                    <p>10 min</p>
                </div>
                <div class="info">
                    <p>Następna sesja</p>
                    <p>12:35</p>
                </div>
            </div>
        </article>
        <article class="container">
            <header class="header">
                <h2>Na torze</h2>
                <img src="img/arrow.svg" alt="arrow">
            </header>
            <div class="table-info">
                <p>Grupa: 1</p>
                <p>Uczestnicy: 4</p>
            </div>
            <div class="table">
                <table class="table">
                    <tr>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Pojazd</th>
                    </tr>
                    <tr>
                        <td>Abcdab</td>
                        <td>Abcdabcd</td>
                        <td>Abcdabcd</td>
                    </tr>
                    <tr>
                        <td>abcabcab</td>
                        <td>abcabcab</td>
                        <td>abcabcab</td>
                    </tr>
                    <tr>
                        <td>imie</td>
                        <td>nazwisko</td>
                        <td>samochod</td>
                    </tr>
                    <tr>
                        <td>Martyna</td>
                        <td>Jastrzębska</td>
                        <td>Honda Civic</td>
                    </tr>
                </table>
            </div>
        </article>
        <article class="container">
            <header class="header">
                <h2>Oczekuje</h2>
                <img src="img/arrow.svg" alt="arrow">
            </header>
            <div class="table-info">
                <p>Grupa: 2</p>
                <p>Uczestnicy: 4</p>
            </div>
            <div class="table">
                <table class="table">
                    <tr>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Pojazd</th>
                    </tr>
                    <tr>
                        <td>Abcdabcd</td>
                        <td>Abcdabcd</td>
                        <td>Abcdabcd</td>
                    </tr>
                    <tr>
                        <td>abcabcabca</td>
                        <td>abcabcabca</td>
                        <td>abcabcabca</td>
                    </tr>
                    <tr>
                        <td>imie</td>
                        <td>nazwisko</td>
                        <td>samochod</td>
                    </tr>
                    <tr>
                        <td>Martyna</td>
                        <td>Jastrzębska</td>
                        <td>Honda Civic</td>
                    </tr>
                </table>
            </div>
        </article>
        <article class="container">
            <header class="header">
                <h2>Uczestnicy</h2>
                <img src="img/arrow.svg" alt="arrow">
            </header>
            <div class="table-info">
                <p>Grupy: 3</p>
                <p>Uczestnicy: 12</p>
            </div>
            <div class="table-holder">
                <table class="table">
                    <tr>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Pojazd</th>
                        <th>Gr.</th>
                    </tr>
                    <tr>
                        <td>Abcdabcda</td>
                        <td>Abcdabcda</td>
                        <td>Abcdabcda</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>abcabcabca</td>
                        <td>abcabcabca</td>
                        <td>abcabcabca</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>imie</td>
                        <td>nazwisko</td>
                        <td>samochod</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Martyna</td>
                        <td>Jastrzębska</td>
                        <td>Honda Civic</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Abcdabcda</td>
                        <td>Abcdabcd</td>
                        <td>Abcdabcdcd</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>abcabcab</td>
                        <td>abcabcabca</td>
                        <td>abcabcabca</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>imie</td>
                        <td>nazwisko</td>
                        <td>samochod</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Martyna</td>
                        <td>Jastrzębska</td>
                        <td>Honda Civic</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Abcdabc</td>
                        <td>Abcdabcda</td>
                        <td>Abcdabcd</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>abcabcabca</td>
                        <td>abcabcabca</td>
                        <td>abcabcabca</td>
                        <td>4</td>
                    </tr>
                </table>
                <button>Pokaż więcej (2)</button>
            </div>
        </article>
        <article class="container">
            <span>#02</span>
            <h2>Racing Team</h2>
        </article>
       
       <!-- <article class="container">
            <img src="img/sponsors/img1.png" alt="">
            <img src="img/sponsors/img2.png" alt="">
            <img src="img/sponsors/img3.png" alt="">
            <img src="img/sponsors/img4.png" alt=""> 
        </article> -->
        <article class="container">
            <span>#03</span>
            <h2>Kontakt</h2>
        </article>
        <article class="container">
            <form action="">
                <input type="text" name="" id="" placeholder="Imię">
                <input type="text" name="" id="" placeholder="Nazwisko">
                <input type="text" name="" id="" placeholder="Email">
                <textarea name="" id="" cols="30" rows="10" placeholder="Wiadomość"></textarea>
            </form>
        </article>
    </main>
    <footer class="footer">
        <img src="img/logo.png" alt="">
        <div class="copyright">
            Autor: Martyna Jastrzębska
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script async src="//www.instagram.com/embed.js"></script>
</body>
</html>