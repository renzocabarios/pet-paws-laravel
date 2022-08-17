<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Paws</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    @vite('resources/css/app.css')

    <style>
        body {
            height: 100vh;
        }

        nav {
            height: 10%;
            filter: drop-shadow(0 25px 25px rgb(0 0 0 / 0.15));
            background-color: rgb(125 211 252);
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem;
        }

        .text {
            font-size: 1.875rem;
            /* 30px */
            line-height: 2.25rem;
            /* 36px */
        }

        .white {
            color: white;
        }

        .width {

            width: 100%;
        }
    </style>

</head>

<body>
    <nav>
        <div class="text">Pet <span class="white">Paws</span> </div>
    </nav>

    <table class="width">
        <thead>
            <tr>
                <th>No.</th>
                <th>Service Name</th>
                <th>Cost</th>
                <th>Pet</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $d=>$value)
            <tr>
                <td>{{$d + 1}}</td>
                <td>{{$value['service']['service_name']}}</td>
                <td>PHP {{$value['service']['price']}}</td>
                <td>{{$value['pet']['pet_name']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <nav class="nav">
        <div class="text">All Rights Reserved <span class="white">@2022</span> </div>
    </nav>
    @stack('scripts')
</body>

</html>