@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($devices as $item)
            <div class="mr-2 pt-2">
                <div class="text-center text-dark @include('components.status',['item'=>$item])">
                    <a class="nav-link text-dark" href="{{route('device.inner.city',$item->cityRelationship->slug)}}">
                        <h4 class="">{{$item->cityRelationship->name}}</h4><p>{{$item->companyRelationship->name}}</p>
                        <p>{{$item->filial_name}}</p>
                        <p>{{$item->name}}</p> </a>

                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
