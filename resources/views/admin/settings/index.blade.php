
    @extends('layouts.app')
    @section('title', 'Settings')
    @section('main-content')

                @if (session('status'))
                    <div class="text-green-500">
                        {{ session('status') }}
                    </div>
                @endif

                    <h1>THIS SETTINGS CONTENT</h1>
     
    @endsection
       
    