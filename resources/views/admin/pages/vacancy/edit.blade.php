@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <form method="POST" action="{{ route('vacancy.update', $vacancy->id) }}">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-md-6 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Редактировать вакансию
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
                                <input value="{{ $vacancy->title }}" name="title" type="text" class="form-control"
                                       id="vacancyFormTitleInput" placeholder="Введите название">
                            </div>

                            <div class="mb-3">
                                <label for="vacancyFormSubTitleInput" class="form-label">Подназвание</label>
                                <input value="{{ $vacancy->sub_title }}" name="sub_title" type="text"
                                       class="form-control" id="vacancyFormSubTitleInput"
                                       placeholder="Введите подназвание">
                            </div>

                            <div class="mb-3">
                                <p>Тип</p>
                                @if(count($vacancyTypes) > 0)
                                    @foreach($vacancyTypes as $vacancyType)
                                        <div class="form-check">
                                            <input
                                                {{ $vacancy->type_id == $vacancyType->id ? 'checked' : '' }} class="form-check-input"
                                                type="radio" name="type_id"
                                                id="vacancyFormTypeRadio-{{ $vacancyType->id }}"
                                                value="{{ $vacancyType->id }}">
                                            <label class="form-check-label"
                                                   for="vacancyFormTypeRadio-{{ $vacancyType->id }}">
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

                                    @php
                                        $currentLocations = $vacancy->locations->pluck('id')->toArray();
                                    @endphp

                                    @foreach($vacancyLocations as $vacancyLocation)
                                        <div class="form-check">
                                            <input
                                                {{ in_array($vacancyLocation->id, $currentLocations) ? 'checked' : '' }} class="form-check-input"
                                                name="locations[]" type="checkbox" value="{{ $vacancyLocation->id }}"
                                                id="vacancyFormLocationCheckbox-{{ $vacancyLocation->id }}">
                                            <label class="form-check-label"
                                                   for="vacancyFormLocationCheckbox-{{ $vacancyLocation->id }}">
                                                {{ $vacancyLocation->title }}
                                            </label>
                                        </div>
                                    @endforeach
                                @else
                                    Нет доступных локаций
                                @endif
                            </div>

                            <div class="mb-3">
                                <p>Статус</p>
                                <div class="form-check">
                                    <input {{ $vacancy->status == true ? 'checked' : '' }} class="form-check-input"
                                        type="radio" name="status"
                                        id="vacancyFormStatusRadioTrue"
                                        value="1">
                                    <label class="form-check-label"
                                           for="vacancyFormStatusRadioTrue">
                                        Найден
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input {{ $vacancy->status == false ? 'checked' : '' }} class="form-check-input"
                                        type="radio" name="status"
                                        id="vacancyFormStatusRadioFalse"
                                        value="0">
                                    <label class="form-check-label"
                                           for="vacancyFormStatusRadioFalse">
                                        Не найден
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <button type="submit" class="btn w-100 btn-primary">Обновить</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
