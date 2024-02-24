<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>WorldCalculator</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed.css" rel="stylesheet">
</head>

<body>
    <style>
        body {
            background-color: white;
        }

        #navVerde {
            background-color: #00bf58;
        }

        p {
            color: black;
        }
    </style>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navVerde">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">World Calculator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $answer1 = $_POST["question1"];
        $answer2 = $_POST["question2"];
        $answer3 = $_POST["question3"];
        $answer4 = $_POST["question4"];
        $answer5 = $_POST["question5"];
        $answer6 = $_POST["question6"];
        $answer7 = $_POST["question7"];
        $answer8 = $_POST["question8"];
        $answer9 = $_POST["question9"];
        $answer10 = $_POST["question10"];
        $answer11 = $_POST["question11"];
        $answer12 = $_POST["question12"];

        // Inizializza la variabile $risultato a 0
        $risultato = 0;

        // Utilizza un ciclo for per sommare le risposte alle domande
        for ($i = 1; $i <= 12; $i++) {
            // Utilizza l'operatore di assegnazione corretto .= e incrementa il contatore
            $risultato += $_POST["question" . $i];
        }

        // Stampare la somma delle risposte
        echo "<p>La somma delle risposte è: " . $risultato . "</p>";
    }
    ?>

</body>