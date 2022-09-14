<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    header{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    header ul{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    ul li{
        list-style-type: none;

        margin-right: 1rem;
    }

    ul li a{
        text-decoration: none;
        cursor: pointer;
    }
</style>
<body>
    <header>
        <div>
            <h1>HELLOWORLD</h1>
        </div>
        <div>
            <ul>
                <li><a href="{{ url('/Napoli') }}">Napoli</a></li>
                <li><a href="{{ url('/Milano') }}">Milano</a></li>
                <li><a href="{{ url('/Torino') }}">Torino</a></li>
                <li><a href="{{ url('/SanMartino') }}">San Martino Valle Caudina</a></li>
            </ul>
        </div>
    </header>
</body>
</html>