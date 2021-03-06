<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="https://cdn.shopify.com/s/files/1/1426/2510/files/2021-babywisp-logo-new_1000x555_0b3fc635-297c-4ec5-93e0-06424e67fcbe_280x.png?v=1616047947" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="/"><font size="5"><b>Home</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="baws.blade.php"><font size="5"><b>Baws</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="headbands.blade.php"><font size="5"><b>Headbands</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clips.blade.php"><font size="5"><b>Clips</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.blade.php"><font size="5"><b>About Us</b></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.blade.php"><font size="5"><b>Contact US</b></font></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@yield('content')
</body>
</html>