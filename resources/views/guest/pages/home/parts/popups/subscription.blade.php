<div class="common-popup js-common-popup" data-name="subscribe">
    <div class="common-popup-inner">
        <div class="common-popup__close js-common-popup-close" tabindex="0"></div>
        <div class="common-popup__header"></div>
        <div class="common-popup__container">
            <div class="common-popup__content js-common-popup-content">

                <div class="form-container form-subscribe _success2">
                    <form id="formOrderVacancy" class="form js-form js-ajax" name="feedback" method="POST" action="{{ route('api.subscription.vacancy.post') }}"
                          enctype="multipart/form-data">
                        <input class="js-form-field js-form-cid" type="hidden" name="cid">

                        <h2 class="form-title">Откликнуться на вакансию</h2>
                        <div class="form-wrap">
                            <div class="form-group">
                                <div class="form-item js-form-item">
                                    <input class="form-input js-form-field" id="email" type="email" name="email"
                                           required>
                                    <label class="form-label" for="email">Укажите ваш e-mail</label>
                                </div>
                                <div class="form-item _checkbox js-form-item">
                                    <input class="form-input js-form-field js-form-btn-disabler" id="agree"
                                           type="checkbox" name="agree" value="yes" required>
                                    <label class="form-label" for="agree">Нажимая кнопку «Отправить» я даю свое <a
                                            href="" target="_blank">согласие на обработку персональных
                                            данных</a></label>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button class="button js-form-btn"><i><i>Подписаться</i></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="form-success">
                        <h2 class="form-title">Спасибо за подписку!<br> Вы первыми узнаете о появлении новых
                            вакансий</h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="common-popup__footer"></div>
    </div>
</div>
