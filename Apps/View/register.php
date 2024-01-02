<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../Public/css/register.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                            <h5>Kembali</h5>
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
                        <h3>REGISTER</h3>
                        <form id="registerStudentForm" action="../Routes.php?register" method="post" onsubmit="return validateFormData()">
                            <div id="email">
                                <div class="mb-3">
                                    <label for="emailInput" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="emailInput" name="emailInput" method="post" placeholder="name@example.com">
                                </div>
                            </div>
                            <div id="password">
                                <label for="passwordInput" class="form-label">Kata Sandi</label>
                                <input type="password" id="passwordInput" name="passwordInput" method="post" class="form-control" aria-describedby="passwordHelpBlock">
                                <div id="passwordHelpBlock" class="form-text">
                                    Kata sandi Anda harus setidaknya memiliki 8 - 20 karakter
                                </div>
                            </div>
                            <div class="continue">
                                <button>SELANJUTNYA</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../Public/js/register.js"></script>       
    </body>
</html>