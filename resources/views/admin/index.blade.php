@extends('layouts.app')

@section('content')
    <div class="vh-100 mt-5 pt-3">
        <h1 class="text-center">Admin panel</h1>
        <div class="px-4">
            <table  class="table table-striped table-bordered ">
                <thead>
                <tr>
                    <th scope="col">Имя пользователя</th>
                    <th scope="col">Номер автомобиля</th>
                    <th scope="col">Описание нарушения</th>
                    <th scope="col">Статус</th>
                    <th><i class="fas fa-eye"></i></th>
                    <th><i class="fas fa-edit"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach($statements as $statement)
                    <tr>
                        <td>{{$statement->user->login}}</td>
                        <td>{{$statement->number_auto}}</td>
                        <td>{{$statement->description_trespassing}}</td>
                        <td>
                            @if ($statement->status == 0)
                                <span class="text-danger">{{ $statuses[$statement->status] }}</span>
                            @elseif (in_array($statement->status, [1,2,3]))
                                <span class="text-success">{{ $statuses[$statement->status] }}</span>
                            @else
                                {{ $statuses[$statement->status] }}
                            @endif
                        </td>
                        <td><a href="{{route('statements.show', $statement->id)}}">
                                <i class="fa fa-eye"></i>
                            </a></td>
                        <td><a href="{{route('statement.edit', $statement->id)}}">
                                <i class="fa fa-edit"></i>
                            </a></td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
