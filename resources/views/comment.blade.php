@extends('master')

@section('content')
<br>
<div class="h-90 w-90 flex justify-center items-center">
    <div class=" items-center shadow-lg shadow-gray-900 bg-white rounded-md p-12">
        <div class="text-3xl">Send Feedback about our service!</div>
        <br>
                <form class="rounded-md">
                    <div class="grid font-bold grid-cols-2 gap-2">
                        <input  class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" placeholder="Your Name" type="text" name="id">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" placeholder="Your email" type="text" name="first_name">
                    </div>
      
                   <br>
                   <textarea name="" id="" cols="30" rows="5" placeholder="Comments / Suggestions / Feedback about our services"></textarea>
                <br>
                    <div class="grid place-items-center grid font-bold grid-cols-2">
                        <button type="submit" class="bg-sky-300  w-32 flex justify-center  py-1 px-2 border border-transparent rounded-full shadow-sm text-tiny text-white right-2.5 ">Save</button>
                        <button type="submit" class="bg-zinc-50  w-32 flex justify-center  py-1 px-2 border border-transparent rounded-full shadow-sm shadow-gray-900">Cancel</button>
                    </div>
                </form>
    </div>
</div>
<br>
<hr>
<p class="text-3xl font-semibold text-center">Comment Section</p>   
<br>
<div class="h-56 grid grid-cols-3 content-start">
    

    <div class="flex shadow-lg shadow-gray-900 bg-white rounded-md p-12 ">
            <div class="text-3xl justify-between font-medium">Comment #1<span class="font-light text-xl"> Renzo Cabarios</span>  </div>
            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" placeholder="User Comment" type="text" name="first_name">
    </div>
 
    <div class="flex shadow-lg shadow-gray-900 bg-white rounded-md p-12 ">
        <div class="text-3xl justify-between font-medium">Comment #2<span class="font-light text-xl"> Gabriel Medoza</span>  </div>
        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" placeholder="User Comment" type="text" name="first_name">
</div>

<div class="flex shadow-lg shadow-gray-900 bg-white rounded-md p-12 ">
    <div class="text-3xl justify-between font-medium">Comment #3<span class="font-light text-xl"> Heinrich fabros</span>  </div>
    <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" placeholder="User Comment" type="text" name="first_name">
</div>


</div>
        @endsection()