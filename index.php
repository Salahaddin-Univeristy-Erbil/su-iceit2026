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
    <header class="row header">
        <div class="logo-overlay">ICEIT2024</div>
        <img src="./img/erbil-1280.jpg" class="header-image"></img>
        <div class="header-overlay">
            <h1>
                <div id="conferenceInfo">
                    <div id="mainText" class="typing">&nbsp;</div>
                    <p id="dateText" class="date typing">&nbsp;</p>
                    <div id="locationText" class="typing">&nbsp;</div>
                </div>
            </h1>
        </div>
        <a class="overlay-button" href="#countdown">
            <span class="arrow">&#x25BC;</span>
        </a>
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
                    'title' => 'About ICEIT2024 ',
                    'img' => 'img/about.png',
                    'link' => 'about.php',
                ],
                [
                    'title' => 'Organizing Committee',
                    'img' => 'img/Organization-Committees.png',
                    'link' => 'committee.php',
                ],               
                [
                    'title' => 'Call for Papers',
                    'img' => 'img/Call-for-Paper.png',
                    'link' => 'call.php',
                ],
                [
                    'title' => 'Information for Authors',
                    'img' => 'img/authors.png',
                    'link' => 'authors.php',
                ],
                [
                    'title' => 'Plenary Speakers',
                    'img' => 'img/Plenary-Speakers.png',
                    'link' => 'speakers.php',
                ],
                [
                    'title' => 'Paper Submission',
                    'img' => 'img/Paper-Submission.png',
                    'link' => 'submission.php',
                ],
                [
                    'title' => 'Registration',
                    'img' => 'img/Registration.png',
                    'link' => 'registration.php',
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
                'date' => '15 July 2024',
                'description' => 'Submission Deadline',
            ],
            [
                'date' => '30 April 2024',
                'description' => 'Notification of Acceptance Starts',
            ],
            [
                'date' => '31 July 2024',
                'description' => 'Notification of Acceptance Ends',
            ],
            [
                'date' => '1 July 2024',
                'description' => 'Registration Opens',
            ],
            [
                'date' => '31 August 2024',
                'description' => 'Registration Deadline',
            ],
            [
                'date' => '7 September 2024',
                'description' => 'Program Announcement',
            ],
            [
                'date' => '18-19 September 2024',
                'description' => 'Conference Time',
            ],
            [
                'date' => '15 October 2024',
                'description' => 'Publication of Proceedings',
            ],
        ];
        
        ?>

        <div class="timeline-main">
            <h1 id="important-dates"><span class="highlight">Important Dates</span></h1>
            <div class="timeline">
                <?php foreach ($importantDates as $date): ?>
                <div class="container-timeline">
                    <div class="content">
                        <h2><span class="highlight"><span class="only-date"><?php echo htmlspecialchars($date['date']); ?></span>
                               &nbsp; 
                                <?php echo htmlspecialchars($date['description']); ?></span></h2>
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
                'href' => 'https://gov.krd/mohe-en/',
                'target' => 'mohe',
                'img_src' => 'img/mohe.png',
                'alt' => 'MOHE Logo',
            ],
            [
                'href' => 'https://www.sue.edu.krd/',
                'target' => 'sue',
                'img_src' => 'img/sue-logo.png',
                'alt' => 'SUE Logo',
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

    <article class="row content">
        <?php
        $sponsors = [
            [
                'href' => 'https://www.concrete.org/',
                'target' => 'aci',
                'img_src' => 'img/aci.png',
                'alt' => 'ACI',
            ],

        ];
        ?>

        <div id="technical-sponsors" style="border-top: 2px solid white;">
            <h1 id="sponsors-title">Technical Sponsors</h1>
            <div class="technical-sponsor-container">
                <?php foreach ($sponsors as $sponsor): ?>
                <li >
                    <a href="<?php echo htmlspecialchars($sponsor['href']); ?>" target="<?php echo htmlspecialchars($sponsor['target']); ?>" style="text-decoration: none;">
                        <div class="technical-sponsored-logo">
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
    <script>
        const mainText = `The 3rd International Conference on Engineering and Innovative Technology (ICEIT 2024)`;
        const dateText = `September 18-19, 2024`;
        const locationText = `Erbil, Kurdistan, Iraq`;

        function typeWriter(text, elementId, callback) {
            let index = 0;

            function addCharacter() {
                if (index < text.length) {
                    document.getElementById(elementId).innerHTML += text.charAt(index);
                    index++;
                    setTimeout(addCharacter, 50); // Adjust typing speed here
                } else if (callback) {
                    callback();
                }
            }
            addCharacter();
        }

        typeWriter(mainText, 'mainText', () => {
            typeWriter(dateText, 'dateText', () => {
                typeWriter(locationText, 'locationText', null);
            });
        });
    </script>
</body>

</html>
