<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>


<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include("components.modal._modal-head")

                <section class="list-section">
                    @include("components.modal._modal-top")
                    
                    @include("components.modal._modal-list")

                </section>

                <button id="showMore" class="btn btn-light w-100 ">More results <i class="bi bi-caret-down-fill"></i></button>
                <p class="my-3 text-center"><i class="bi bi-patch-check"></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

            </div>
            @include("components.modal._modal-footer")
        </div>
    </div>
</div>