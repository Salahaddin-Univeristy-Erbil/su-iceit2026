<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICEIT2024</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="css\countdown.css">
    <link rel="stylesheet" href="css\cards.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>

    <header class="row header ">
        <video src="./img/erbil.mp4" class="" autoplay muted loop width="100%" height="100%"></video>
        <div class="header-overlay">
            <h1>
                2024 Conference <br />
                Engineering College <br />
                Salahaddin University<br />
                Erbil, Iraq <br />
            </h1>
        </div>
    </header>

    <article class="row content">
        <section>
            <div class="wrapper">
                <div id="countdown">
                    <div class="cd-box timeRefDays">
                        <p class="numbers days">00</p>
                        <p class="strings">Days</p>
                    </div>
                    <div class="cd-box timeRefHours">
                        <p class="numbers hours">00</p>
                        <p class="strings">Hours</p>
                    </div>
                    <div class="cd-box timeRefMinutes">
                        <p class="numbers minutes">00</p>
                        <p class="strings">Minutes</p>
                    </div>
                    <div class="cd-box timeRefSeconds">
                        <p class="numbers seconds">00</p>
                        <p class="strings">Seconds</p>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <article class="row content">

        <h2> &nbsp; </h2>
    </article>

    <article class="row content">


        <div class="card-container">
            <?php
            $cards = [
                [
                    'title' => 'Call for Papers',
                    'content' => 'Request from a professional journal, conference to submit your research',
                    'img' => 'img/Call-for-Paper.png',
                    'link' => 'call.php',
                ],
                [
                    'title' => 'Paper Submission',
                    'content' => 'Submissions are open closing date:6 December, 2023',
                    'img' => 'img/Paper-Submission.png',
                    'link' => 'submission.php',
                ],
                [
                    'title' => 'Registration',
                    'content' => 'Information about the registration will be published at a later date',
                    'img' => 'img/Registration.png',
                    'link' => 'registration.php',
                ],
                [
                    'title' => 'About',
                    'content' => ' About International Conference of Engineering and Innovative Technology',
                    'img' => 'img/About.png',
                    'link' => 'about.php',
                ],
                [
                    'title' => 'Plenary Speakers',
                    'content' => 'Keynote Speakers and Scientific Sessions',
                    'img' => 'img/Plenary-Speakers.png',
                    'link' => 'speakers.php',
                ],
                [
                    'title' => 'Organization Committees',
                    'content' => 'Organizing Committee',
                    'img' => 'img/Organization-Committees.png',
                    'link' => 'committee.php',
                ],
            ];

            foreach ($cards as $card):
                ?>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?php echo htmlspecialchars($card['img']); ?>" alt="Card Image" width="100%" />
                    </div>
                    <div class="card-body">
                        <div class="card-title"><?php echo htmlspecialchars($card['title']); ?></div>
                        <div class="card-content">
                            <?php echo htmlspecialchars($card['content']); ?>
                        </div>
                        <a href="<?php echo htmlspecialchars($card['link']); ?>" class="card-detail-link">
                            <div class="card-detail">More Details</div>
                            <div class="circle">&gt;</div>
                        </a>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
        


    </article>


    <article class="row content" style="margin: 0px; padding: 0px;">

        <div class="container">
            <div class="first-column">
                <h1>Conference 2024 Calls</h1>

                <h2>Call For Papers</h2>
                <p>Papers for IEEE WCCI 2024 should be submitted electronically through the Congress submission portal,
                    and will
                    be refereed by experts in the fields and ranked based on the criteria of originality, significance,
                    quality
                    and clarity.</p>

                <h2>Call For Tutorials</h2>
                <p>IEEE WCCI 2024 will feature pre-Congress tutorials, covering fundamental and advanced topics in
                    computational
                    intelligence. A tutorial proposal should include title, outline, expected enrollment, and
                    presenter/organizer
                    biography. Inquiries regarding tutorials should be addressed to Tutorials Chairs.</p>


                <h2>Call For Special Session Proposals </h2>
                <p>IEEE WCCI 2024 solicits proposals for special sessions within the technical scope of the three
                    conferences.
                    Special sessions, to be organized by internationally recognized experts, aim to bring together
                    researchers in
                    special focused topics. Cross-fertilization of the three technical disciplines and newly emerging
                    research
                    areas are strongly encouraged. Inquiries regarding special sessions and proposals should be
                    addressed to
                    Special Sessions Chairs.</p>

                <h2>Call For Competition Proposals</h2>
                <p>IEEE WCCI 2024 will host competitions to stimulate research in computational intelligence. A
                    competition
                    proposal should include descriptions of the problem(s) addressed, evaluation procedures, and a
                    biography of
                    the organizers. Inquiries regarding competitions should be addressed to the Competitions Chair.</p>


                <a href="submission-portal.php" class="button-link">Submission Portal</a>


            </div>
            <div class="second-column">
                <img src="img/call-for-paper-page.png" alt="call-for-paper-page" width="100%" class="rounded-image">
            </div>
        </div>



    </article>

    <article class="row content" style="margin: 0px; padding: 0px;">
        <?php
        // Define an array of important dates and their descriptions
        $importantDates = [
            [
                'date' => '2024-08-01',
                'description' => 'Call for',
            ],
            [
                'date' => '2024-09-01',
                'description' => 'Call for',
            ],
            [
                'date' => '2024-09-01',
                'description' => 'Call for',
            ],
            [
                'date' => '2024-09-15',
                'description' => 'Call for',
            ],
            [
                'date' => '2024-09-15',
                'description' => 'Call for',
            ],
            [
                'date' => '2024-10-01',
                'description' => 'Call for',
            ],
        ];
        ?>

        <div class="timeline-main">
            <h1 id="important-dates">Important Dates</h1>
            <div class="timeline">
                <?php foreach ($importantDates as $date): ?>
                <div class="container-timeline">
                    <div class="content">
                        <h2><?php echo htmlspecialchars($date['date']); ?></h2>
                        <p><?php echo htmlspecialchars($date['description']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </article>


    <article class="row content">
        <?php
        $sponsors = [
            [
                'href' => 'https://gov.krd',
                'target' => 'krg',
                'img_src' => 'img/krg-logo.png',
                'alt' => 'KRG Logo',
            ],
            [
                'href' => 'https://www.sue.edu.krd/',
                'target' => 'sue',
                'img_src' => 'img/sue-logo.png',
                'alt' => 'SUE Logo',
            ],
            [
                'href' => 'https://gov.krd/mohe-en/',
                'target' => 'mohe',
                'img_src' => 'img/mohe.png',
                'alt' => 'MOHE Logo',
            ],
        ];
        ?>

        <div id="sponsors">
            <h1 id="sponsors-title">Sponsors</h1>
            <div class="sponsor-container">
                <?php foreach ($sponsors as $sponsor): ?>
                <li class="sponsor-item">
                    <a href="<?php echo htmlspecialchars($sponsor['href']); ?>" target="<?php echo htmlspecialchars($sponsor['target']); ?>" style="text-decoration: none;">
                        <div class="sponsored-logo">
                            <img src="<?php echo htmlspecialchars($sponsor['img_src']); ?>" alt="<?php echo htmlspecialchars($sponsor['alt']); ?>">
                        </div>
                    </a>
                </li>
                <?php endforeach; ?>
            </div>
        </div>

    </article>

    <?php include 'components/footer.php'; ?>
    <script src="js/countdown.js"></script>

</body>

</html>
