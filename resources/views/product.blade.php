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
                    /* Reset & Body Setup */
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

                    /* 1. Style Navbar di Paling Atas */
                    .container {
                        display: flex;
                        justify-content: center;
                        gap: 12px;
                        background-color: rgba(255, 255, 255, 0.85);
                        backdrop-filter: blur(8px);
                        padding: 12px 24px;
                        margin: 20px auto 0 auto;
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

                    /* 2. Pembungkus Konten Produk agar Persis di Tengah Layar */
                    .main-content {
                        flex: 1;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        padding: 2rem;

                        animation: fadeIn 1s ease-in-out;
                    }

                    /* Style Judul Product */
                    h1 {
                        font-size: 3rem;
                        font-weight: 800;
                        margin-bottom: 2rem;
                        letter-spacing: -0.025em;
                        background: linear-gradient(to right, #1e293b, #2563eb);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    /* Container Tombol Produk (Tiga Tombol Berjejer) */
                    .product-links {
                        display: flex;
                        gap: 1rem;
                        justify-content: center;
                        flex-wrap: wrap;
                    }

                    /* Style Kartu Produk (satu, dua, tiga) */
                    .product-links a {
                        text-decoration: none;
                        color: #1e293b;
                        background-color: #ffffff;
                        font-weight: 600;
                        font-size: 1.1rem;
                        text-transform: capitalize;
                        padding: 1.25rem 2.5rem;
                        border-radius: 16px;
                        border: 1px solid #e2e8f0;
                        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
                        transition: all 0.25s ease;
                    }

                    .product-links a:hover {
                        background-color: #2563eb;
                        color: #ffffff;
                        border-color: #2563eb;
                        transform: translateY(-4px);
                        box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
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

                    /* Responsif untuk HP */
                    @media (max-width: 640px) {
                        .container {
                            border-radius: 16px;
                            margin: 10px;
                        }
                        .product-links {
                            flex-direction: column;
                            width: 100%;
                            max-width: 280px;
                        }
                    }
                </style>
    </head>
    <body>
        <div class="main-content">
                <h1>Product</h1>

                <div class="product-links">
                    <a href="category/marbel">marbel</a>
                    <a href="category/riri">riri story</a>
                    <a href="category/kolak">kolak</a>
                </div>
            </div>
    </body>
</html>
