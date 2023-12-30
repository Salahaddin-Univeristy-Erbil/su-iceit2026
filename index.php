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
                    'img' => 'img/about.png',
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
                <h2>Information for Authors</h2>
                <p>The ICEIT conference, slated for 2024, stands as the premier event for engineering and technology in
                    the Kurdistan region of Iraq. Hosted and organized biennially by the College of Engineering at
                    Salahaddin University-Erbil, the conference has gained prominence through the publication of papers
                    from ICEIT2019 and ICEIT2026 in the Zanco journal for pure and applied Science @SUE. However, for
                    ICEIT2024, the publication committee is currently engaged in discussions with esteemed publishers,
                    including Springer, AIJR, IoP, and The Web of Conferences. Each engineering sector's proceedings
                    will find a suitable publisher. </p>
                <br>
                    <h2>Conference Overview</h2>
                    <div class="conference-overview">

                    <ul>
                        <li><strong>Name:</strong> International Conference on Engineering and Technology (ICEIT)</li>
                        <li><strong>Year:</strong> 2024</li>
                        <li><strong>Hosted By:</strong> College of Engineering at Salahaddin University-Erbil</li>
                        <li><strong>Location:</strong> Erbil, Kurdistan Region of Iraq</li>
                        <li><strong>Proceeding Publishers:</strong> Springer, AIJR, IoP, The Web of Conferences</li>
                    </ul>
                </div>

                <h2>Terms and Conditions</h2>
                <div class="conference-overview">
                    <ul>
                        <li><strong>Language:</strong> English</li>
                        <li><strong>Article Length:</strong> 4-8 pages inclusive</li>
                        <li><strong>Number of Papers:</strong> Each author can present a maximum of two papers.
                            Additional papers require registration of accompanying co-author(s).</li>
                        <li><strong>Registration:</strong> Authors must register for the conference and present their
                            work.</li>
                        <li><strong>No Show Policy:</strong> Papers will be published only if at least one author is
                            registered and the paper is presented. Non-presented papers may be excluded from online
                            distribution post-conference.</li>
                        <li><strong>Authorization to Publish:</strong> Authors must ensure that their material is
                            available for general dissemination. Signed ICEIT2024 Copyright Forms are required for all
                            accepted papers.</li>
                    </ul>
                </div>


                <br>
                <a href="submission-portal.php" class="button-link">Submission Portal</a>


            </div>

            <div class="second-column"><!--
                <img src="img/call-for-paper-page.png" alt="call-for-paper-page" width="100%" class="rounded-image">
             -->
            </div>

        </div>



    </article>

    <article class="row content" style="margin: 0px; padding: 0px;">
        <?php
        // Define an array of important dates and their descriptions
        $importantDates = [
            [
                'date' => '1 January 2024',
                'description' => 'Call for Papers Announcement',
            ],
            [
                'date' => '1 March 2024',
                'description' => 'Paper Submission Period Opens',
            ],
            [
                'date' => '31 July 2024',
                'description' => 'Submission Deadline',
            ],
            [
                'date' => '30 April 2024',
                'description' => 'Notification of Acceptance Starts',
            ],
            [
                'date' => '15 July 2024',
                'description' => 'Notification of Acceptance Ends',
            ],
            [
                'date' => '1 July 2024',
                'description' => 'Regular Registration Period Starts',
            ],
            [
                'date' => '31 August 2024',
                'description' => 'Regular Registration Period Ends and Registration Deadline',
            ],
            [
                'date' => '1 July 2024',
                'description' => 'Registration Opens',
            ],
            [
                'date' => '7 September 2024',
                'description' => 'Program Announcement',
            ],
            [
                'date' => '18 September 2024',
                'description' => 'Conference Starts',
            ],
            [
                'date' => '19 September 2024',
                'description' => 'Conference Ends',
            ],
            [
                'date' => 'TBA',
                'description' => 'Publication of Proceedings',
            ],
            [
                'date' => '24 September 2024',
                'description' => 'Post-Conference Materials Available Online',
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
