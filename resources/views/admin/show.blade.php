@extends('layouts.app')

@section('content')
    <div class="vh-100 mt-5 pt-3">
        <h1 class="text-center">Admin panel</h1>
        <div class="px-5">
            <table  class="table table-striped table-bordered ">
                <thead>
                <tr>
                    <th scope="col">Имя пользователя</th>
                    <th scope="col">Фамилия пользователя</th>
                    <th scope="col">Отчество пользователя</th>
                    <th scope="col">Номер автомобиля</th>
                    <th scope="col">Описание нарушения</th>
                    <th scope="col">Статус</th>
                    <th><i class="fas fa-edit"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$statement->user->name}}</td>
                    <td>{{$statement->user->lastname}}</td>
                    <td>{{$statement->user->surname}}</td>
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
                    <td>
                        <a href="">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="ms-5 mt-5 " style="font-size: 18px;">
            <a class="link-info text-body text" href="{{route('admin.index')}}">Back</a>
        </div>
    </div>
@endsection
