<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../Public/css/requestSchedule.css">
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

    <div class="main-banner">
        <div class="left-banner">
  
        <div class="lb-content">
                <div class="top">
                    <div class="back-button">
                        <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/ffffff/back.png" alt="back"/>
                        <a href="requestSchedule.php"><h5>Kembali</h5></a>
                    </div>
                <h1>STUDYBUDDY</h1>
                </div>
                <hr>
                <div class="bottom">
                    <h5>
                        STUDYBUDDY adalah aplikasi android yang dirancang untuk membantu siswa SMP dan SMA
                        dalam mencari mentor untuk mendapatkan bimbingan akademik.
                    </h5>
                </div>
            </div>
        </div>
        <div class="right-banner">
            <div class="rb-content">
                <div class="banner">
                    <h3>REQUEST SCHEDULE</h3>
                    <form action="../../Routes.php?schedule" method="post">
                        <input type="hidden" name="studentID" id="studentID" value="<?= $_SESSION['idStudent']; ?>">
                        <input type="hidden" name="mentorID" id="mentorID" value="<?= $_SESSION['mentorID']; ?>">
                        <div class="fill">
                            <div class="mb-3">
                                <label for="dateInput" class="form-label">Tanggal Pembelajaran</label>
                                <input type="date" class="form-control" id="dateInput" name="dateInput" min="1000-01-01" max="9999-12-31" placeholder="yyyy-mm-dd" oninput="handleDateChanger(this)">
                            </div>
                            <div class="mb-3">
                                <label for="timeInput" class="form-label">Jam Pembelajaran</label>
                                <input type="time" class="form-control" id="timeInput" name="timeInput">
                            </div>
                        </div>
                        <div class="continue">
                            <button>KIRIM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/requestSchedule.js"></script>
</body>
</html>