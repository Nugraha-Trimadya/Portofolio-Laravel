<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f0d52410a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-logo">
            <a href="/"><strong>NugrahaTrimadya();</strong></a>
        </div>
        <button class="nav-toggle" id="nav-toggle">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul class="nav-links" id="nav-links">
            <li class="link"><a href="/">Home</a></li>
            <li class="link"><a href="/about">About</a></li>
            <li class="link"><a href="/sertifikat">Sertifikat</a></li>
            <li class="link"><a href="/social_media">Social Media</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('konten')
    </div>

</body>
</html>
