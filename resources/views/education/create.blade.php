@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Добавление образования') }}</div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('education.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Название') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="{{ old('title') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Адресс') }}</label>
                                <div class="col-md-6">
                                    <textarea id="address" class="form-control mt-2" name="address" rows="4"
                                              required>{{ old('address') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="year_of_admission"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Год поступления') }}</label>
                                <div class="col-md-6">
                                    <input id="year_of_admission" class="form-control mt-2" name="year_of_admission"
                                              required>{{ old('year_of_admission') }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="year_of_ending"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Год окончания') }}</label>
                                <div class="col-md-6">
                                    <input id="year_of_ending" class="form-control mt-2" name="year_of_ending"
                                              required>{{ old('year_of_ending') }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="speciality"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Специальность') }}</label>
                                <div class="col-md-6">
                                    <input id="speciality" class="form-control mt-2" name="speciality"
                                              required>{{ old('speciality') }}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary mt-2">
                                        {{ __('Создать') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
