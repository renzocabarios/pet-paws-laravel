@extends('master')

@section('content')

<div class="h-full w-full flex justify-center items-center">
    <div class="flex flex-col items-center shadow-lg shadow-gray-900 bg-white rounded-md p-12">
        <p class="text-xl font-black">Login</p>
        <form class="flex flex-col items-center rounded-md gap-2" method="post">
            @csrf
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="email">
            </div>
            <div class="flex flex-col">
                <label for="Password">Password</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="password">
            </div>
            <br>
            <button type="submit" class="bg-sky-300 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-tiny font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Log In</button>
        </form>
    </div>
</div>

@endsection()