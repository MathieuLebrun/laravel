@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col  py-32 px-6 lg:px-8">
        
        <h1 class="mt-6 text-center text-5xl font-extrabold text-gray-900">Créer votre compte</h1>

        <div class="mt-20 sm:mx-auto sm:w-full sm:max-w-md">
                <div class= "bg-white py-5 px-6 shadow rounded-lg sm:px-15">
                        <form  action="/" method="post" class="mb-0 scapce-y-6">
                                
                                @csrf
                                <div class="py-4">
                                        <label class="block text-sm font-medium text-gray-700"> Prénom Nom</label>
                                        <div class = "mt-4">
                                                <input type="text" name="name" placeholder="Prenom nom" class = "w-full border
                                                border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none 
                                                focus:border-indigo-500 focus:ring focus:ring-indigo-500">
                                        </div>
                                        @if ($errors->has('name'))
                                                <p class="text-red-500">{{ $errors->first('name') }}</p>
                                        @endif

                                </div>

                                <div class="py-6">
                                        <label class="block text-sm font-medium text-gray-700"> Adresse e-mail</label>
                                        <div class = "mt-4">
                                                <input type="email" name="email" placeholder="Email" class = "w-full border
                                                border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none 
                                                focus:border-indigo-500 focus:ring focus:ring-indigo-500">
                                        </div>
                                        @if ($errors->has('email'))
                                                <p class="text-red-500">{{ $errors->first('email') }}</p>
                                        @endif

                                </div>

                                <div class="py-6">
                                        <label class="block text-sm font-medium text-gray-700"> Mot de passe</label>
                                        <div class = "mt-4">
                                                <input type="password" name="password" placeholder="Mot de passe" class = "w-full border
                                                border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none 
                                                focus:border-indigo-500 focus:ring focus:ring-indigo-500">
                                        </div>
                                        @if ($errors->has('password'))
                                                <p class="text-red-500">{{ $errors->first('password') }}</p>
                                        @endif

                                </div>

                                <div class="py-6">
                                <input type="submit" value="M'inscrire" class="w-full flew justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                </div>

                        </form>

                </div>
        </div>
</div>
@endsection  