
    @extends('layouts.app')
    @section('title', 'Leave')
    @section('main-content')

                @if (session('status'))
                    <div class="text-green-500">
                        {{ session('status') }}
                    </div>
                @endif

                    <h1>THIS LEAVE CONTENT</h1>
     
    @endsection
       
    