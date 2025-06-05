<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <style>
            body {
                background-color: #0a0a0a;
                color: #e0e0ff;
                font-family: 'UnifrakturCook', cursive;
                margin: 0;
                padding: 2rem;
            }

            .panel {
                border: 2px solid #4f46e5;
                box-shadow: 0 0 20px #6366f1;
                padding: 1.5rem;
                border-radius: 12px;
                max-width: 600px;
                margin: auto;
                background: linear-gradient(145deg, #0d0d1a, #13132a);
            }

            .panel h2 {
                color: #c4b5fd;
                font-size: 2rem;
                text-align: center;
                margin-bottom: 1rem;
                text-shadow: 0 0 10px #8b5cf6;
            }

            ul.quest-list {
                list-style: none;
                padding: 0;
            }

            ul.quest-list li {
                background: rgba(255, 255, 255, 0.05);
                margin: 0.5rem 0;
                padding: 1rem;
                border: 1px solid #312e81;
                border-left: 5px solid #818cf8;
                border-radius: 6px;
                box-shadow: 0 0 10px #4f46e5;
                transition: background 0.2s ease-in-out;
            }

            ul.quest-list li:hover {
                background: rgba(129, 140, 248, 0.1);
            }
        </style>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
