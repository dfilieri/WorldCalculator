<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>List groups · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/list-groups/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      #ButtonConferma{
        align-self: center;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="list-groups.css" rel="stylesheet">
  </head>

  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    
    
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="calendar-event" viewBox="0 0 16 16">
        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
      </symbol>

      <symbol id="alarm" viewBox="0 0 16 16">
        <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
        <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
      </symbol>

      <symbol id="list-check" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
      </symbol>
    </svg>




    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">World Calculator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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

    <form action="risultato.php" method = "post">
      <fieldset id="domanda1">

        <!--domanda1-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quanto spesso mangi carne, pesce e altri derivati animali?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question1" id="answer1_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer1_1">
                    <strong class="fw-semibold">Mai</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question1" id="answer1_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer1_2">
                    <strong class="fw-semibold">Ogni tanto</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question1" id="answer1_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer1_3">
                    <strong class="fw-semibold">Spesso</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question1" id="answer1_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer1_4">
                    <strong class="fw-semibold">Molto Spesso</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda2">

        <!--domanda2-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quanto del cibo che mangi è fresco, non confezionato o coltivato localmente?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question2" id="answer2_1" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer2_1">
                    <strong class="fw-semibold">0%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question2" id="answer2_2" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer2_2">
                    <strong class="fw-semibold">30%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question2" id="answer2_3" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer2_3">
                    <strong class="fw-semibold">60%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question2" id="answer2_4" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer2_4">
                    <strong class="fw-semibold">100%</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda3">

        <!--domanda3-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quale tipo di abitazione è piu simile a casa tua?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question3" id="answer3_1" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer3_1">
                    <strong class="fw-semibold">Condominio</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question3" id="answer3_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer3_2">
                    <strong class="fw-semibold">Bifamiliare</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question3" id="answer3_3" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer3_3">
                    <strong class="fw-semibold">Unifamiliare</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question3" id="answer3_4" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer3_4">
                    <strong class="fw-semibold">Casa popolare</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda4">

        <!--domanda4-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Di quale materiale è fatta casa tua?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question4" id="answer4_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer4_1">
                    <strong class="fw-semibold">Paglia/bambu</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question4" id="answer4_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer4_2">
                    <strong class="fw-semibold">Matotni id terra e paglia</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question4" id="answer4_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer4_3">
                    <strong class="fw-semibold">Cemento/mattoni</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question4" id="answer4_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer4_4">
                    <strong class="fw-semibold">Acciaio</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda5">

        <!--domanda5-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quante persone vivono nella tua casa?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question5" id="answer5_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer5_1">
                    <strong class="fw-semibold">1-2</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question5" id="answer5_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer5_2">
                    <strong class="fw-semibold">3-4</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question5" id="answer5_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer5_3">
                    <strong class="fw-semibold">5-6</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question5" id="answer5_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer5_4">
                    <strong class="fw-semibold">più di 6</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda6">
        <!--domanda6-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quanto è efficiente il consumo di energia elettrica in casa tua?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question6" id="answer6_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer6_1">
                    <strong class="fw-semibold">Inferiore alla media</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question6" id="answer6_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer6_2">
                    <strong class="fw-semibold">Nella media</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question6" id="answer6_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer6_3">
                    <strong class="fw-semibold">Sopra la media</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question6" id="answer6_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer6_4">
                    <strong class="fw-semibold">Efficete</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda7">
        <!--domanda7-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">In che percentuale l'energia elettrica della tua casa deriva da fonti rinnovabili?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question7" id="answer7_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer7_1">
                    <strong class="fw-semibold">0%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question7" id="answer7_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer7_2">
                    <strong class="fw-semibold">30%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question7" id="answer7_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer7_3">
                    <strong class="fw-semibold">60%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question7" id="answer7_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer7_4">
                    <strong class="fw-semibold">100%</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda8">
        <!--domanda8-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quanti chilometri percorri ogni settimana in macchina e in moto?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question8" id="answer8_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer8_1">
                    <strong class="fw-semibold">0-120</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question8" id="answer8_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer8_2">
                    <strong class="fw-semibold">120-240</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question8" id="answer8_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer8_3">
                    <strong class="fw-semibold">240-360</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question8" id="answer8_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer8_4">
                    <strong class="fw-semibold">più di 360</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda9">
        <!--domanda9-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Qual è il consumo medio di carburante dei veicoli che usi più spesso?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question9" id="answer9_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer9_1">
                    <strong class="fw-semibold">25km/l</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question9" id="answer9_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer9_2">
                    <strong class="fw-semibold">20km/l</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question9" id="answer9_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer9_3">
                    <strong class="fw-semibold">15km/l</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question9" id="answer9_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer9_4">
                    <strong class="fw-semibold">10km/l</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda10">
        <!--domanda10-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quando viaggi in auto, quante volte viaggi con qualcun altro?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question10" id="answer10_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer10_1">
                    <strong class="fw-semibold">0%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question10" id="answer10_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer10_2">
                    <strong class="fw-semibold">30%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question10" id="answer10_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer10_3">
                    <strong class="fw-semibold">60%</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question10" id="answer10_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer10_4">
                    <strong class="fw-semibold">100</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda11">
        <!--domanda11-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quanto usi i mezzi pubblici?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question11" id="answer11_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer11_1">
                    <strong class="fw-semibold">Mai</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question11" id="answer11_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer11_2">
                    <strong class="fw-semibold">Ogni tanto</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question11" id="answer11_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer11_3">
                    <strong class="fw-semibold">Spesso</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question11" id="answer11_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer11_4">
                    <strong class="fw-semibold">Molto spesso</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <fieldset id="domanda12">
        <!--domanda12-->
        <div class="b-example-divider"></div>
          <div class="bg-body-tertiary p-5 rounded">
            <p class="lead">Quante ore viaggi in aereo ogni anno?</p>
            <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
              <div class="list-group list-group-radio d-grid gap-2 border-0">

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question12" id="answer12_1" value="0.16">
                  <label class="list-group-item py-3 pe-5" for="answer12_1">
                    <strong class="fw-semibold">0-30</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question12" id="answer12_2" value="0.33">
                  <label class="list-group-item py-3 pe-5" for="answer12_2">
                    <strong class="fw-semibold">30-60</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question12" id="answer12_3" value="0.66">
                  <label class="list-group-item py-3 pe-5" for="answer12_3">
                    <strong class="fw-semibold">60-90</strong>
                  </label>
                </div>

                <div class="position-relative">
                  <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="question12" id="answer12_4" value="0.8">
                  <label class="list-group-item py-3 pe-5" for="answer12_4">
                    <strong class="fw-semibold">più di 90</strong>
                  </label>
                </div>
              </div>
            </div>
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </fieldset>
      <div class="b-example-divider"></div>
      <div class="bg-body-tertiary p-5 rounded">
        <button class="btn btn-lg btn-primary" type="submit" id = "ButtonConferma">Conferma</button>
      </div>
    </form>
  </body>
</html>