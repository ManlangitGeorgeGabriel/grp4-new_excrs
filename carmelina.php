<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="carmelina.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Team Profile | Group 4</title>
    </head>

    <body>

        <header class="header">
            <a href="#home" class="logo">Cromwell<span>Carmelina</span></a>

            <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">

            <?php

                $Home="Home";

                ?>

                <?php

                $About="About";

                ?>

                <?php

                $Groupmates="Groupmates";

                ?>

                <?php

                echo "<a href='index1.php' class='active'>$Home</a>"
                
                ?>

                <?php

                echo "<a href='#about'>$About</a>"

                ?>

                <?php

                echo "<a href='groupmate1.html'>$Groupmates</a>"

                ?>

            </nav>
        </header>

        <section class="home" id="home">
            <div class="home-content">

                <h1>Hi, It's <span>Cromwell</span></h1>
                <h3 class="text-animation">I'm a <span></span></h3>
                <p>Skilled UI/UX designer with a knack for blending aesthetics and functionality. |
                    His design approach is driven by user research and interative testing, ensring intuative |
                    and engaging interfaces. Darwin's collaborative nature and industry experience allow him to |
                    align design strategies with project goals effectively, making him a valuable asset in |
                    delivering impactful user experiences</p>
                
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn">Hire</a>
                    <a href="#contact" class="btn">Contact</a>
                </div>
            </div>
                <div class="home-img">
                    <img src="cwell.png" alt="">
                </div>

        </section>

        <section class="about" id="about">

            <div class="about-img">
                <img src="cwell.png">
            </div>
    
            <div class="about-content">
                <h2>About <span>Me</span></h2>
                <p>I'm IT Student 3rd Year Section M From Pamantasan ng Lungsod ng Muntinlupa(Plmun).</p>
                <div class="btns" id="home">
                    <a href="#header"><button>Read More</button></a>
                </div>

        </section>

        <script src="cromwell.js"></script>
    </body>
</html>