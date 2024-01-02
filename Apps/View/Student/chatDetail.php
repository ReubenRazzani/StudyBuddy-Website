<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../Public/css/chatDetail.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300&display=swap" rel="stylesheet">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <div class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="header-content">
                    <div class="navbar-username">
                        <a href="#">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADyElEQVR4nO2Zy2/NQRTHP63r0fYS1Zag9iRsUPUXEGltRMTGo94bVlJthW7QLSmxIRqNFUL4A5Au61lqofUWFO2CSlXSXJnk3ORkMv3dmd/99SG53+QkzZ05Z86Z33nNKRRQQAFJoBhYD7QAN4EXwBDwV2hIfrsBNAO1wjPlqAbagE9AJpA+AmeApVOheAVwERiNobhNf4ALwILJUn478MOhyGfgErADWC1GzhSqBNYAO4HLwBcH/3dg20QqnpJbtw++B9QBMwJl1QP3HfLOy3qiKAHuWge9AjYkIHsT0GfJviNnJoKUQ/kOoCypA4A0cNVhRCJfwnabE0wcTlpntScRsKHKm9s8DjwChoUeSo1IxzBia1zlK6xsY9wmF1YA7yNS5jtguYecTsXzDSjP13Veefj8POCNR95/DczNISsN9OfjStVWkdrowdOi9v8EGoBFQg3yW3a9yTM7ZVSxWxJiQJuV533wWPEccKwfUusmJnzwQPGc9lV+htXbmCLlg9+Kp8qxvlCtm8D2Qb3iee/bAK632oPUFBqQAr4qvnUE+rLpbYjhQgcTciGDK4rvGB64qRhMY+aLZiuId0u2mesIYi9FBLsU33U88EIxmK7SF/MkRSaRRjXWKt4ePDCoGEwxC4EpUm8jlH/jWcg0qqyWOyd0/p9FOMrEnbqBX0LdkvvjNICzrXow4QYkjdmhBuTjQhOBqlAX0kFsnoFR2AP0AmMewWuT4emVDBWFmtAg1ml0Zw7lMwlRQ8Q5u0PTqG8he5mgAb0R53SofY0+BtQqhi8RrcRYnsFueLQ7uWDOHlD7TE3IiWIZOuVq5v6oPSZThGKOR3bZHKeZQyZmWUYz+nDhudqzN4YB+xT/s3H2dKk9p0KEL7Vu2DwubDSq9REJxCIP2UWy1/Bk+Y869tVZ8oMeNMi4Lyugz/EgL5Ob08FoOtLDwEordszfq4AjVteaAZ4ApZbstNVXnSMGKqRwZIWYuY2NZcDTiOwyJDTe+hN5vtq4pvYMxH3UI7NKfaAZedgolefecEDaHBaeUoe8VmvvFvLEeQ8jkOnyfuC2jE9spc1vt2TPeJPoVovnLAkgJWM+LbjTY0hVJJ++3CO405bbZOQiQgbGkShxGNE/TnYKRZ3jIXQ7yeGu/hLtDtd4INODkEFsSopUl0PeuSRv3oWtVnnP0ld5gO+Skl8p7cIs+XutNGYdEfxbmCSUy9fQxS4ujcitz2cKsETS4YcYipvexrQHi5kGKJahU5P07D3yshsVGpSqfV1GKjXT5d+sBRTAf45/9ysu87Q/VHgAAAAASUVORK5CYII=">
                            <?php 
                            if (isset($_SESSION['nickname'])) {
                                $nickname = $_SESSION['nickname'];
                                echo $nickname;
                            }
                            ?>
                        </a>
                    </div>
                    <div class="navigations" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="homeStudent.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schedule.php">Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inbox.php">Inbox</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contact contact-button">
                    <form action="../../Routes.php?logout" method="post">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#000000" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                        </button>
                    </form>
                </div>
            </nav>
        </div>

        <main>
            <div class="filter-banner">
                <div class="top-banner">
                    <h5>Filter</h5>
                    <img src="image/Vector.svg" alt="">
                </div>
                <div class="filters">
                    <div class="filter-title">
                        <p>Status Mentor</p>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="teacherStatus" name="mentor_status" value="">
                        <label for="teacherStatus">Guru</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="collegeStatus" name="mentor_status" value="">
                        <label for="collegeStatus">Mahasiswa</label><br>
                    </div>
                </div>
                <div class="filters">
                    <div class="filter-title">
                        <p>Mata Pelajaran</p>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-bahasa" name="mentor_subject" value="">
                        <label for="s-bahasa">B. Indonesia</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-english" name="mentor_subject" value="">
                        <label for="s-english">B. Inggris</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-math" name="mentor_subject" value="">
                        <label for="s-math">Matematika</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-physics" name="mentor_subject" value="">
                        <label for="s-physics">Fisika</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-chem" name="mentor_subject" value="">
                        <label for="s-chem">Kimia</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-biology" name="mentor_subject" value="">
                        <label for="s-biology">Biologi</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-eco" name="mentor_subject" value="">
                        <label for="s-eco">Ekonomi</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-sosio" name="mentor_subject" value="">
                        <label for="s-sosio">Sosiologi</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-history" name="mentor_subject" value="">
                        <label for="s-history">Sejarah</label><br>
                    </div>
                    <div class="radio-button">
                        <input type="radio" id="s-geo" name="mentor_subject" value="">
                        <label for="s-geo">Geografis</label><br>
                    </div>
                </div>
                <div class="limit">
                    <hr>
                </div>
            </div>
            <div class="search-page">
                <div class="search-bar">
                    <form action="search-by-name">
                        <input id="searchMentorByName" type="search" placeholder="Cari Nama Mentor" aria-label="search">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#9e9e9e" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                        </button>
                    </form>
                </div>
                <div class="back-button">
                    <a href="chat.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                    </a>
                </div>
                <div class="mentor-detail">
                    <div class="left-banner">
                        <div class="profile-photo">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADyElEQVR4nO2Zy2/NQRTHP63r0fYS1Zag9iRsUPUXEGltRMTGo94bVlJthW7QLSmxIRqNFUL4A5Au61lqofUWFO2CSlXSXJnk3ORkMv3dmd/99SG53+QkzZ05Z86Z33nNKRRQQAFJoBhYD7QAN4EXwBDwV2hIfrsBNAO1wjPlqAbagE9AJpA+AmeApVOheAVwERiNobhNf4ALwILJUn478MOhyGfgErADWC1GzhSqBNYAO4HLwBcH/3dg20QqnpJbtw++B9QBMwJl1QP3HfLOy3qiKAHuWge9AjYkIHsT0GfJviNnJoKUQ/kOoCypA4A0cNVhRCJfwnabE0wcTlpntScRsKHKm9s8DjwChoUeSo1IxzBia1zlK6xsY9wmF1YA7yNS5jtguYecTsXzDSjP13Veefj8POCNR95/DczNISsN9OfjStVWkdrowdOi9v8EGoBFQg3yW3a9yTM7ZVSxWxJiQJuV533wWPEccKwfUusmJnzwQPGc9lV+htXbmCLlg9+Kp8qxvlCtm8D2Qb3iee/bAK632oPUFBqQAr4qvnUE+rLpbYjhQgcTciGDK4rvGB64qRhMY+aLZiuId0u2mesIYi9FBLsU33U88EIxmK7SF/MkRSaRRjXWKt4ePDCoGEwxC4EpUm8jlH/jWcg0qqyWOyd0/p9FOMrEnbqBX0LdkvvjNICzrXow4QYkjdmhBuTjQhOBqlAX0kFsnoFR2AP0AmMewWuT4emVDBWFmtAg1ml0Zw7lMwlRQ8Q5u0PTqG8he5mgAb0R53SofY0+BtQqhi8RrcRYnsFueLQ7uWDOHlD7TE3IiWIZOuVq5v6oPSZThGKOR3bZHKeZQyZmWUYz+nDhudqzN4YB+xT/s3H2dKk9p0KEL7Vu2DwubDSq9REJxCIP2UWy1/Bk+Y869tVZ8oMeNMi4Lyugz/EgL5Ob08FoOtLDwEordszfq4AjVteaAZ4ApZbstNVXnSMGKqRwZIWYuY2NZcDTiOwyJDTe+hN5vtq4pvYMxH3UI7NKfaAZedgolefecEDaHBaeUoe8VmvvFvLEeQ8jkOnyfuC2jE9spc1vt2TPeJPoVovnLAkgJWM+LbjTY0hVJJ++3CO405bbZOQiQgbGkShxGNE/TnYKRZ3jIXQ7yeGu/hLtDtd4INODkEFsSopUl0PeuSRv3oWtVnnP0ld5gO+Skl8p7cIs+XutNGYdEfxbmCSUy9fQxS4ujcitz2cKsETS4YcYipvexrQHi5kGKJahU5P07D3yshsVGpSqfV1GKjXT5d+sBRTAf45/9ysu87Q/VHgAAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="quick-desc">
                            <h5>Nama Mentor</h5>
                            <p>Mentor</p>
                        </div>
                    </div>
                    <div class="right-banner">
                        <div class="mentor-database">
                            <div class="mentor-data">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#005eff" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                                <p>
                                    <?php 
                                    if ($_SESSION['mentorName']) {
                                        $name = $_SESSION['mentorName'];
                                        echo $name;
                                    } ; 
                                    ?>
                                </p>
                            </div>
                            <div class="mentor-data">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#005eff" d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/></svg>
                                <p>
                                    <?php
                                    if ($_SESSION['mentorSubject']) {
                                        $subject = $_SESSION['mentorSubject'];
                                        echo $subject;
                                    } ;                                     
                                    ?>
                                </p>
                            </div>
                            <div class="mentor-data">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#005eff" d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z"/></svg>
                                <p>
                                    <?php 
                                    if ($_SESSION['mentorStatus']) {
                                        $status = $_SESSION['mentorStatus'];
                                        echo $status;
                                    } ; 
                                    ?>
                                    </p>
                            </div>
                            <div class="mentor-data">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#005eff" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                                <p>
                                    <?php 
                                    if ($_SESSION['mentorRating']) {
                                        $rating = $_SESSION['mentorRating'];
                                        echo $rating;
                                    } ; 
                                    ?>
                                </p>
                            </div>
                            <div class="contact-button">
                                <p>Rp. <?php echo $_SESSION['mentorPrice']; ?></p>
                                <button onclick="window.location.href = 'payment.php'">Hubungi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="foot-banner">
                <h2>STUDYBUDDY</h2>
                <div class="foot-content">
                    <div class="social-media">
                        <div class="f-image" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256"
                                style="fill:#000000;">
                                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M8,3c-2.757,0 -5,2.243 -5,5v8c0,2.757 2.243,5 5,5h8c2.757,0 5,-2.243 5,-5v-8c0,-2.757 -2.243,-5 -5,-5zM8,5h8c1.654,0 3,1.346 3,3v8c0,1.654 -1.346,3 -3,3h-8c-1.654,0 -3,-1.346 -3,-3v-8c0,-1.654 1.346,-3 3,-3zM17,6c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM12,7c-2.757,0 -5,2.243 -5,5c0,2.757 2.243,5 5,5c2.757,0 5,-2.243 5,-5c0,-2.757 -2.243,-5 -5,-5zM12,9c1.654,0 3,1.346 3,3c0,1.654 -1.346,3 -3,3c-1.654,0 -3,-1.346 -3,-3c0,-1.654 1.346,-3 3,-3z"></path></g></g>
                            </svg>
                        </div>
                        <div class="f-image" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256"
                                style="fill:#000000;">
                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M6,3c-1.64497,0 -3,1.35503 -3,3v12c0,1.64497 1.35503,3 3,3h12c1.64497,0 3,-1.35503 3,-3v-12c0,-1.64497 -1.35503,-3 -3,-3zM6,5h12c0.56503,0 1,0.43497 1,1v12c0,0.56503 -0.43497,1 -1,1h-12c-0.56503,0 -1,-0.43497 -1,-1v-12c0,-0.56503 0.43497,-1 1,-1zM6.70117,7l3.94141,5.63281l-3.73633,4.36719h1.33203l3.00195,-3.51562l2.45703,3.51563h3.83984l-4.18555,-5.99023l3.42188,-4.00977h-1.31055l-2.70312,3.16016l-2.20703,-3.16016zM8.56641,7.98828h1.48633l5.63086,8.02344h-1.49609z"></path></g></g>
                            </svg>
                        </div>
                        <div class="f-image" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256"
                                style="fill:#000000;">
                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M6,3c-1.64497,0 -3,1.35503 -3,3v12c0,1.64497 1.35503,3 3,3h12c1.64497,0 3,-1.35503 3,-3v-12c0,-1.64497 -1.35503,-3 -3,-3zM6,5h12c0.56503,0 1,0.43497 1,1v12c0,0.56503 -0.43497,1 -1,1h-12c-0.56503,0 -1,-0.43497 -1,-1v-12c0,-0.56503 0.43497,-1 1,-1zM12,7v7c0,0.56503 -0.43497,1 -1,1c-0.56503,0 -1,-0.43497 -1,-1c0,-0.56503 0.43497,-1 1,-1v-2c-1.64497,0 -3,1.35503 -3,3c0,1.64497 1.35503,3 3,3c1.64497,0 3,-1.35503 3,-3v-3.76758c0.61615,0.43892 1.25912,0.76758 2,0.76758v-2c-0.04733,0 -0.73733,-0.21906 -1.21875,-0.63867c-0.48142,-0.41961 -0.78125,-0.94634 -0.78125,-1.36133z"></path></g></g>
                            </svg>
                        </div>
                        <div class="f-image" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256"
                                style="fill:#000000;">
                                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M8.23633,3.38867c-0.31784,-0.03792 -0.64403,0.00109 -0.95117,0.11914c-0.91893,0.35154 -2.11714,0.90032 -3.16406,1.74609l-0.02734,0.02148l-0.02539,0.02148c-0.46449,0.43059 -0.71955,0.94708 -1.04492,1.6543c-0.32537,0.70722 -0.65341,1.57996 -0.95117,2.5625c-0.59552,1.96508 -1.07227,4.35658 -1.07227,6.65039c0,0.24003 0.06291,0.48955 0.1875,0.70898c0.80619,1.4231 2.20007,2.21613 3.44141,2.69141c1.23124,0.47141 2.27487,0.63124 2.87109,0.65234c0.01943,0.00068 0.06864,0.00781 0.07031,0.00781c0.40759,0 0.93696,-0.15009 1.23438,-0.71289l0.92188,-1.74414c1.52646,0.26728 2.97163,0.26351 4.53906,-0.01562l0.92773,1.75586c0.29834,0.56914 0.83263,0.71484 1.23633,0.71484c0.0015,0 0.0478,-0.00526 0.06445,-0.00586c0.59627,-0.02055 1.64318,-0.18177 2.87695,-0.6543c1.23982,-0.47484 2.63133,-1.26599 3.4375,-2.68555c0.12865,-0.22324 0.19141,-0.47399 0.19141,-0.71289c0,-2.29381 -0.47763,-4.68647 -1.07617,-6.6543c-0.29927,-0.98391 -0.62819,-1.86004 -0.95703,-2.57031c-0.32884,-0.71027 -0.59347,-1.23162 -1.05859,-1.66211l-0.02539,-0.02148l-0.02539,-0.02148c-1.03597,-0.8375 -2.22846,-1.38005 -3.14453,-1.72852c-0.61265,-0.23348 -1.30371,-0.15052 -1.8457,0.22266c-0.41855,0.28784 -0.56043,0.78584 -0.66992,1.27148h-4.39453c-0.10992,-0.48522 -0.25088,-0.98368 -0.66797,-1.27148c-0.27112,-0.18709 -0.5806,-0.30193 -0.89844,-0.33984zM8,5.375c0,0.88606 0.73894,1.625 1.625,1.625h4.74805c0.88486,0 1.62588,-0.74035 1.62695,-1.625h0.00195c0.78637,0.29913 1.79433,0.78292 2.56055,1.39258c0.01765,0.02193 0.31498,0.42224 0.58789,1.01172c0.27885,0.60229 0.58339,1.40516 0.85938,2.3125c0.53635,1.76334 0.93908,3.93451 0.96289,5.90039c-0.48193,0.75095 -1.37003,1.34067 -2.31641,1.70312c-0.85185,0.32625 -1.55855,0.41087 -1.91992,0.45117l-0.46289,-0.87695c0.34322,-0.10071 0.68416,-0.19962 1.04687,-0.32227c0.34421,-0.10993 0.60236,-0.39699 0.67528,-0.7509c0.07291,-0.35391 -0.05075,-0.71963 -0.32349,-0.95666c-0.27273,-0.23703 -0.65212,-0.30851 -0.99241,-0.18698c-3.83009,1.29516 -5.7146,1.29649 -9.3457,0.00586c-0.12536,-0.04689 -0.25885,-0.06815 -0.39258,-0.0625c-0.47946,0.02305 -0.87493,0.38349 -0.94221,0.85876c-0.06728,0.47528 0.2126,0.93132 0.66682,1.08655c0.36388,0.12934 0.70903,0.2348 1.05469,0.33984l-0.45703,0.86523c-0.36114,-0.04025 -1.0681,-0.12503 -1.91992,-0.45117c-0.94635,-0.36234 -1.83399,-0.94965 -2.31641,-1.70117c0.02357,-1.96639 0.42488,-4.13796 0.95898,-5.90039c0.27474,-0.90658 0.57739,-1.70645 0.85352,-2.30664c0.26979,-0.5864 0.56723,-0.98573 0.57617,-1c0.78065,-0.62062 1.79486,-1.11022 2.58398,-1.41211zM9.03906,9.99609c-0.829,0 -1.5,0.89309 -1.5,1.99609c0,1.103 0.671,1.99609 1.5,1.99609c0.829,0 1.5,-0.89309 1.5,-1.99609c-0.018,-1.103 -0.668,-2.10609 -1.5,-1.99609zM14.99609,10.01172c-0.82843,0 -1.5,0.89543 -1.5,2c0,1.10457 0.67157,2 1.5,2c0.82843,0 1.5,-0.89543 1.5,-2c0,-1.10457 -0.67157,-2 -1.5,-2z"></path></g></g>
                            </svg>
                        </div>
                    </div>
                    <div class="web-desc">
                        <p>
                            STUDYBUDDY adalah aplikasi android yang dirancang untuk membantu siswa SMP dan SMA
                            dalam mencari mentor untuk mendapatkan bimbingan akademik. Aplikasi ini juga memberikan
                            kesempatan bagi individu yang lebih berwawasan untuk berbagi pengetahuan mereka sebagai
                            mentor dan mendapatkan uang saku tambahan. Sistem akan memfasilitasi pertemuan antara
                            siswa dan mentor, memungkinkan pembayaran, serta memberi rating kepada mentor setelah
                            setiap sesi diskusi.
                        </p>
                        <div class="f-contact">
                            <p><span>Kontak Langsung</span></p>
                            <ul>
                                <li>Email       : studybuddy@gamil.corp</li>
                                <li>No. Telepon : +62-8180-5170-704</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>Copyright 2023 Reuben Razzani. Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </footer>
    </body>
</html>