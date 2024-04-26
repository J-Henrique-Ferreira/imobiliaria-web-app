<section class="rounded shadow-sm p-3 mt-5 bg-white" id="contact_form">
    <span class="fs-4 fw-semibold text-dark text-opacity-75">Me interesso por este imóvel</span>
    <div class="w-100 my-4 border border-bottom border-opacity-25"></div>
    <form class="row g-3 needs-validation bg-transparent ">
        <div class="col-12 col-md-3">
            <label for="validationCustom01" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Seu nome</label>
            <input type="text" class="form-control" id="validationCustom01" name="name" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-3">
            <label for="validationCustom02" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Número de celular</label>
            <input type="tel" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" name="phone_number" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-3">
            <label for="validationCustom03" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Seu email <small>(opcional)</small></label>
            <input type="email" class="form-control" id="validationCustom03" name="email" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <input class="form-check-input" type="hidden" value="{{$productCode}}" name="product_code" id="invalidCheck" required>

        <div class="col-12 col-md-3 mt-4 mt-md-5">
            <button class="btn w-100 text-white " type="submit" style="background-color: rgb(18 71 148 / 98%);">Enviar contato</button>
        </div>
    </form>
</section>