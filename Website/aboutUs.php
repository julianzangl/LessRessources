<?php
session_start();
$isLoggedIn = false;
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
    $isLoggedIn = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LessRessources</title>
    <link href="lib/css/css.css" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutUs.php">Über uns</a></li>
                <li><a href="strom.php">Strom</a></li>
                <?php
                if ($isLoggedIn) {
                    echo '<li><a href="admin.php">Admin</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>

    <div class="ressourcen">
        Wir, LessRessources, sind ein vierköpfiges Team, das sich im Rahmen eines informationstechnischen Projektes zusammengefunden hat. Unser Projektleiter ist Julian Zangl, die stellvertretende Projektleiterin Katharina Jaros und unsere weiteren beiden Mitglieder
        heißen Katharina Klenner und Hannah Brunner. Gemeinsam besuchen wir bereits die vierte Klasse der HTL Rennweg mit Schwerpunkt Medientechnik. Über unsere Schulwahl sind wir allesamt glücklich, was wir auch in diesem Projekt, welches sich primär
        mit dem Erfassen von Daten befasst, widerspiegeln wollen. Aus Zeitgründen ist die Quantität unseres Projektes durchaus eingeschränkt, doch wir planen, es auch noch nach Projektabnahme weiterzuführen, um Großartiges zu erreichen!
    </div>

    <div class="footer">
        <p>Hallo Leuteee</p>
    </div>

</body>

</html>