<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Biography' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #323151ff; 
            font-family: Arial, sans-serif;
            color: #2c2c2c;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        footer {
            background: #5a4634; 
            color: #f5f5dc; 
            text-align: center;
            padding: 15px;
            margin-top: auto;
            font-size: 14px;
        }

        .profpage {
        position: relative;
        height: 100vh;
        background: radial-gradient(circle at center, rgba(0,0,0,0.2) 60%, rgba(0,0,0,10) 100%),;
        color: white;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        background-position: center;
        }
        

    .btn-circle {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.3);
      color: white;
      font-size: 1.2rem;
      transition: 0.3s;
    }

    .btn-circle:hover {
      background: rgba(255,255,255,0.3);
    }
    body {
      background-color: black;
      background: linear-gradient(top to bottom, );
    }
    h3,p {
      color: white;
    }

        .content {
            padding: 70px 25px 25px;
        }


        hr {
            border: 0;
            border-top: 2px solid #d2b48c; 
            margin: 15px 0;
        }
    </style>
</head>
<body>

    <div class="main-content">
        {{ $slot }}
    </div>

    <footer>
        <p> 2025 Artcommission project</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>