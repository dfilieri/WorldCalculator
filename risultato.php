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
    #navVerde {
        background-color: #212529;
    }
    html{
        font-family: 'Times New Roman', Times, serif;
    }
    body{
        background-image: url("immagini/giornata-nazionale-risparmio-energetico.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 400px;
        min-height: auto
    }
    .btn-primary { 
        font-size: 1.2rem; 
        padding: 10px 20px; 
        border-radius: 25px; 
        background-color: #00bf58; 
        border-color: #00bf58; 
        --bs-btn-hover-bg: #00bf58; 
        --bs-btn-hover-border-color: #00bf58;
    }
    .main {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: auto;
        padding: 10px;
        background-color: rgba(255, 255, 255, 1);
        color: black;
        border-radius: 50px;
        border-color: black;
        z-index: 2; /* Imposta un valore di z-index superiore */
        position: relative; /* Assicurati che l'elemento abbia un posizionamento esplicito */
    }
    .terre-container {
        display: flex; /* Utilizza flexbox per il layout */
        justify-content: center; /* Centra gli elementi lungo l'asse principale */
        align-items: center; /* Centra gli elementi lungo l'asse trasversale */
    }
    .terre-container img {
        margin: 5px; /* Aggiungi un margine tra le immagini */
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
/*
        // Stampare la somma delle risposte
        echo "
        <main class='container'>
            <div class='main'>
                <h1>Calcolatore di consumi</h1>
                <p class='lead'>La somma delle risposte è: " . $risultato . "</p>
                <p>". terre($risultato) ."<p/>
            </div>
        </main>
        ";
*/
    }

    function terre($risultato) {
        if (abs($risultato - round($risultato)) < 0.00001) {
            for ($i = 0; $i < $risultato-1; $i++) {
                echo "<img src='./immagini/globe.png' alt='terra' style='width:100px;height:100px;'>";
            }
        } else {
            for ($i = 0; $i < $risultato-1; $i++) {
                echo "<img src='./immagini/globe.png' alt='terra' style='width:100px;height:100px;'>";
            }
            echo "<img src='./immagini/0.5globe.png' alt='mezza_terra' style='width:100px;height:100px;'>";
        }
    }
    
    ?>

    <main class='container'>
        <div class='main'>
            <h1>Calcolatore di consumi</h1>
            <p class='lead'>La somma delle risposte è: <?php echo $risultato; ?></p>
            <div class="terre-container">
                <?php terre($risultato); ?>
            </div>
        </div>
    </main>

</body>