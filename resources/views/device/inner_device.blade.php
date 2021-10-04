@extends('layouts.app')

@section('title',$device->name)

@section('content')
    @livewire('device-inner-wire',['device'=>$device,'downtimes'=>$downtimes])
@endsection
