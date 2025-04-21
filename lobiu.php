<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saya Sayang Wishah</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0e68c;
            font-family: 'Arial', sans-serif;
            margin: 0;
            text-align: center;
            overflow: hidden;
        }
        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 400px;
            position: relative;
            animation: fadeIn 1s ease-in-out;
        }
        .heart {
            color: #ff4d4d;
            font-size: 50px;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            animation: heartbeat 1s infinite;
        }
        h1 {
            font-size: 36px;
            margin: 0;
            color: #333;
            animation: slideIn 1s ease-in-out;
        }
        p {
            font-size: 24px;
            color: #555;
            margin-top: 10px;
            animation: slideIn 1s ease-in-out 0.5s forwards;
        }
        .footer {
            margin-top: 20px;
            font-size: 18px;
            color: #777;
            animation: slideIn 1s ease-in-out 1s forwards;
        }

        @keyframes heartbeat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heart">❤️</div>
        <h1>Saya Sayang</h1>
        <p>Wishah</p>
        <div class="footer">Selamanya</div>
    </div>
</body>
</html>