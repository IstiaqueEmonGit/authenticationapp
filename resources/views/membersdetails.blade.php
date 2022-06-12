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
                            <x-table-column>User_id</x-table-column>
                            <x-table-column>Name</x-table-column>
                            <x-table-column>Email</x-table-column>
                            <x-table-column>Account Created At</x-table-column>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $member)
                        <tr>
                             <x-table-column>{{$member->id}}</x-table-column>
                             <x-table-column>{{$member->name}}</x-table-column>
                             <x-table-column>{{$member->email}}</x-table-column>
                             <x-table-column>{{$member->created_at}}</x-table-column>
                      
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class='row'>
                        {{$members->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>