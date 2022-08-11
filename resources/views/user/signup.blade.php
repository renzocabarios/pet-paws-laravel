@extends('master')
@section('content')

<div class="h-full w-full flex justify-center items-center">
    <div class="flex flex-col items-center shadow-lg shadow-gray-900 bg-white rounded-md p-12">
        <p class="text-xl font-black">Create An Account</p>
        <form class="flex flex-col items-center rounded-md gap-2" method="post" action="#" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="first_name">First Name</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="first_name">
            </div>
            <div class="flex flex-col">
                <label for="last_name">Last Name</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="last_name">
            </div>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="email">
            </div>
            <div class="flex flex-col">
                <label for="Password">Password</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="password">
            </div>
            <div class="flex flex-col">
                <label for="img_path" class="control-label">Profile Pic:</label><i style="color:red"></i>
                <input type="file" class="form-control" id="img_path" name="img_path">
            </div>
            <br>
            <button type="submit" class="bg-sky-300 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-tiny font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create Account</button>
        </form>
    </div>
</div>

@endsection()