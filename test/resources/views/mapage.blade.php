@extends('layout.app')

@section('content')

<div class="min-h-screen bg-gray-100 flex flex-col  py-20 px-6 lg:px-8">
        
    <h1 class="mt-6 text-center text-5xl font-bold text-gray-900">Bonjour <span class="font-extrabold">{{ $user -> name }}</span>, voici votre page personnelle.</h1>

            <form  action="/user/{{ $user -> id }}" method="post">
                
                @csrf
                <div class="mt-20 flex justify-center  ">
                    <div class= "bg-white py-5 px-6 shadow rounded-lg sm:px-15">
                        <textarea class=" text-lg py-5 px-5 focus:outline-none shadow-sm text-sm font-medium border border-gray rounded-lg" type="content" name="text" placeholder="Vous pouvez écrire ici." cols="170" rows="23">{{ $user -> text }}</textarea>
                    </div>
                </div>
                
                <input class="mt-20 text-xl flex sm:mx-auto justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit" href="{{ route('users.updateText', ['id' => $user->id]) }}" value="Mettre à jours votre texte">
            </form>
</div>
@endsection