@extends('layouts.app')

@section('content')

    <div class="container">
        @if (auth()->user()->role ==1)
            <a href="{{route('device.create')}}" class="btn btn-primary mt-4"><i class="far fa-plus-square"></i> Создать</a>

        @endif
            <div class="row">
                @foreach ($cities as $item)
                    <div class="mr-2 pt-2">
                        <div class="card text-center @isset($item->deviceRelationship->status)
                        @if ($item->deviceRelationship->status == 1)
                                bg-success
                                @elseif ($item->deviceRelationship->status == 2)
                                    bg-warning
                                    @else
                                bg-danger
@endif
                        @endisset">
                            <a class="nav-link text-dark" href="{{route('device.inner.city',$item->slug)}}">
                                <p class="card-title">{{$item->name}}</p> </a>
                        </div>
                        {{--                <div class="">--}}
                        {{--                    @foreach ($item->device as $val)--}}
                        {{--                        <div class="card  @if ($val->status==1)--}}
                        {{--                                bg-success--}}
                        {{--@elseif ($val->status ==2)--}}
                        {{--                                bg-warning--}}
                        {{--@else--}}
                        {{--                                bg-danger--}}
                        {{--@endif">--}}
                        {{--                            <h4 class="pt-4">{{$val->name}}</h4>--}}
                        {{--                        </div>--}}
                        {{--                    @endforeach--}}
                        {{--                </div>--}}
                    </div>
                @endforeach
            </div>
    </div>

@endsection
