<section id="vacancies" class="vacancies js-section" data-section="vacancies" data-menu="black">
    <div class="vacancies__head">
        <div class="content">
            <h2 class="vacancies__heading">Актуальные вакансии</h2>
            <div class="vacancies__info">
                Мы&nbsp;растем и&nbsp;развиваемся, все больше проектов и&nbsp;направлений. Проверьте подходим&nbsp;ли
                мы&nbsp;друг другу.
            </div>
        </div>
    </div>
    <div class="content">
        <div class="vacancies__list">
            <ul>
                @if(count($vacancies) > 0)
                    @foreach($vacancies as $vacancy)

                        <li class="vacancies__item">
                            <a href="">
                                <span class="vacancies__card">
                                    <span class="vacancies__card-shadow"></span>
                                    <span class="vacancies__card-img"
                                          @if($vacancy->type_id == 1)
                                          style="background-color: #814599; fill: #6e3b82;"
                                          @elseif($vacancy->type_id == 2)
                                          style="background-color: #269dd6; fill: #148ac9;"
                                          @elseif($vacancy->type_id == 3)
                                          style="background-color: #3fa35d; fill: #399154;"
                                          @else
                                          style="background-color: #269dd6; fill: #148ac9;"
                                          @endif
                                    >
                                        @if($vacancy->status === 0)
                                            <img src="{{ \Storage::url($vacancy->type->image_src) }}" alt=""/>
                                        @else
                                            <img src="{{ asset('assets/img/vacancy/vacancy_closed.png') }}" alt=""/>
                                        @endif
                                        <svg xmlns="http://www.w3.org/2000/svg" class="vacancies__card-img-pattern">
                                            <pattern id="pattern1" patternUnits="userSpaceOnUse" viewBox="0 0 977 547"
                                                     width="500" height="280">
                                                <use xlink:href="#pattern"></use>
                                            </pattern>
                                            <rect width="100%" height="100%" fill="url(#pattern1)"></rect>
                                        </svg>
                                    </span>
                                    <span class="vacancies__card-title">{{ $vacancy->title }}</span>
                                        <span class="vacancies__card-city">
                                            @foreach($vacancy->locations as $location)
                                                {{ $location->title }} <br>
                                            @endforeach
                                        </span>
                                    </span>
                            </a>
                        </li>

                    @endforeach
                @else
                    Вакансии не найдены
                @endif
            </ul>
        </div>
        <div class="vacancies__request">
            <div class="vacancies__request-title">Нет подходящей вакансии?</div>
            <div class="vacancies__request-text">
                <p>
                    Хочешь стать частью команды CreativePeople, но не нашел подходящей для себя
                    вакансии? Пиши нам на почту <a href="mailto:superhero@cpeople.ru">superhero@cpeople.ru</a>
                </p>
                <p>
                    Напиши о себе, в каком направлении хочешь развиваться, не забудь про ссылки
                    на свои проекты, портфолио и аккаунты в социальных сетях, хотим узнать тебя
                    поближе.
                </p>
                <div class="vacancies__subscribe">
                        <span class="button" data-popup="subscribe"><i
                                class=""><i>Подписаться на обновления</i></i></span>
                </div>
                <p>
                    Кстати, направляя свое резюме и иные персональные данные по указанному
                    адресу вы даете свое <a href="">согласие</a> на обработку персональных данных.
                </p>
            </div>
        </div>
    </div>
</section>
