<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Davis&Shirtlift
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
        <style>
            nav img{height:30px;width:40px}
        </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/ds.png" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="table.php">Tabular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="graph.php">Graphical</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="raw_cumulative.php">Raw cumulative</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="grouped_cumulative.php">Grouped cumulative</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
    <header class="page-header gradient" >
        <div class="container pt-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    <h2>Single page webapp</h2>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="img/email_campaign_monochromatic.svg" alt="Header image" />
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
            <path fill="#fff" fill-opacity="1"
                d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </header>

    <section class="icons">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-4">
            <div class="icon gradient mb-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-layers"
              >
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
              </svg>
            </div>
            <h3>Water Pumps</h3>
            <p>
            Dayliff Pedrollo Grundfos Davey DAB Rovatti Pompe
            </p>
          </div>
          <div class="col-md-4">
            <div class=" icon gradient mb-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-smartphone"
              >
                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                <line x1="12" y1="18" x2="12.01" y2="18"></line>
              </svg>
            </div>
            <h3>Borehole Pumps</h3>
            <p class="mb-0">
            Dayliff Pedrollo Grundfos Rovatti Pompe
            </p>
          </div>
          <div class="col-md-4">
            <div class="icon gradient mb-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-code"
              >
                <polyline points="16 18 22 12 16 6"></polyline>
                <polyline points="8 6 2 12 8 18"></polyline>
              </svg>
            </div>
            <h3>Solar Solutions</h3>
            <p class="mb-0">
            Solar Panels & Support Structures Solar Water Heaters Inverters / Backup Systems Solar Pumps and Controls Accessories.
            </p>
          </div>
        </div>
      </div>
    </section>

    <footer class="gradient m-5">
        <div class="container-fluid text-center">
            <span>Made with <i class='far fa-grin'></i> by Stanley</span>
        </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>