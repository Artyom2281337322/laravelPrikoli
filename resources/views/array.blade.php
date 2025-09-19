<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="cards">
        @for($i = 0; $i < 10; $i++)
        <div class="car"></div>
        @endfor
    </div>
</body>
</html>