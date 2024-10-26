<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICEIT2024-About</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/page-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>


        .content {
            font-family: Arial, sans-serif;
            line-height: 2;
            color: #333;
            margin: 30px !important;
            padding: 0;
            max-width: 1170px;
            margin: auto;
            padding: 15px;
        }


        .welcome-message {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signed {
            line-height: 1;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
            }
            .welcome-message {
            padding: 10px;
            margin: 10px 0;

        }
        .content {

            margin: 0px !important;
            padding: 0;
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
                    <div class="content">
                    <div class="header">
            A welcome message from the organizing committee of ICEIT 2024
        </div>

                        <section class="welcome-message">
                           <span style="color: red;">Updated on 10 September 2024, at 10:20 AM.</span>
                            <p>We are excited to announce the 3rd edition of the International Conference on Engineering
                                and Innovative Technology (ICEIT), organized by the College of Engineering at Salahaddin
                                University-Erbil. This prestigious event is scheduled to be held on-site on October
                                30-31, 2024, marking our return to in-person gatherings post the challenges posed by the
                                pandemic.</p>
                            <p>ICEIT has solidified its position as the premier general engineering and technology
                                conference in the Kurdistan region of Iraq. Since its inception in 2016, with the
                                participation of 156 researchers from 14 countries, the conference has played a pivotal
                                role in facilitating face-to-face meetings and networking opportunities among
                                individuals in academia and industry across diverse engineering fields.</p>
                            <p>Aside from engaging discussions and presentations, ICEIT 2024 is set to feature an
                                enlightening engineering exhibition and an interactive workshop. The conference is
                                designed to encourage collaboration and knowledge exchange, contributing to the
                                advancement of engineering and technology globally.</p>
                            <p>Erbil, with its UNESCO-protected sites, holds a unique historical significance. As
                                recognized by NASA, it stands as the oldest continually inhabited city globally, with
                                the Citadel, inhabited for over 8000 years, serving as a testament to its rich history.
                                The city draws visitors from around the world year-round, making ICEIT 2024 an
                                exceptional event worth attending.</p>
                            <p>Beyond the conference, Erbil offers a vibrant atmosphere with its bustling bazaars,
                                distinctive cuisine, and a socially friendly community, positioning it as one of the
                                most attractive destinations in the Middle East.</p>
                            <p>We invite you to submit your papers for consideration in ICEIT 2024. Share your research
                                and contribute to the academic excellence and cultural richness of this conference. We
                                look forward to extending a warm welcome to you in Erbil this October.</p>

                            <p class="signed">Yours sincerely,</p>
                            <p class="signed">Professor Ibrahim Hamarash, PhD.</p>
                            <p class="signed">Conference General Chair</p>
                            <p class="signed">ICEIT 2024 Organizing Committee</p>
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
