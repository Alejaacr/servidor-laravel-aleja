<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Laravel Server</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: Arial, sans-serif;
                background: url("https://alfabetajuega.com/hero/2024/05/este-cosplay-de-nezuko-kamado-de-demon-slayer-es-lo-mejor-que-veras-en-mucho-tiempo.jpg?width=768&aspect_ratio=16:9&format=nowebp") no-repeat center center/cover;
            }

            .overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
            }

            .card {
                position: relative;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                padding: 60px;
                border-radius: 25px;
                border: 2px solid #a855f7; /* morado */
                box-shadow: 0 20px 40px rgba(0,0,0,0.4);
                text-align: center;
                max-width: 450px;
                width: 90%;
                z-index: 2;
                color: white;
            }

            h1 {
                margin-bottom: 15px;
                font-size: 34px;
                color: #ffffff;
            }

            p {
                font-size: 18px;
                margin-bottom: 20px;
                color: #f3e8ff;
            }

            .icon {
                font-size: 60px;
            }
        </style>
    </head>
    <body>
        <div class="overlay"></div>

        <div class="card">
            <h1>Hello 👋</h1>
            <p>This is my Laravel server</p>
            <div class="icon">🦋</div>
        </div>
    </body>
    </html>
    ';
});