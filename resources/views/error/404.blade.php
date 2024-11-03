<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            animation: fadeIn 1.5s ease-in-out;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 20px;
            color: #333;
            animation: bounceIn 1.2s ease-in-out;
        }

        p {
            font-size: 20px;
            margin-bottom: 30px;
            animation: fadeIn 2s ease-in-out;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            animation: fadeInUp 2.5s ease-in-out;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0% {
                transform: translateY(-200px);
                opacity: 0;
            }
            60% {
                transform: translateY(20px);
                opacity: 1;
            }
            80% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <h1>404 | Page Not Found</h1>
    <p>Oops! The page you are looking for does not exist.</p>
    <a href="{{ url('/') }}">Go Back to Homepage</a>
</body>
</html>
