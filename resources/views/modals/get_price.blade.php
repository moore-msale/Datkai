<div class="modal fade" id="getPrice" tabindex="-1" role="dialog" aria-labelledby="getPrice"
     aria-hidden="true" style="margin-top: 7%;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content get-price-model">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-5 text-center">
                <form action="">
                    <h3 class="modal-title mf-bold text-center">Узнать цену</h3>
                    <input id="token" value="{{csrf_token()}}" type="hidden">
                    <input id="product-id" value="" type="hidden">
                    <input id="client-name" class="w-100 mt-3 modal-input" type="text" placeholder="Ваше имя*" required>
                    <input id="client-phone" class="w-100 mt-3 modal-input" type="number" placeholder="Ваше номер телефона*" required>
                    <input id="client-email" class="w-100 mt-3 modal-input" type="email" placeholder="Ваше e-mail">
                </form>
                <button type="button" class="btn btn-send mt-3 mb-5 py-2 send-price">Отправить</button>
            </div>
        </div>
    </div>
</div>
