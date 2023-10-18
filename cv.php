<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>
    <header>

    <img src="https://pm1.aminoapps.com/6573/e0058b914b76631277facd877884794a421d9f85_00.jpg" alt="avatar" height = 200px>

    <h1> Gurkan POLAT</h1>

    </header>

    <main>
        <h2>Formation</h2>
        <ul>
            <?php
        $mesformations = ["2023/2024 : TP DWWM","2023/2024 : Nurserie numérique", "2022/2023 : Master 2 Droit et Ingenierie fiscal", "2021/2022 : Master 1 Droit fiscal et vie de l'entreprise"];
        foreach($mesformations as $valeur) {
            echo "<li>" . $valeur . "<br>" . "</br>" . "</li>" ;
        }

        ?>
        
        </ul>

        <h2>Expériences professionnels</h2>
        <ul>
            <?php
        $mesexperiences = ["2023/2024 : Télé-enquêteur chez QUALIMETRIE","2022/2023 : Satge fin d'étude chez FIDAL", "2022/2023 : Vacataire au CENTRE DES FINANCES PUBLIQUES LILLE", "2022/2023 : Pompiste chez TOTAL"];
        foreach($mesexperiences as $valeur) {
            echo "<li>" . $valeur . "<br>" . "</br>" . "</li>" ;
        }
           
        ?>
        </ul>


    

    
</body>
</html>