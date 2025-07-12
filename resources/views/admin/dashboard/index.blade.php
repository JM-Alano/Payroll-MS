@extends('layouts.app')

@section('title', 'Dashboard')

@section('main-content')
    @if (session('status'))
        <div class="text-green-500">
            {{ session('status') }}
        </div>
    @endif

    <h1>THIS DASHBOARD CONTENT</h1>
@endsection