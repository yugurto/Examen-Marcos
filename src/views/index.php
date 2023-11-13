<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Examen1 Marcos</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<body>
<header>
        <?php include 'header.php' ?>
    </header>
<div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/image2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      A
    </div>
    <div class="col">
      B
    </div>
    <div class="col">
      C
    </div>
  </div>
</div>
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLabel">Política de Cookies</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="acceptCookies">Aceptar</button>
            </div>
        </div>
    </div>
</div>           

</div>
<script>
    $(document).ready(function() {
        // Show the cookie modal on page load if the cookie is not set
        if (!getCookie('cookieAccepted')) {
            $('#cookieModal').modal('show');
        }

        // Handle the "Accept" button click
        $('#acceptCookies').click(function() {
            // Set a cookie to remember that the user has accepted cookies
            setCookie('cookieAccepted', 'true', 365);
            // Hide the modal
            $('#cookieModal').modal('hide');
        });
    });

    // Function to set a cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    // Function to get the value of a cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
</script>
</body>
</html>
