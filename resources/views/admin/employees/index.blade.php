
    @extends('layouts.app')
    @section('title', 'Employees')
    @section('main-content')

                @if (session('status'))
                    <div class="text-green-500">
                        {{ session('status') }}
                    </div>
                @endif

                    <h1>THIS EMPLOYEES CONTENT</h1>
     
    @endsection
       
    