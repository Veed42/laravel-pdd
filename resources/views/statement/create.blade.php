@extends('layouts.app')

@section('content')
    <h1 class="mt-5 text-center">
        Страница создания заявки
    </h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 vh-100">
                <div class="card mt-5">
                    <div class="card-header text-center">{{ __('Store') }}</div>
                    @if(count($errors) > 0)
                        <div style="color:red">
                            @foreach ($errors->all() as $message)
                                <ul>
                                    <li>{{$message}}</li>
                                </ul>
                            @endforeach
                        </div>
                    @endif
                    <div class="card-body p-lg-5">
                        <form method="POST" action="{{ route('statement.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="number_auto" class="col-md-4 col-form-label text-md-end">{{ __('Регистрационный номер автомобиля') }}</label>

                                <div class="col-md-6">
                                    <input id="number_auto" type="text" class="form-control @error('number_auto') is-invalid @enderror" name="number_auto" autocomplete="current-password" placeholder="Регистрационный номер автомобиля">

                                    @error('number_auto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="description_trespassing" class="col-md-4 col-form-label text-md-end">{{ __('Описание нарушения') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description_trespassing" type="text" class=" input-description form-control p-3 h5 @error('description_trespassing') is-invalid @enderror" name="description_trespassing"  placeholder="Описание нарушения"  ></textarea>

                                    @error('description_trespassing')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
