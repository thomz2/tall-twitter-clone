@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        @livewire('update-user-form', ["user" => $user])
    </div>
@endsection