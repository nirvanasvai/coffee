@extends('layouts.app')

@section('content')
    <div class="container">
        @livewire('device-create-wire',['cities'=>$cities,'company'=>$company])
    </div>

@endsection
