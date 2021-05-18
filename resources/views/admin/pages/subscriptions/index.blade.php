@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Список подписок:
                    </div>
                    <div class="card-body">
                        @if(count($subscriptions) > 0)
                            @foreach($subscriptions as $subscription)
                                <span>{{ $subscription->email }},</span> <br>
                            @endforeach
                        @else
                            Подписок нет
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
