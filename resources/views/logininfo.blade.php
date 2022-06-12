<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full whitespace-nowrap">
                    <thead >
                        <tr>
                            <x-table-column>Name</x-table-column>
                            <x-table-column>Last_Logged_in_at</x-table-column>
                            <x-table-column>Logged_out_at</x-table-column>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr>
                             <x-table-column>{{$data->name}}</x-table-column>
                             <x-table-column>{{$data->logged_in_at}}</x-table-column>
                             <x-table-column>{{$data->logged_out_at}}</x-table-column>
                      
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class='row'>
                        {{$datas->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
