@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <form method="POST" action="{{ route('vacancy.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Добавить вакансию
                        </div>
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="vacancyFormTitleInput" class="form-label">Название</label>
                                <input name="title" type="text" class="form-control" id="vacancyFormTitleInput" placeholder="Введите название">
                            </div>

                            <div class="mb-3">
                                <label for="vacancyFormSubTitleInput" class="form-label">Подназвание</label>
                                <input name="sub_title" type="text" class="form-control" id="vacancyFormSubTitleInput" placeholder="Введите подназвание">
                            </div>

                            <div class="mb-3">
                                <p>Тип</p>
                                @if(count($vacancyTypes) > 0)
                                    @foreach($vacancyTypes as $vacancyType)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="type_id" id="vacancyFormTypeRadio-{{ $vacancyType->id }}" value="{{ $vacancyType->id }}">
                                            <label class="form-check-label" for="vacancyFormTypeRadio-{{ $vacancyType->id }}">
                                                {{ $vacancyType->title }}
                                            </label>
                                        </div>
                                    @endforeach
                                @else
                                    Нет доступных типов
                                @endif
                            </div>

                            <div class="mb-3">
                                <p>Локация</p>
                                @if(count($vacancyLocations) > 0)
                                    @foreach($vacancyLocations as $vacancyLocation)
                                        <div class="form-check">
                                            <input class="form-check-input" name="locations[]" type="checkbox" value="{{ $vacancyLocation->id }}" id="vacancyFormLocationCheckbox-{{ $vacancyLocation->id }}">
                                            <label class="form-check-label" for="vacancyFormLocationCheckbox-{{ $vacancyLocation->id }}">
                                                {{ $vacancyLocation->title }}
                                            </label>
                                        </div>
                                    @endforeach
                                @else
                                    Нет доступных локаций
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <button type="submit" class="btn w-100 btn-primary">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
