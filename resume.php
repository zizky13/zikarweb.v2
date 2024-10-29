<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include 'connection.php';

    $sql = "SELECT title, company, periode  FROM cv";
    $res = mysqli_query($conn, $sql);
    $title = [];
    $companies = [];
    $periode = [];

    while ($row = mysqli_fetch_array($res)) {
        $title[] = $row["title"];
        $companies[] = $row["company"];
        $periode[] = $row["periode"];
    }

    $sql = "SELECT links FROM zikarweb.socials";
    $res = mysqli_query($conn, $sql);

    $socialLinks = [];

    while ($row = mysqli_fetch_array($res)) {
        $socialLinks[] = $row["links"];
    }


    mysqli_close($conn);
    ?>


    <header class="d-flex p-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="./index.php" class="nav-link hover-zoom" aria-current="page">Home</a>
            </li>
            <li class="nav-item"><a href="./about.php" class="nav-link hover-zoom">About</a></li>
            <li class="nav-item"><a href="./portofolio.php" class="nav-link hover-zoom">Portofolio</a></li>
            <li class="nav-item"><a href="./resume.php" class="nav-link hover-zoom active">Resume</a></li>
            <li class="nav-item"><a href="./contact.php" class="nav-link hover-zoom">Contact</a></li>
        </ul>
    </header>

    <section class="resume-section" id="experience">
        <h2 class=" mx-3 my-5"><u>Experience</u></h2>
        <div class="mx-5">
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0"><?php echo $title[0] ?></h3>
                    <div class="subheading mb-3"><?php echo $companies[0] ?></div>
                    <ul>
                        <li>Assisted in teaching core web development concepts, including HTML and CSS.</li>
                        <li>Guided students in learning responsive design with Bootstrap 5.</li>
                        <li>Supported students in understanding basic PHP and MySQL for backend development.</li>
                        <li>Collaborated with the lead lecturer to monitor student progress and provide extra help
                            during lab sessions.</li>
                    </ul>
                </div>
                <div class="flex-shrink-0"><span class="text-primary"><?php echo $periode[0] ?></span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0"><?php echo $title[1] ?></h3>
                    <div class="subheading mb-3"><?php echo $companies[1] ?></div>
                    <ul>
                        <li>Managing Member Hub, ensuring proper curriculum is used and managing student activity</li>
                        <li>Teach and demonstrate java fundamentals, basic syntax, and OOP concepts using Alice3,
                            Greenfoot, IntelliJ IDEA</li>
                    </ul>
                </div>
                <div class="flex-shrink-0"><span class="text-primary"><?php echo $periode[1] ?></span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0"><?php echo $title[2] ?></h3>
                    <div class="subheading mb-3"><?php echo $companies[2] ?></div>
                    <p>My role as Student Ambassador involves introducing campus to highschool students around
                        Jabodetabek</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary"><?php echo $periode[2] ?></span></div>
            </div>
    </section>

    <section class="resume-section" id="experience">
        <h2 class=" mx-3 my-5"><u>Achievements</u></h2>
        <div class="mx-5">
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0"><?php echo $title[4] ?></h3>
                    <div class="subheading mb-3"><?php echo $companies[4] ?></div>
                    <ul>
                        <li>Collaborated with ASEAN peers to assemble ideas on preserving heritage culture using
                            metaverse technology.</li>
                        <li>Secured 6th position out of 45 competing teams.</li>
                        <li>Granted partial funding on cultural exploration in Busan, South Korea.</li>
                    </ul>
                </div>
                <div class="flex-shrink-0"><span class="text-primary"><?php echo $periode[4] ?></span></div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0"><?php echo $title[3] ?></h3>
                    <div class="subheading mb-3"><?php echo $companies[3] ?></div>
                    <ul>
                        <li>Selected as 1 of 8 delegates, among 1000+ applicants from Indonesia to compete in an
                            ASEAN-level tech ideation competition by Huawei and ASEAN Foundation.</li>
                        <li>Worked alongside peers from various countries, devising technological solutions to address
                            social issues within South East Asia.</li>
                    </ul>

                </div>
                <div class="flex-shrink-0"><span class="text-primary"><?php echo $periode[3] ?></span></div>
            </div>


    </section>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Zikar Nurizky</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href=<?php echo $socialLinks[0] ?>>
                        <svg width="24" height="24" viewBox="0 0 128 128">
                            <g fill="#181616">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M64 5.103c-33.347 0-60.388 27.035-60.388 60.388 0 26.682 17.303 49.317 41.297 57.303 3.017.56 4.125-1.31 4.125-2.905 0-1.44-.056-6.197-.082-11.243-16.8 3.653-20.345-7.125-20.345-7.125-2.747-6.98-6.705-8.836-6.705-8.836-5.48-3.748.413-3.67.413-3.67 6.063.425 9.257 6.223 9.257 6.223 5.386 9.23 14.127 6.562 17.573 5.02.542-3.903 2.107-6.568 3.834-8.076-13.413-1.525-27.514-6.704-27.514-29.843 0-6.593 2.36-11.98 6.223-16.21-.628-1.52-2.695-7.662.584-15.98 0 0 5.07-1.623 16.61 6.19C53.7 35 58.867 34.327 64 34.304c5.13.023 10.3.694 15.127 2.033 11.526-7.813 16.59-6.19 16.59-6.19 3.287 8.317 1.22 14.46.593 15.98 3.872 4.23 6.215 9.617 6.215 16.21 0 23.194-14.127 28.3-27.574 29.796 2.167 1.874 4.097 5.55 4.097 11.183 0 8.08-.07 14.583-.07 16.572 0 1.607 1.088 3.49 4.148 2.897 23.98-7.994 41.263-30.622 41.263-57.294C124.388 32.14 97.35 5.104 64 5.104z">
                                </path>
                                <path
                                    d="M26.484 91.806c-.133.3-.605.39-1.035.185-.44-.196-.685-.605-.543-.906.13-.31.603-.395 1.04-.188.44.197.69.61.537.91zm2.446 2.729c-.287.267-.85.143-1.232-.28-.396-.42-.47-.983-.177-1.254.298-.266.844-.14 1.24.28.394.426.472.984.17 1.255zM31.312 98.012c-.37.258-.976.017-1.35-.52-.37-.538-.37-1.183.01-1.44.373-.258.97-.025 1.35.507.368.545.368 1.19-.01 1.452zm3.261 3.361c-.33.365-1.036.267-1.552-.23-.527-.487-.674-1.18-.343-1.544.336-.366 1.045-.264 1.564.23.527.486.686 1.18.333 1.543zm4.5 1.951c-.147.473-.825.688-1.51.486-.683-.207-1.13-.76-.99-1.238.14-.477.823-.7 1.512-.485.683.206 1.13.756.988 1.237zm4.943.361c.017.498-.563.91-1.28.92-.723.017-1.308-.387-1.315-.877 0-.503.568-.91 1.29-.924.717-.013 1.306.387 1.306.88zm4.598-.782c.086.485-.413.984-1.126 1.117-.7.13-1.35-.172-1.44-.653-.086-.498.422-.997 1.122-1.126.714-.123 1.354.17 1.444.663zm0 0">
                                </path>
                            </g>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="text-body-secondary" href="<?php echo $socialLinks[1] ?>">
                        <svg width="24" height="24" viewBox="0 0 128 128">
                            <path
                                d="M116 3H12a8.91 8.91 0 00-9 8.8v104.42a8.91 8.91 0 009 8.78h104a8.93 8.93 0 009-8.81V11.77A8.93 8.93 0 00116 3zM39.17 107H21.06V48.73h18.11zm-9-66.21a10.5 10.5 0 1110.49-10.5 10.5 10.5 0 01-10.54 10.48zM107 107H88.89V78.65c0-6.75-.12-15.44-9.41-15.44s-10.87 7.36-10.87 15V107H50.53V48.73h17.36v8h.24c2.42-4.58 8.32-9.41 17.13-9.41C103.6 47.28 107 59.35 107 75z">
                            </path>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0L49/8smf5f5eFv5f5f5f5f5"
        crossorigin="anonymous"></script>
    <script>
        let lastScrollTop = 0;
        const header = document.querySelector('header');

        window.addEventListener('scroll', function () {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                // Scroll down
                header.style.top = '-100px'; // Adjust this value based on your header height
            } else {
                // Scroll up
                header.style.top = '0';
            }

            lastScrollTop = scrollTop;
        });
    </script>
</body>

</html>