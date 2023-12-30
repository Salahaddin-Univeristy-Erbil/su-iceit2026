<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICEIT2024-Call for Papers</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/page-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        h1,
        h2 {
            color: #742d2c;
        }

        .topics,
        .submission-guidelines {
            background-color: #fff;
            line-height: 1.5;
            font-size: 1.3rem;
            padding: 20px;
            margin: 20px ;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background-color: #e7e7e7;
            margin-bottom: 5px;
            padding: 10px;
            border-radius: 3px;
        }

        ul li a {
            color: #0275d8;
            text-decoration: none;
        }

        ul li a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width: 800px) {
            .container {
                width: 100%;
            }
            .topics,
        .submission-guidelines {
            line-height: 1.5;
            font-size: 1.3rem;
            margin: 10px ;
            padding: 10px;
        }
        }
    </style>

</head>

<body>
    <?php include 'components/page-header.php'; ?>
    <?php include 'components/page-card.php'; ?>

    <div class="container">
        <div class="row">

            <div class="main-container">
                <div id="main" class="main-column">
                    <div class="header">
                        Call for paper
                    </div>
                    <div class="content">



                        <section class="topics">
                            <h2>Conference Topics</h2>
                            <p>ICEIT 2024, organized by the College of Engineering at Salahaddin University-Erbil,
                                stands as the flagship conference for engineering and technology in the Kurdistan region
                                of Iraq, held biennially. Covering a broad spectrum, the conference addresses topics
                                across various engineering and science disciplines, including but not limited to</p>
                            <ul>
                                <li>Design and Architecture Engineering</li>
                                <li>Civil and Building Materials Engineering</li>
                                <li>Transportation Engineering</li>
                                <li>Geotechnical and Survey Engineering</li>
                                <li>Electrical and Computer Engineering</li>
                                <li>Power and Renewable Energy Systems Engineering</li>
                                <li>Automation, Control, Robotics and Industrial Engineering</li>
                                <li>Electronics, Communication Engineering</li>
                                <li>Photonics and Optoelectronics Engineering</li>
                                <li>Aerospace Engineering</li>
                                <li>Biomedical Engineering</li>
                                <li>Software Engineering and Artificial Intelligence</li>
                                <li>Water Resources and Environmental Engineering</li>
                                <li>Sustainability Engineering</li>
                                <li>Petrolium and Petrochemical Engineering</li>
                                <li>Chemical Engineering</li>
                                <li>Mechanical and Automotive Engineering</li>
                                <li>Material Science and Engineering</li>
                                <li>Data Science and Engineering</li>
                                <li>Engineering Management</li>
                                <li>Risk and Reliability Engineering</li>
                                <li>Information Technology and Computer Science</li>
                                <li>Humanitarian Engineering</li>
                            </ul>

                        </section>

                        <section class="submission-guidelines">
                            <h2>Paper Submission Guidelines</h2>
                            <p>Papers must be from 4-8 pages inclusive, and must adhere to the provided templates.</p>
                            <ul>
                                <li><a href="#">MS-Word template</a></li>
                                <li><a href="#">Latex Template</a></li>
                            </ul>
                        </section>



                    </div>

                </div>
            </div>

            <div class="row">

                <?php include 'components/footer.php'; ?>

            </div>
        </div>
</body>

</html>
