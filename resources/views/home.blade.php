<?php
    include "navbar.php";
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
                    /* Reset & Basemode Layout */
                    * {
                        box-sizing: border-box;
                        margin: 0;
                        padding: 0;
                    }

                    body {
                        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                        color: #0f172a;
                        min-height: 100vh;
                        display: flex;
                        flex-direction: column;
                    }

                    /* Style Navbar (Otomatis Styling 'navbar.php' dari sebelumnya) */
                    .container {
                        display: flex;
                        justify-content: center;
                        gap: 12px;
                        background-color: rgba(255, 255, 255, 0.8);
                        backdrop-filter: blur(8px);
                        padding: 12px 24px;
                        margin: 20px auto;
                        border-radius: 99px;
                        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
                        width: fit-content;
                    }

                    .container a {
                        text-decoration: none;
                        color: #64748b;
                        font-weight: 600;
                        font-size: 0.95rem;
                        padding: 8px 18px;
                        border-radius: 99px;
                        transition: all 0.3s ease;
                    }

                    .container a:hover {
                        color: #2563eb;
                        background-color: #eff6ff;
                    }

                    /* Style Landing Page Hero Section untuk <h1> */
                    h1 {
                        flex: 1;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        font-size: 3rem;
                        font-weight: 800;
                        letter-spacing: -0.025em;
                        padding: 2rem;

                        /* Efek Gradient Text */
                        background: linear-gradient(to right, #1e293b, #2563eb);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;

                        /* Animasi muncul halus */
                        animation: fadeIn 1s ease-in-out;
                    }

                    @keyframes fadeIn {
                        from {
                            opacity: 0;
                            transform: translateY(10px);
                        }
                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    /* Responsif untuk Layar HP */
                    @media (max-width: 640px) {
                        .container {
                            flex-wrap: wrap;
                            border-radius: 16px;
                            margin: 10px;
                        }
                        h1 {
                            font-size: 2rem;
                        }
                    }
                </style>
    </head>
    <body>
        <h1>Ini adalah halaman home</h1>
    </body>
</html>
