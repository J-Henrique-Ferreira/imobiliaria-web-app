<section class="p-3 bg-white rounded-2 shadow-sm">
    <h2 class="title-generic">Pefere que o corretor entre em contato?</h2>

    <form class="d-flex flex-column align-content-center gap-3 needs-validation bg-transparent bg-success mt-3">
        <div class="">
            <label for="validationCustom01" class="d-block form-label text-dark p-0 mb-0">Seu nome</label>
            <input type=" text" class="form-control" id="validationCustom01" name="name" placeholder="Fulano de tal..." required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="">
            <label for=" validationCustom02" class="d-block form-label text-dark p-0 mb-0">Número de celular</label>
            <input type="tel" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" name="phone_number" class="form-control" id="validationCustom02" placeholder="(99) 99999-9999" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="">
            <label for="validationCustom03" class="d-block form-label text-dark p-0 mb-0">Seu email <small>(opcional)</small></label>
            <input type=" email" class="form-control" id="validationCustom03" name="email" placeholder="fulanodetal@email.com">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <input class="form-check-input" type="hidden" value="{{$productId}}" name="id" id="invalidCheck" required>

        <button type="submit" class="w-100 shadow btn btn-outline-success nav-link text-center text-uppercase text-white bg-black  py-2 mt-4"
            style="font-size: .8rem;">Enviar dados</button>
    </form>
</section>