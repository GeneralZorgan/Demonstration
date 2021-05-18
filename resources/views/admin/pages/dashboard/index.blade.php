@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Статистика
                    </div>
                    <div class="card-body">
                        <strong>Доступно вакансий: </strong> {{ $countVacancies }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
