
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body style="background-image: url('{{ asset('img/background.jpg') }}'); background-size: cover;">

    <x-navbar />
{{$slot}}
@vite(['resources/js/app.js'])
</body>
</html>