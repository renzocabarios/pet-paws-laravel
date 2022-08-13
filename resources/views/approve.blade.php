@extends('master')

@section('content')

<div class="h-full w-full flex justify-center items-center">

    <div class=" items-center shadow-lg shadow-gray-900 bg-white rounded-md p-12 ">
        <div class="text-3xl text-center font-bold">Approval Transaction</div>
        <br>
                <form class="flex flex-col rounded-md ">
                        <label for="id">Schedule</label>
                        <input  class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm" type="text" name="id">
                    <label for="id">Status</label>
                        
                    <div class="flex justify-center items-center"> 
                     <div class="dropdown inline-block relative ">
                          <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                            <span class="h-30 w-96">Dropdown</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                          </button>
                          <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Not Paid</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Pending</a></li>
                            <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Paid</a></li>
                          </ul>
                        </div>
                    </div>
                    <br>
                    <div class="flex justify-center items-center">
                        <button type="submit" class="bg-sky-300 h-11 w-full flex justify-center  py-2 px-3 border border-transparent rounded-full shadow-sm text-tiny text-white right-2.5 ">Confirm</button>
                    </div>
                </form>
        @endsection()