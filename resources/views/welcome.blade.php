<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

   
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f8f8;
        }

        
        header {
            background-color: #34495e;
            color: #ecf0f1;
            text-align: center;
            padding: 2rem;
        }

        h1 {
            font-size: 2rem;
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 80vh;
        }

        .content-container {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2rem;
            max-width: 600px;
            text-align: center;
        }

        .content-container p {
            font-size: 1.2rem;
            color: #333;
        }

       
        .button-container {
            display: flex;
            flex-direction: column;
            margin: 20px 0;
        }

   
        .btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            margin: 10px 0; 
            cursor: pointer;
            text-decoration: none;
        }

       
        footer {
            background-color: #34495e;
            color: #ecf0f1;
            text-align: center;
            padding: 1rem;
        }

      
        a {
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
        }

       
        @media (max-width: 768px) {
            .content-container {
                padding: 1rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            .content-container p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Employee Management System</h1>
    </header>
    <div class="main-content">
        <div class="content-container">
            <p>Manage your employees with ease using our Employee Management System. Streamline HR tasks, keep records, and improve efficiency in your organization.</p>
            <p>Our system allows you to handle employee data, track attendance, manage payroll, and much more. Say goodbye to paperwork and hello to productivity.</p>
        </div>
        <div class="button-container">
            <a href="{{ route('login') }}" class="btn">Log in</a>

        </div>
    </div>
    <footer>
        &copy; {{ date('Y') }} PAWS All rights reserved.
    </footer>
</body>
</html>
