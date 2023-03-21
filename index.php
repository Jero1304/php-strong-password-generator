<!-- 
Descrizione
Dobbiamo creare una pagina che permetta ai 
nostri utenti di utilizzare il nostro generatore 
di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è 
molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una
password casuale (composta da lettere, lettere maiuscole,
numeri e simboli) 
da restituire all’utente. Scriviamo tutto
(logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php che includeremo poi
nella pagina principale 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <title>Genera Password</title>
</head>

<body>
    <div class="container border">
        <form class="py-5" action="" method="GET">
            <input type="number" name="lunghezza-password" required placeholder="Lunghezza password">
            <button type="submit">Invia</button>
        </form>
        <?php
        $lengthPW = $_GET['lunghezza-password'];
        // var_dump($_GET);
        ?>
        <p> la password è:
            <?php echo passwordGenerator($lengthPW); ?>
        </p>
    </div>
</body>

</html>
<?php
function passwordGenerator($length)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password =$password. $caratteri[rand(0, strlen($caratteri))];
    }
    return $password;
}

?>