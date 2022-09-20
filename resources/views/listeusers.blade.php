@extends('layout.app')

@section('content')

<div class="min-h-screen bg-gray-100 flex flex-col  py-12 px-6 lg:px-8">
        
        <h1 class="mt-6 text-center text-5xl font-extrabold text-gray-900">Liste des utilisateurs</h1>

        <div class="mt-20 sm:mx-auto sm:w-full p-20 ">
                <div class= "bg-white py-5 px-6 shadow rounded-lg sm:px-15">
                        
                        <table class="w-full">
                                <thead class="bg-gray-50 border-b-2 border-gray-200">
                                        <tr>
                                                <th class="p-3 text-sm font-semibold tracking-wide text-left">id</th>
                                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Prénom Nom</th>
                                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                                                <th class="p-3 text-sm font-semibold tracking-wide text-left">Accès à ma page</th>
                                        </tr>
                                </thead>

                                <tbody>
                                @if ($users->count() > 0)
                                @foreach($users as $user)
                                        <tr>
                                                <th class= "p-3  text-sm text-gray-700">{{ $user -> id }}</th>
                                                <th class= "p-3 px-3 text-sm text-gray-700 text-left">{{ $user -> name }}</th>
                                                <th class= "p-3 px-3 text-sm text-gray-700 text-left">{{ $user -> email }}</th>
                                                <th class= "p-3 px-3 text-sm text-gray-700 text-left"><a class="font-bold text-blue-500 hover:underline" href=" {{ route('users.show', ['id' => $user->id]) }} "> Ma page </a></th>
                                        </tr>
                                        
                                @endforeach
                                @else
                                        <span>Aucun utilisateur en base de données</span>
                                @endif
                                </tbody>
                        </table>

                        
                </div>
        </div>
</div>

@endsection