@extends('layout')
@section('content')
    <div class="content">
        <div class="content-button-row">
            <div class="container">
                <a href="/" class="content-button-row__button button-rounding button-rounding_med button-rounding_dark">&lt; Вернуться к списку коробок</a>
            </div>
        </div>
        <div class="help-padge">
            <div class="container">
                <div class="row dark-card">
                    <div class="head-xs-12 ">
                        <div class="help-padge__header text-block-black text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Пользовательское соглашение</div>
                    </div>
                    <div class="license_block-xs-12 license_block-sm-12 license_block-md-6 license_block-lg-7 ">
                        <div class="faq-block">
                            <div class="faq-block__answer text-block">
                                Внимание! Настоящее пользовательское соглашение (далее по тексту также Соглашение) распространяется на все правоотношения, возникающие между
                                правообладателем сетевого ресурса https://wwbox.by и его посетителем (потребителем). При использовании данного сетевого ресурса предполагается,
                                что оборудование каждого из участников правоотношений технически исправно, не имеет программных и иных изъянов, не действует под влиянием вредоносного
                                кода и имеет достаточную пропускную способность и иные характеристики канала связи, позволяющие использовать содержимое данного сетевого ресурса в полной
                                мере. Данное соглашение является юридически обязательным документом для всех Пользователей (Потребителей), посещающих и использующих Сайт в соответствии
                                с его основным назначением и содержанием. Любой Пользователь должен ознакомиться с настоящим Соглашением и принять все его положения и условия. Используя
                                Сайт, Пользователь настоящим подтверждает и заверяет Администрацию Сайта, что имеет необходимую право- и дееспособность, достаточную для использования
                                Сайта в соответствии с его основным назначением и содержанием.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                1. Данное Соглашение предусматривает формализацию процесса использования посетителем (потребителем) всех возможностей сетевого ресурса https://wwbox.by.
                                К возможностям указанного сетевого ресурса относятся нижеперечисленные пункты, но не ограничиваясь:
                            </div>
                            <div class="faq-block__answer text-block">1.1. предоставление информации о товарах категория бытовая электроника, а также об их стоимости;</div>
                            <div class="faq-block__answer text-block">1.2. формальное предложение правообладателя данного сетевого ресурса, адресованное неограниченному кругу посетителей (потребителей) заключить сделку по оказанию услуг по доставке выбранных товаров, с указанием всех необходимых для этого условий (публичная оферта, предусмотренная ст. 407 Гражданского кодекса Республики Беларусь);</div>
                            <div class="faq-block__answer text-block">1.3. программный код, интегрированный в структуру данного сетевого ресурса, результат действия которого представляет собой автоматическую нерепрезентативную выборку товара в случае заключения сделки с посетителем (потребителем) ресурса;</div>
                            <div class="faq-block__answer text-block">1.4. интеграция с сервисами по оплате совершённой покупки Unitpay и Free-Kassa;</div>
                           <!-- <div class="faq-block__answer text-block">1.5. техническая поддержка, реализованная в виде онлайн-консультанта.</div> -->
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                2. Данное Соглашение, при безусловном его принятии посетителем (потребителем) путём авторизации на сайте при помощи одной из социальных сетей, считается акцептированным и приобретает силу публичного договора (ст. 396 Гражданского кодекса Республики Беларусь).
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                3. Предметом Соглашения, при его акцепте посетителем (потребителем), является купля-продажа товаров, согласно каталогу категорий продуктов,
                                размещенному на главной странице сетевого ресурса https://wwbox.by, а также услуг по доставке (в том числе продаже) имеющихся у посетителя (потребителя) таких продуктов.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                4. Особенностью получения товара является выбор посетителем (потребителем) интересующей его категории товара.
                                Стоимость каждого товара, входящего в конкретную категорию, указывается в каталоге и является неизменной.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                5. Товары, входящие в одну категорию, приравниваются между собой по стоимости и по всем другим показателям.
                                В связи с этим после выбора интересующей категории происходит автоматическая нерепрезентативная выборка определённого товара,
                                которую осуществляет в автоматическом режиме специальный программный код, интегрированный в структуру сетевого ресурса https://wwbox.by,
                                после чего посетитель (потребитель) получает возможность сделать заказ на доставку полученного товара.
                                Данное условие является обязательным, и в случае несогласия с ним посетитель (потребитель) ресурса имеет право отказаться от заключения сделки.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                6. При использовании приобретённого товара гарантируется его работоспособность и соответствие
                                характеристикам соответствующей категории товаров. При этом следует иметь в виду, что, несмотря на одинаковую стоимость товаров,
                                их ценность может колебаться в широком диапазоне.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                7. Ознакомление со всей информацией, размещённой на страницах сетевого ресурса https://wwbox.by, является обязательным этапом перед
                                акцептованием данного Соглашения.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                8. В случае внесения изменений в Соглашение, такие изменения вступают в силу с момента опубликования новой редакции Соглашения на Сайте,
                                если иной срок вступления изменений в силу не определен дополнительно при их публикации.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                9. Настоящее Соглашение вводится на неопределенный срок и утрачивает свою силу при его аннулировании Администрацией Сайта.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                10. Отмена совершённого акцепта (одобрения и безоговорочного согласия со всеми условиями) допускается только в случае технического сбоя,
                                непредумышленной ошибки с той или другой стороны сделки или в связи с возникновением обстоятельств непреодолимой силы. Во всех иных случаях сделка
                                не может быть отменена.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                11. При возникновении споров и спорных ситуаций стороны обязуются разрешить возникший вопрос во внесудебном порядке.
                                Обо всех случаях незаконного использования личных данных, чужих электронных средств оплаты и других нарушениях посетитель
                                (потребитель) должен незамедлительно сообщить в службу поддержки сетевого ресурса https://wwbox.by на электронную почту mail@wwbox.by.
                                Срок для ответа на предъявленную претензию составляет 10 (десять) рабочих дней с момента ее получения.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_color_black">
                                12. В случае невозможности урегулировать спор во внесудебном порядке или при совершении правонарушения с использованием личных данных все
                                дальнейшие взаимоотношения могут быть переданы в суд для разбирательства по существу.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop