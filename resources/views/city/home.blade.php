@extends('layouts.app')

@section('content')
<div class="container">
    <br>
   @if (auth()->user()->role ==1)
        <a href="{{route('city.create')}}" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Создать</a>

    @endif
    <div class="row">
        @foreach ($cities as $item)
            <div class="col-sm-3 pt-2">
                <div class="card @if ($item->device['0']->status==1)
                        bg-success
                        @elseif ($item->device['0']->status ==2)
                            bg-warning
                            @else
                        bg-danger
@endif">
                    <a class="nav-link text-dark" href="{{route('device.inner.city',$item->slug)}}">
                    <div class="card-body">
                        <p class="card-title">{{$item->name}}</p>
                       @foreach ($item->device as $val)
                            <p class="card-text">{{$val->name}}</p>
                       @endforeach
                    </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
