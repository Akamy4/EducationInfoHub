@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Регистрация') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Почта') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Подтверждение пароля') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="department_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Должность') }}</label>

                                <div class="col-md-6">
                                    <select name="position_id" class="form-control">
                                        @foreach ($positions as $position)
                                            <option value="{{ $position['id'] }}">{{ $position['name']}}</option>
                                        @endforeach
                                    </select>
                                    @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="department_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Кафедра') }}</label>

                                <div class="col-md-6">
                                    <select name="department_id" class="form-control">
                                        @foreach ($departments as $department)
                                            <option value="{{ $department['id'] }}">{{ $department['name']}}</option>
                                        @endforeach
                                    </select>
                                    @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="age_of_exp"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Опыт работы (Годы)') }}</label>

                                <div class="col-md-6">
                                    <input id="age_of_exp" type="number"
                                           class="form-control @error('age_of_exp') is-invalid @enderror" name="age_of_exp"
                                           value="{{ old('age_of_exp') }}" required autocomplete="age_of_exp">

                                    @error('age_of_exp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="subjects"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Дисциплины') }}</label>

                                <div class="col-md-6">
                                    <input id="subjects" type="text"
                                           class="form-control @error('subjects') is-invalid @enderror" name="subjects"
                                           value="{{ old('subjects') }}" required autocomplete="subjects">

                                    @error('subjects')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="department_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Должность') }}</label>

                                <div class="col-md-6">
                                    <select name="position_id" class="form-control">
                                        @foreach ($positions as $position)
                                            <option value="{{ $position['id'] }}">{{ $position['name']}}</option>
                                        @endforeach
                                    </select>
                                    @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Фотография') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control" name="image" required
                                           autocomplete="image">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Зарегестрироваться') }}
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
