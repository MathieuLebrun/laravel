@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col  py-40 px-6 lg:px-8">
        
    <h1 class="mt-6 text-center text-5xl font-extrabold text-gray-900">Se connecter</h1>

    <div class="mt-20 sm:mx-auto sm:w-full sm:max-w-md">
        <div class= "bg-white py-5 px-6 shadow rounded-lg sm:px-15">
            <form action="/connexion" method="post" class="mb-0 scapce-y-6">
                {{ csrf_field() }}

                <div class="py-4">
                    <label class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                    <div class = "mt-4">
                        <input class = "w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500" type="email" name="email" value="{{ old('email') }}" >
                    </div>
                    @if ($errors->has('email'))
                        <p class="text-red-500">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="py-6">
                    <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <div class="control">
                        <input class = "w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500" type="password" name="password">
                    </div>
                    @if($errors->has('password'))
                        <p class="text-red-500">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="py-6">
                    <div class="control">
                        <button class="w-full flew justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">Se connecter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
