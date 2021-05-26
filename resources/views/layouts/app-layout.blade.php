<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <title>Plume Nettoyage</title>

    <!-- icons -->
    <link rel="shortcut icon" type="images/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->

    <link rel="preconnect"
          href="https://fonts.gstatic.com">

    <link
        href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,800|Montserrat:600|Alegreya+Sans:500&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap"
          rel="stylesheet">

</head>
<body class="antialiased bg-gradient-to-r from-pink-50 via-gray-100 to-pink-50 w-full h-screen overflow-x-hidden">

{{ $slot }}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    /* scroll */
    $(document).ready(function () {
        $('body').on('click', '[data-scroll]', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('data-scroll')).offset().top
            }, 2000);
        })
    })

    /* close alert */
    function closeAlert() {
        let alert = document.getElementById('alert')
        alert.remove()
    }
</script>

</body>
</html>
