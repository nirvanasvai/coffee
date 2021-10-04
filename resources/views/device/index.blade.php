@extends('layouts.app')

@section('content')

    <div class="container">
        @if (auth()->user()->role ==1)
            <a href="{{route('device.create')}}" class="btn btn-primary mt-4"><i class="far fa-plus-square"></i> Создать</a>

        @endif
            <table class="table table-striped table-borderless mt-2">
                <thead class="thead-dark">
                <th>Название</th>
                <th>Филиал</th>
                <th>Город</th>
                <th>Состояние</th>
                <th class="text-right">Действие</th>
                </thead>
                <tbody>
                @forelse ($devices as $item)
                    <tr>
                        <td>
                            <a class="nav-link text-dark" href="{{route('device.inner',$item->id)}}">{{ $item->name }}</a>
                        </td>
                        <td>{{ $item->filial_name }}</td>
                        <td>{{ $item->cityRelationship->name }}</td>
                        <td class="@include('components.status',['item'=>$item])">статус</td>
                        <td class="text-right">
                            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('device.destroy', $item) }}" method="post">
                                @method('DELETE')
                                @csrf

                                <a class="btn btn-primary" href="{{ route('device.edit', $item) }}"><i class="fa fa-edit"></i></a>

                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center"><h2>Данные отсутствуют</h2></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="pagination">
                {{$devices->links("pagination::bootstrap-4")}}
            </div>
    </div>

@endsection
