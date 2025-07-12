
    @extends('layouts.app')
    @section('title', 'Payslips')
    @section('main-content')

                @if (session('status'))
                    <div class="text-green-500">
                        {{ session('status') }}
                    </div>
                @endif

                    <h1>THIS PAYSLIPS CONTENT</h1>
     
    @endsection
       
    