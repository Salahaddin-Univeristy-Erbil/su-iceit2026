<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICEIT2024-Registration</title>

    <link rel="stylesheet" href="css/page-style.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        h1 {
            color: #742d2c;
            text-align: center;
        }

        h2 {
            color: #742d2c;
        }

        .newsletter,
        .conference-registration {
            background-color: #fff;
            line-height: 1.7;
            font-size: 1.3rem;
            margin: 20px ;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .newsletter p,
        .conference-registration p{
            font-size: 1.3rem;

        }

        .btn {
            display: inline-block; 
            width: 100%;
            max-width: 200px;
            padding: 10px;
            margin-top: 10px;
            background-color: #742d2c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #742d2c;
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

        .register-soon {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
            color: #d9534f;
        }
        .form{
            width: 100%;
            text-align: center;
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
            }
            .newsletter,
        .conference-registration {
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
    <div class="container">

        <div class="row">

            <div class="main-container">

                <?php include 'components/page-card.php'; ?>
                <div id="main" class="main-column">
                    <div class="header">
                        Registration
                    </div>
                    <div class="content">
                        <!-- Newsletter Subscription Section -->
                        <section class="newsletter">
                            <h2>Newsletter Subscription</h2>
                            <p>Sign up now to receive our newsletter and stay updated on the latest news and
                                announcements.</p>
                            <div class="form"><button class="btn">Subscribe</button></div>
                        </section>

                        <!-- Conference Registration Section -->
                        <section class="conference-registration">
                            <h2>Conference Registration</h2>
                            <p>ICEIT 2024 aims to cultivate a vibrant academic and social environment for our attendees.
                                The conference encompasses research presentation sessions, an Artificial Intelligence
                                workshop, an Engineering exhibition, Kurdish tea breaks, Kurdish cuisine, and a gala
                                dinner featuring Kurdish music. We strive to keep the subscription fee as low as
                                possible, thanks to the support of the President of Salahaddin University-Erbil, the
                                Dean of the College of Engineering, and our sponsors.</p>
                            <p>Regarding the publication of research papers, the publication committee is currently in
                                discussions with prominent publishers such as Springer, AIJR, IoP, and The Web of
                                Conferences. Each engineering sector will be published with the most relevant
                                proceedings publisher.</p>
                            <p>The registration fees cover attendance at all sessions, the workshop, and the engineering
                                exhibition, as well as all tea breaks and meals, the gala dinner, and the publication of
                                papers in the conference proceedings by a prestigious international publisher. The fees
                                are as follows:</p>

                            <ul>
                                <li>Regular paper: 100,000 IQD (70 US$)</li>
                                <li>Student paper: 50,000 IQD (35 US$)</li>
                                <li>Participants without a paper: 25,000 IQD (17.5 US$)</li>
                            </ul>
                            <p class="register-soon">Register: Coming soon</p>
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
