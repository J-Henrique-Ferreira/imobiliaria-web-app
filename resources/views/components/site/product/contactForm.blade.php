<section>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <p class="text-center fs-5 fw-semibold text-dark text-opacity-75 text-uppercase mt-3">Fale com um corretor</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex flex-column align-content-center gap-3 needs-validation bg-transparent bg-danger">
                        <div class="">
                            <label for="validationCustom01" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Seu nome</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="">
                            <label for=" validationCustom02" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Número de celular</label>
                            <input type="tel" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" name="phone_number" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="">
                            <label for="validationCustom03" class="form-label text-dark p-0 opacity-75 d-block  gap-2">Seu email <small>(opcional)</small></label>
                            <input type="email" class="form-control" id="validationCustom03" name="email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <input class="form-check-input" type="hidden" value="{{$productCode}}" name="product_code" id="invalidCheck" required>

                        <div class="col-12 col-md-3 mt-4 mt-md-5 mx-auto">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button> -->
                    <button class="btn w-50 text-white mx-auto" type="submit" style="background-color: rgb(18 71 148 / 98%);">Enviar contato</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 



-->