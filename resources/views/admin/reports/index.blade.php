
    @extends('layouts.app')
    @section('title', 'Reports')
    @section('main-content')

                @if (session('status'))
                    <div class="text-green-500">
                        {{ session('status') }}
                    </div>
                @endif

                    <h1>THIS REPORTS CONTENT</h1>
     
    @endsection
       
    