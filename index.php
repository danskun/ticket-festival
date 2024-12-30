<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concerto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .fade-in{
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .seat-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 120vh;
            background-color: white;
            padding: 20px;
            font-family: Helvetica;
        }
        .seat-card {
            display: flex;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 200px;
            width: 100%;
            padding: 40px; 
        }
    </style>

<style>
        body {
            background-color: white;
            color:rgb(0, 0, 0);
        }
        .stage {
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            color: #f7fd01;
            margin-bottom: 20px;
        }
        .seating-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }
        .section {
            border: 2px solidrgb(0, 0, 0);
            border-radius: 10px;
            padding: 20px;
            margin: 5px;
            text-align: center;
        }
        .bronze {
            background-color: #d3d3d3;
        }
        .gold {
            background-color: #bebebe;
        }
        .platinum {
            background-color:rgb(65, 65, 65);            ;
        }
        .vip {
            background-color:rgb(47, 47, 47);
            color: white;
        }
    </style>

    <style>
        .footer {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        position: relative;
        bottom: 0;
        width: 100%;
    }
    </style>
<style>
  .section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 15px;
    margin: 10px;
    font-size: 18px;
    border: 2px solid #ddd;
    border-radius: 8px;
    cursor: pointer;
  }

  .section:hover {
    background-color: #f0f0f0;
  }

  .section span.title {
    font-weight: bold;
    font-size: 20px;
    color:rgb(255, 255, 255);
  }

  .section span.price {
    font-size: 18px;
    color: #f7fd01;
  }
</style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: white; justify-content: center; position: sticky; top: 0; z-index: 1000; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/concerto.png" width="100" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="gap: 15px;">
                    <li class="nav-item">
                    <a class="nav-link" href="#line-up" style="color: black; font-family: Helvetica;">Line Up</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partner" style="color: black; font-family: Helvetica;">Partner</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="#form" class="btn" style="background-color: #f7fd01; color: black; font-family: Helvetica; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Rock Now!</a>
                </form>

            </div>
        </div>
    </nav>
    <!-- <div class="container"> -->
    <img src="images/banner-konser.png" alt="Concerto Banner" class="img-fluid fade-in">
    <!-- </div> -->
        
    <section id="form">
    <div class="seat-container fade-in">
        <div class="container text-center">
            <h1 class="text">Seating Plan</h1>
            <div class="row justify-content-center">
                <button class="col-md-2 section bronze" onclick="handleClick('Bronze')">
                    <span class="title">Bronze</span><br>
                    <span class="price">150k</span>
                </button>
                <button class="col-md-2 section platinum" onclick="handleClick('Platinum')">
                    <span class="title">Platinum</span><br>
                    <span class="price">200k</span>
                </button>
                <button class="col-md-2 section gold" onclick="handleClick('Gold')">
                    <span class="title">Gold</span><br>
                    <span class="price">275k</span>
                </button>
                <button class="col-md-2 section vip" onclick="handleClick('VIP')">
                    <span class="title">VIP</span><br>
                    <span class="price">325k</span>
                </button>
            </div>

            <div class="seating-layout fade-in">
                <img src="images/stage-bck.png" alt="stage" class="stage" style="height: 400px;" />
            </div>

        </div>
    </div>
</section>


<script>
    function handleClick(section) {
        alert(`You selected: ${section}`);
    }
</script>

<section class="line py-5 bg-dark text-white fade-in">
        <div class="container-md">
            <h2 id="line-up" class="text-center mb-5 style=font-family: Helvetica;">Line Up</h2>
            <div class="row g-4 fade-in">
                <!-- Service 1 -->
                <div class="col-md-4">
                        <img src="images/jkt-imgbnw.png" class="card-img-top fade-in" alt="Construction Management">
                        <div class="card-body">
                            <div class="card h-100 border-0 text-center d-flex align-items-center justify-content-center bg-dark text-white">
                                <h5 class="card-title display-4">JKT 48</h5>
                        </div>
                        </div>
                    
                </div>
                <!-- Service 2 -->
                <div class="col-md-4">
                    
                        <img src="images/bernadya-imgbnw.png" class="card-img-top fade-in" alt="Design Build">
                        <div class="card-body">
                            <div class="card h-100 border-0 text-center d-flex align-items-center justify-content-center bg-dark text-white">
                                <h5 class="card-title display-4">Bernadya</h5>
                        </div>
                        </div>
                    
                </div>
                <!-- Service 3 -->
                <div class="col-md-4">
                        <img src="images/juicy-imgbnw.png" class="card-img-top fade-in" alt="General Construction">
                        <div class="card-body">
                            <div class="card h-100 border-0 text-center d-flex align-items-center justify-content-center bg-dark text-white">
                                <h5 class="card-title display-4">Juicy Luicy</h5>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
    <div id="partner" class="container-xl">
    <div class="container text-center py-5 fade-in">
        <h1 class=".partner mb-4">Partner</h1>
        <div class="row g-4 justify-content-center align-items-center">
            <?php
            $clients = [
                "indihome.png",
                "pgn-logo.png",
                "patra-jasa.png",
                "hutama-karya.png",
                "logo-bri.png",
                "apakabar-fest.png",
            ];

            foreach ($clients as $client) {
                echo '
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <img src="images/' . $client . '" alt="Client Logo" class="client-logo img-fluid">
                </div>';
            }
            ?>
        </div>
    </div>
</div>


<footer class="footer bg-dark text-center text-white">
    <div class="container py-3">
        <small>Copyright © 2024 Juliandra. All Rights Reserved.</small>
    </div>
</footer>

    <script src="js/bootstrap.min.js"></script>

    <script>
    const fadeInElements = document.querySelectorAll('.fade-in');

    const observerOptions = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    fadeInElements.forEach(element => {
        observer.observe(element);
    });
</script>
</body>
</html>
