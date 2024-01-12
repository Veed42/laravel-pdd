@extends('layouts.app', ['tittle' => 'Редактирование'])

@section('content')
    <div>

    </div>
    <h1 class="mt-5 text-center">
        Страница редактирования заявки
    </h1>
    <div class="container vh-100">
        <form action="{{route('statement.update', $statement->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="row mb-3 flex-column">
                <label for="name" class="mt-3">{{ __('Имя') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$statement->user->name}}"   autofocus>


                </div>
                <div class="col-md-6 form-group">
                    <label class="mt-3" for="lastname">{{__('Фамилия')}}</label>
                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $statement->user->lastname }}"  autofocus>

                </div>

                <div class="col-md-6">
                    <label class="mt-3" for="surname">{{__('Отчество')}}</label>
                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $statement->user->surname}}"  autofocus>

                </div>

                <div class="col-md-6">
                    <label class="mt-3" for="login">{{__('Логин')}}</label>
                    <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ $statement->user->login }}"  autofocus>

                </div>
{{--                Выбор из выпадающего списка статус заявки чтобы отредачить:3--}}
                <div class="form-group mt-3">
                    <span class="mb-3">Статус заявки</span>
                    <div class="mt-2">
                        @php $status = old('status') ?? $statement->status ?? 0 @endphp
                        <select name="status" class="form-control" title="Статус заказа">
                            @foreach ($statuses as $key => $value)
                                <option  value="{{ $key }}" @if ($key == $status) selected @endif>
                                    {{ $value }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
