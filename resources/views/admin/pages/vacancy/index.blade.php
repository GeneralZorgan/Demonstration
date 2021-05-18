@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        Список вакансий:
                    </div>
                    <div class="card-body">
                        @if(count($vacancies) > 0)
                            @foreach($vacancies as $vacancy)
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            @if($vacancy->status == 0)
                                                <img width="150" src="{{ \Illuminate\Support\Facades\Storage::url($vacancy->type->image_src) }}">
                                            @else
                                                <img width="150" src="{{ asset('assets/img/vacancy/vacancy_closed.png') }}">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $vacancy->title }}</h5>
                                                <p class="card-text">
                                                    {{ $vacancy->sub_title }}
                                                </p>

                                                <p>
                                                    <a href="{{ route('vacancy.edit', $vacancy->id) }}">Редактировать</a>
                                                </p>

                                                <p>
                                                    <form method="POST" action="{{ route('vacancy.destroy', $vacancy->id) }}">
                                                        @method('DELETE')
                                                        @csrf

                                                        <button type="submit" class="btn btn-outline-danger">Удалить</button>
                                                    </form>
                                                </p>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        Последнее обновление: {{ $vacancy->updated_at->format('d.m.Y') }}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            Вакансий нет
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="{{ route('vacancy.create') }}">Добавить вакансию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
