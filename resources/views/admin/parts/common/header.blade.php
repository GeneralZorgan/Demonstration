<div class="container border-bottom">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}" aria-current="page">
                    Монитор
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vacancy.index') }}" class="nav-link {{ request()->routeIs('vacancy.index') ? 'active' : '' }}">
                    Вакансии
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('subscription.index') }}" class="nav-link {{ request()->routeIs('subscription.index') ? 'active' : '' }}">
                    Подписки на вакансии
                </a>
            </li>
        </ul>
    </header>
</div>
