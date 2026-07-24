<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                html, body {
                    margin: 0;
                    padding: 0;
                    background-color: cornflowerblue;
                }

                .center {
                    display: grid;
                    margin: 9% auto;
                    place-items: center;
                }

                .container {
                    width: auto;
                    padding: 20px;
                    background-color: aqua;
                    border-radius: 12px;
                    box-shadow: 0 0 25px 15px rgba(0, 0, 0, 0.2);
                }

                .pictures {
                    padding: 3px;
                    background-color: aliceblue;
                    border-radius: 8px;
                }

                .bold {
                    gap: 0;
                    font-size: 20px;
                    font-weight: 450;
                }
            </style>
        @endif
    </head>
    <body>
        <div class="center">
            <div class="container">
                <img class="pictures" src="{{ asset('images/img.png') }}" alt="foto">
                <div class="bold">
                    <p>Nama: Bima</p>
                    <p>NIM: 25975</p>
                    <p>Kelas: XI RPLA</p>
                </div>
            </div>
        </div>
    </body>
</html>
