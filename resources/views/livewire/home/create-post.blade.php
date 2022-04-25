<div>

    <div class="modal_default" data-modal="post">
        <div class="d-flex w-100 h-100 position-relative align-items-center justify-content-center">
            <div class="bg"></div>

            <div class="container_form">
                <div class="d-block d-lg-flex">
                    <div class="user_photo" style="background-image:url(assets/images/users/01.png);"></div>


                    <form wire:submit.prevent="createPost">

                        <textarea class="mb-2" name="content" wire:model.defer="content"></textarea>

                        <div class="d-flex align-items-center justify-content-between">

                            <div>
                                <input type="file" id="file" name="medias" style="display:none" wire:model="medias">

                                     <a href="javascript:chooseFile()">
                                        <i class="lab la-youtube mr-1"></i>
                                    </a>

                                <input type="file" id="file" name="medias" style="display:none" wire:model="medias">

                                <a href="javascript:chooseFile()">
                                    <i class="las la-camera mr-1"></i>
                                </a>

                                <i class="las la-comment"></i>

                            </div>


                            <div>

                                <input type="reset"  value="Cancelar" class="btn-primary" onClick="Cancel()">

                                <button class="btn-primary">Publicar</button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
