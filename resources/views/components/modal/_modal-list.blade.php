<div class="list">
    @for($i = 0; $i < 10; $i++)
        @include("components.modal._modal-list-item", ['index' => $i])
    @endfor
</div>