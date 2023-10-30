<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Add your CSS styles here -->
    <style>
        /* Your custom styles for the login section */
        .login-section {
            background-color: #f0f0f0; /* Change the background color */
            padding: 20px; /* Add some padding */
            border-radius: 8px; /* Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a shadow */
        }

        .login-link {
            font-weight: bold;
            text-decoration: none;
            color: #333;
            margin-right: 10px;
        }
        .login-link:hover {
            color: #555;
        }

        /* Custom styles for news section */
        .news-container {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .news-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        .news-description {
            font-size: 1rem;
            color: #666;
            margin-top: 0.5rem;
        }
    </style>

    <!-- Rest of your code -->
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 login-section">
                @auth
                    <a href="{{ url('/dashboard') }}" class="login-link">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="login-link">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="login-link">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- News Section -->
        <div class="news-container">
            <h3 class="news-title">Breaking News</h3>
            <p class="news-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <!-- Add more news containers as needed -->
        <div class="news-container">
            <h3 class="news-title">Technology Update</h3>
            <p class="news-description">A new technology breakthrough has been announced, revolutionizing the industry.</p>
        </div>

        <!-- Rest of your code -->
    </div>
</body>
</html>
