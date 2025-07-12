
    @extends('layouts.app')
    @section('title', 'Payroll')
    @section('main-content')

                @if (session('status'))
                    <div class="text-green-500">
                        {{ session('status') }}
                    </div>
                @endif

                    <h1>THIS PAYROLL CONTENT</h1>
     
    @endsection
       
    