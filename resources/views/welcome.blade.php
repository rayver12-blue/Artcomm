<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome - Our Autobiographies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #323151ff, #959595ff);
      margin: 0;
      padding: 30px;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
      color: #4a3c2a; /* dark brown */
      font-weight: bold;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }

    .card {
      background: #fffaf0; /* light beige */
      border-radius: 15px;
      border: 1px solid #d2b48c; /* light brown border */
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    .card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-size: 1.2rem;
      color: #4a3c2a; /* dark brown */
      font-weight: bold;
    }

    .card-text {
      font-size: 0.95rem;
      color: #6e5b43; 
      margin-bottom: 15px;
    }

    .btn-custom {
      background: #c3a373; 
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 8px 18px;
      font-weight: 500;
      transition: background 0.3s, transform 0.2s;
    }

    .btn-custom:hover {
      background: #8b7355; /* darker brown */
      transform: scale(1.05);
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 3</a>
      </li>
    </ul>
  </div>
</nav>

  <h1></h1>

  <div class="card-container">
    
    <div class="card">
      <img src="{{ asset('images/takopfp.jpg') }}" alt="tako">
      <div class="card-body">
        <h5 class="card-title">Tako</h5>
        <p class="card-text">Click below to view.</p>
        <a href="{{ route('Artists.tako') }}" class="btn btn-custom">View</a>
      </div>
    </div>

    <div class="card">
      <img src="{{ asset('images/ashen.png') }}" alt="ashen">
      <div class="card-body">
        <h5 class="card-title">Ashen</h5>
        <p class="card-text">Click below to view.</p>
        <a href="{{ route('Artists.ashen') }}" class="btn btn-custom">View</a>
      </div>
    </div>
    
    <div class="card">
      <img src="{{ asset('images/artur.jpg') }}" alt="artur">
      <div class="card-body">
        <h5 class="card-title">Artur-link</h5>
        <p class="card-text">Click below to view.</p>
        <a href="{{ route('Artists.artur') }}" class="btn btn-custom">View</a>
      </div>
    </div>
    
    <div class="card">
      <img src="{{ asset('images/takopfp.jpg') }}" alt="Jacen">
      <div class="card-body">
        <h5 class="card-title">Tako</h5>
        <p class="card-text">Click below to view.</p>
        <a href="{{ route('Artists.tako') }}" class="btn btn-custom">View</a>
      </div>
    </div>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>