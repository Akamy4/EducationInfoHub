@extends('layouts.app')

@section('content')
    <style>
        p{
            font-size: 18px;
        }
        li {
            font-size: 18px;
        }
        tr,td {
            font-size: 18px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="profile-header">
                        <!-- Данные пользователя -->
                        <h1>{{$user['name']}}</h1>
                        <p>Должность: {{$user->position->name}}</p>
                        <p>Кафедра: {{$user->department->name}}</p>
                        <p>Email: {{$user->email}}</p>
                        <p>Опыт работы: {{$user->age_of_exp}}</p>
                        <p>Дисциплины: {{$user->subjects}}</p>
                    </div>
                    <div class="profile-header mb-2">
                        @auth
                            <a href="{{ url('/profile') }}" class="btn btn-secondary">Редактировать профиль</a>
                        @endauth
                    </div>
                    <div class="profile-header">
                        <!-- Фотография пользователя -->
                        <img src="{{ asset('storage/images/' . $user->image) }}" class="card-img">
                    </div>
                </div>
                    <div class="profile-content mt-2">
                        <!-- Блок "НИР" -->
                        <div class="profile-section">
                            <h2>НИР</h2>
                            <table width="100%">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th>Файл</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->nir as $nir)
                                    <tr>
                                        <td>{{$nir->name}}</td>
                                        <td>{{$nir->description}}</td>
                                        <td>
                                            @if($nir->file)
                                                <a href="{{asset('storage/docs/' . $nir->file)}}" download>Скачать</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Блок "Образование" -->
                        <div class="profile-section mt-3">
                            <h2>Образование</h2>
                            <table width="100%">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Адресс</th>
                                    <th>Год поступления</th>
                                    <th>Год завершения</th>
                                    <th>Специальность</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->teacherEducation as $item)
                                    <tr>
                                        <td>{{$item->education->name}}</td>
                                        <td>{{$item->education->address}}</td>
                                        <td>{{$item->education->year_of_admission}}</td>
                                        <td>{{$item->education->year_of_ending}}</td>
                                        <td>{{$item->education->speciality}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        <!-- Блок "Сертификаты" -->
                        <div class="profile-section mt-3">
                            <h2>Сертификаты</h2>
                            <table width="100%">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Описание</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->certificate as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
