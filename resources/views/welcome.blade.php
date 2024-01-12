@extends('layouts.app')

@section('content')
                <div class="flex bg-opacity-75 text-uppercase vh-100 mh-100 mx-auto pt-xxl-5">
                    @guest()
                    <div class="text-center">
                        <h1 class="text-center text-uppercase ">
                            Вы находитесь на Портале сознательных граждан «Нарушениям.Нет»
                        </h1>
                        <p>
                            Для использования системы необходимо зарегестрироваться
                        </p>
                    </div>
                    @endguest
                        @if(Auth::user())
                            <div class="text-center">
                                <h1 class="text-center text-uppercase ">
                                    Вы находитесь на Портале сознательных граждан «Нарушениям.Нет»
                                </h1>

                                <p>
                                    Для использования системы необходимо заполнить поле заявки и она уйдет администратору
                                </p>
                            </div>
                        @endif

                </div>

@endsection



