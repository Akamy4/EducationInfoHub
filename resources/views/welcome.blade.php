@extends('layouts.app')
@section('content')
    <div class="container">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    {{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

                    @if (Route::has('register'))
                        {{--                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="navigation-panel">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('profile.index', ['department_id' => 1])}}">Кафедра Менеджмента и Бизнеса</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('profile.index', ['department_id' => 2])}}">Кафедра Социально-Гуманитарных Наук</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('profile.index', ['department_id' => 3])}}">Кафедра Финансов и Учета</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('profile.index', ['department_id' => 4])}}">Языковой Центр</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('profile.index', ['department_id' => 5])}}">Кафедра Бизнес Информатики</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('profile.index', ['department_id' => 6])}}">Кафедра «Туризма и Гостеприимства»</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center text-center w-100">
                    <form action="{{ route('profile.index') }}" method="GET" class="mb-4 mx-auto" style="width: 100%;">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-4 mb-2">
                                <input type="text" class="form-control" id="title" name="title" placeholder="{{ __('Имя') }}">
                            </div>
                            <div class="col-sm-4 mb-2">
                                <button type="submit" class="btn btn-success w-100">{{ __('Поиск') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-4">
                    {{$users->links()}}
                </div>
                @foreach($users as $user)
                    <div class="card mt-2">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/images/' . $user->image) }}" class="card-img">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name}}</h5>
                                    <p>{{$user->position->name}}</p>
                                    <p>{{$user->email}}</p>
                                    <a href="{{route('profile.show', ['id' => $user['id']]) }}" class="btn btn-secondary" style="display:inline-block;">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="text-center mt-4">
                                        {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
