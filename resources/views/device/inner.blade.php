@extends('layouts.app')

@section('title',$city->name)

@section('content')

    <div class="container">
        <div class="">
            <h4 class="card-header text-center">{{$city->name}}</h4>
            <div class="row pt-2 mb-2 ml-1 mr-1">
            @foreach ($city->companies as $item)
                    <div class="card col-sm-6">
                        <h2 class="text-lg-center">{{$item->name}}</h2>
                        @isset($item->deviceRelationship->status)
                            <h3 class="text-lg-center">{{$item->deviceRelationship->filial_name}}</h3>
                            <a href="{{route('device.inner',$item->deviceRelationship->id)}}" class="nav-link text-dark @if ($item->deviceRelationship->status==1)
                                    badge badge-success
@elseif ($val->deviceRelationship->status ==2)
                                    badge badge-warning
@else
                                    badge badge-danger
@endif">
                                <h2 class="text-lg-center pt-2">{{$item->deviceRelationship->name}}</h2>
                            </a>
                        @endisset
                    </div>

            @endforeach
            </div>
        </div>
    </div>

@endsection
