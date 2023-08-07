@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Добавление НИР') }}</div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('nir.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Название') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control mt-2" name="title"
                                           value="{{ old('title') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Описание') }}</label>
                                <div class="col-md-6">
                                    <textarea id="description" class="form-control mt-2 " name="description" rows="4"
                                              required>{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Файл') }}</label>
                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control mt-2" name="file"
                                           value="{{ old('file') }}" required autofocus>
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
