<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bulletin') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <style>
                    table, th, td {
                      border:1px solid black;
                      text-align: center;
                    }
                    </style>
                <h1>THIS IS LIST OF BULLETIN </h1>
                <table >
                    <tr>
                        <th>Bulletin Title</th>
                        <th>Bulletin Text</th>
                        <th>Bulletin Date</th>
                    </tr>
                    <tr>
                        {{-- @foreach ($bulletin as $item) --}}
                        <td>This is bulletin title 1</td>
                        <td>This is bulletin text 1 containing text for bulletin title 1</td>
                        <td>16/1/2023</td>
                        {{-- @endforeach --}}
                    </tr>
                    <tr>
                        {{-- @foreach ($bulletin as $item) --}}
                        <td>Decade is a destructor of the world</td>
                        <td>Kamen rider decade is the destructor of the world. protect your own world from him.</td>
                        <td>11/1/2023</td>
                        {{-- @endforeach --}}
                    </tr>
                    <tr>
                        {{-- @foreach ($bulletin as $item) --}}
                        <td>Bulletin Title 3</td>
                        <td>This is bulletin title 3</td>
                        <td>11/1/2023</td>
                        {{-- @endforeach --}}
                    </tr>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
