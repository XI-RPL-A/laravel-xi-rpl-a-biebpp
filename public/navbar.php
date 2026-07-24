<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
                    /* Reset sederhana & font clean */
                    * {
                        box-sizing: border-box;
                        margin: 0;
                        padding: 0;
                    }

                    body {
                        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                        background-color: #f8fafc;
                        color: #334155;
                        display: flex;
                        justify-content: center;
                        padding-top: 2rem;
                    }

                    /* Style untuk container navbar */
                    .container {
                        display: flex;
                        gap: 8px;
                        background-color: #ffffff;
                        padding: 10px 16px;
                        border-radius: 12px;
                        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
                    }

                    /* Style untuk link/menu */
                    .container a {
                        text-decoration: none;
                        color: #64748b;
                        font-weight: 500;
                        padding: 8px 16px;
                        border-radius: 8px;
                        transition: all 0.2s ease;
                    }

                    /* Efek saat mouse diarahkan (hover) */
                    .container a:hover {
                        color: #0f172a;
                        background-color: #f1f5f9;
                    }
            </style>
    </head>
    <body>
        <div class="container">
            <a href=".">Home</a>
            <a href="news">News</a>
            <a href="category">Product</a>
            <a href="program">Program</a>
            <a href="about-us">About</a>
        </div>
    </body>
</html>
