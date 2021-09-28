@extends('layouts.app')

@section('title',$city->name)

@section('content')

    <div class="container">
        <div class="card">
            <h4 class="card-header text-center">{{$city->name}}</h4>
            <div class="row pt-2 mb-2 ml-1 mr-1">
            @foreach ($city->device as $item)
                    <div class="col-sm-6">
                        <div class="card @if ($item->status == 1)
                            bg-success
                            @elseif ($item->status == 2)
                                bg-warning
                                @else
                                bg-danger
                        @endif">
                            <div class="card-body">
                                <a href="{{route('device.inner',$item->id)}}" class="nav-link text-dark">
                                    <h5 class="card-title">{{$item->name}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>

@endsection
