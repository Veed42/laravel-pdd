@extends('layouts.app')

@section('content')
    <div class="vh-100">
        <div class="container ">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Страница просмотра заявлений и создания заявлений
                </h1></div>

            <a class="link-offset-1-hover" href="{{route('statement.create')}}">Создать заявление</a>
        </div>
        <table  class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Номер автомобиля</th>
                <th scope="col">Описание нарушения</th>
                <th scope="col">Статус</th>
            </tr>
            </thead>
            <tbody>
            @foreach(Auth::user()->statements as $statement)
            <tr>
                <td>{{$statement->id}}</td>
                <td>{{$statement->number_auto}}</td>
               <td>{{$statement->description_trespassing}}</td>
                <td>
                    @if ($statement->status == 0)
                        <span class="text-danger">{{ $statuses[$statement->status] }}</span>
                    @elseif (in_array($statement->status, [1,2]))
                        <span class="text-success">{{ $statuses[$statement->status] }}</span>
                    @else
                        {{ $statuses[$statement->status] }}
                    @endif
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>

{{--        <div class="h-50 container mt-5 ">--}}
{{--            @foreach(Auth::user()->statements as $statement)--}}
{{--            <div>{{$statement->number_auto}}</div>--}}
{{--            <div>{{$statement->description_trespassing}}</div>--}}

{{--            @endforeach--}}
{{--        </div>--}}

    </div>

@endsection
