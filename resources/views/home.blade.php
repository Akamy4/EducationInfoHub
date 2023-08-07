@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('certificates') }}" class="btn btn-primary">Добавить сертификат</a>
                    <a href="{{ route('education') }}" class="btn btn-primary">Добавить образование</a>
                    <a href="{{ route('nir') }}" class="btn btn-primary">Добавить НИР</a>
                    <a href="{{ route('profile.show', ['id' => \Illuminate\Support\Facades\Auth::id()]) }}" class="btn btn-primary">Мой профиль</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
