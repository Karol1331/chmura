<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Lista przyjaciół</title>
</head>
<body>
    <header>
        <section id="baner"><h1>Portal Społecznościowy - moje konto</h1></section>
    </header>
    <main>
        <section id="glowny">
            <h2>Moje zainteresowania</h2>
            <ul>
                <li>muzyka</li>
                <li>film</li>
                <li>komputery</li>
            </ul>
            <h2>Moi znajomi</h2>
            <?php
            $conn = new mysqli("localhost", "root", "", "social");
            if(!$conn) die("Wystąpił błąd!");

            $sql = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6";
            if($result = $conn->query($sql)) {
                foreach($result as $wiersz) {
                    $fot = $wiersz['zdjecie'];

                    $imie = $wiersz['imie'];
                    $nazwisko = $wiersz['nazwisko'];
                    $opis = $wiersz['opis'];
                    echo "<div><div class='zdjecie'><img src='$fot' alt='przyjaciel'></div>
                    <div class='opis'><h3>$imie $nazwisko</h3><p>Ostatni wpis: $opis</p></div><br>
                    <div class='linia'><hr></div></div>";
                }
            }
            $conn->close();
            ?>
        </section>
        
    </main>
    <footer>
        <section id="lewy">
            Stronę wykonał: 00000000000
        </section>
        <section id="prawy">
            <a href="mailto:ja@portal.pl">napisz do mnie</a>
        </section>
    </footer>
</body>
</html>
