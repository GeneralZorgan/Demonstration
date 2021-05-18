@extends('layouts.guest')

@section('content')
    <!-- МЕНЮ -->

    @include('guest.pages.home.parts.menu')

    <!-- ШАПКА -->

    @include('guest.pages.home.parts.header')

    <!-- ПРОМО -->

    @include('guest.pages.home.parts.promo')

    <!-- 10 ЛЕТ В ИГРЕ -->

    @include('guest.pages.home.parts.ingame')

    @include('guest.pages.home.parts.facts')

    <!-- ЛИДЕРЫ РЫНКА -->

    @include('guest.pages.home.parts.leaders')

    <!-- ПРОЕКТЫ -->

    @include('guest.pages.home.parts.projects')

    <!-- КОМАНДА -->

    @include('guest.pages.home.parts.command')

    <!-- ВАКАНСИИ -->

    @include('guest.pages.home.parts.vacancies')

    <!-- ФОТОГАЛЕРЕЯ, жизнь внутри -->

    @include('guest.pages.home.parts.photos')

    <!-- /.common-popup -->

    @include('guest.pages.home.parts.popups.subscription')

    <!-- ПОДВАЛ -->

    @include('guest.pages.home.parts.common.footer')

    <!-- СОГЛАСИЕ НА COOKIE -->

    @include('guest.pages.home.parts.popups.cookie')
@endsection
