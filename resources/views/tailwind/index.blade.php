@extends('layouts.master')

@section('content')
    <div class="m-5 flex h-screen items-center justify-start flex-col">
        <div class="mb-2 mr-2 bg-teal-300">
            <p class="w-full bg-red-500 text-base hover:hidden">Welcome to
                <span>TailwindCSS</span>
            </p>
        </div>

        <div class="mb-2 mr-2 bg-teal-300 w-4/12 flex justify-center cursor-move">
            <p class="text-xl">Welcome to <span class="italic text-gray-900  opacity-50">TailwindCSS</span></p>
        </div>

        <div class="text-2xl mb-2 mr-2 md:bg-teal-300 lg:bg-red-300 sm:bg-blue-300 select-none">
            <p>Welcome to TailwindCSS</p>
        </div>

        <div class="text-xl px-3 py-1 font-black mb-2 mr-2 bg-teal-300 rounded-r border-l-4 border-green-700 shadow-xl shadow-black select-all">
            <p>Welcome to TailwindCSS</p>
        </div>

        <div class="ml-5 flex flex-row">
            <input type="text" placeholder="E-mail" class="mb-2 mr-2 focus:border-2 focus:bg-indigo-100 hover:border-2 hover:rounded-lg hover:border-green-500 shadow-md shadow-indigo-900"></input>

            <button class="bg-green-500 hover:bg-yellow-500 rounded px-3 py-1 border-l-8 border-green-700"><span
                    class="text-sm font-bold text-blue-800">Login &rarr;</span></button>

        </div>

    </div>
@endsection
