<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Paws</title>

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    @vite('resources/css/app.css')
</head>

<body class="h-screen">
    <nav class="nav drop-shadow-2xl bg-sky-300 flex flex-row justify-between items-center p-5">
        <div class="text-3xl">Pet <span class="text-white">Paws</span> </div>
    </nav>

    <table class="w-full">
        <thead>
            <tr class="p-5 text-center">
                <th class="p-5">No.</th>
                <th class="p-5">Service Name</th>
                <th class="p-5">Cost</th>
                <th class="p-5">Pet</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d=>$value)
            <tr>
                <td>{{$d + 1}}</td>
                <td>{{$value['service']['service_name']}}</td>
                <td>PHP {{$value['service']['price']}}</td>
                <td>{{$value['pet']['pet_name']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <nav class="nav drop-shadow-2xl bg-sky-300 flex flex-row justify-between items-center p-5">
        <div class="text-3xl">All Rights Reserved <span class="text-white">@2022</span> </div>
    </nav>
    <a href="{{route('receipt.download', ['id' => $id])}}">Download</a>
    @stack('scripts')
</body>

</html>