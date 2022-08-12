@extends('master')

@section('content')

<div class="h-full w-full flex justify-center items-center">
    
    <div class=" items-center shadow-lg shadow-gray-900 bg-white rounded-md p-12">
        <div class="text-3xl ">My<span class="text-sky-300"> Profile</span> </div>
        <br>
        <div class="grid grid-cols-2 gap-10">
            <img class="h-80 w-80" src="/assets/Customer-Profile.png" alt="Customer-Profile"> 
            <div>
   
        <form class="flex flex-col rounded-md" method="post" action="{{route('user.auth')}}">
            @csrf
            <div>
                <label for="email">Full Name</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" type="text" name="email">
            </div>
            <div class="flex flex-col">
                <label for="Password">Contact No.</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" type="text" name="password">
            </div>
            <div class="flex flex-col">
                <label for="Password">Age</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" type="text" name="password">
            </div>
            <div class="flex flex-col">
                <label for="Password">Email Address</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" type="text" name="password">
            </div>
            <div class="flex flex-col">
                <label for="Password">Password</label>
                <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" type="text" name="password">
            </div>
            <br>
           <div class="grid place-items-end">
            <button type="submit" class="bg-sky-300  w-32 flex justify-center  py-1 px-2 border border-transparent rounded-full shadow-sm text-tiny text-white right-2.5 ">Confirm</button>
        </div>
        </form>
    </div>
</div>

@endsection()