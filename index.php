<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snarky PHP Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #00FF00;
            font-family: monospace;
        }
        .card {
            background-color: #111;
            border-color: #333;
            margin-top: 20vh;
            width: 50vw;
        }
        .ascii-art {
            text-align: center;
            white-space: pre;
            color: #00FF00;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">You Did It!</h5>
                <p class="card-text ascii-art">
                     _   _                     
                    | | | |                    
                    | |_| |  ___  _ __   _   _ 
                    |  _  | / _ \| '_ \ | | | |
                    | | | ||  __/| | | || |_| |
                    \_| |_/ \___||_| |_| \__,_|
                </p>
                <h6>PHP Version Info</h6>
                <pre><?php echo phpversion(); ?></pre>
                <h6>Cool Stats</h6>
                <p><i class='bx bx-cube'></i> Memory Limit: <pre><?php echo ini_get('memory_limit'); ?></pre></p>
                <p><i class='bx bx-tachometer'></i> Max Execution Time: <pre><?php echo ini_get('max_execution_time'); ?></pre> seconds</p>
            </div>
        </div>
    </div>
</body>
</html>
