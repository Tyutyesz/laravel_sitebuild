@php
 $modifierClass = '';
 $descriptionIndex;
 $itemIndex;
 $placeholderIndexRight = $index % 3;
 $placeholderIndexLeft = floor($index / 3);
 if ($index < 3) {
    $descriptionIndex = $index + 3;
    $itemIndex = $index;
 } else {
    $itemIndex = $placeholderIndexLeft . $placeholderIndexRight;
    $descriptionIndex = $itemIndex + 3;
 }

 if($index % 3 == 0){
    $modifierClass = "list-item-description--left";
 } else if($index % 3 == 1) {
    $modifierClass = "list-item-description--center";
 } else {
    $modifierClass = "list-item-description--right";
 }

@endphp
<div class="list-item d-none" style="order: {{$itemIndex}}">
    <picture>
        <source media="(width >= 992px )" srcset="/images/img_9-16.jpg">
        <source media="(width < 992px )" srcset="/images/img_16-9.jpg">
        <img class="list-item__image" src="/images/img_9-16.jpg" alt="Placeholder image 9/16">
    </picture>
    <a class="list-item__link" href="#">Item title {{$index + 1}}</a>
</div>
<div class="list-item-description {{$modifierClass}} d-none" style="order: {{$descriptionIndex}}">
    <button class="list-item-description__close">
        <i class="bi bi-x"></i>
    </button>
    <img class="list-item-description__image" src="/images/img_1-1.jpg" alt="item Image">
    <div class="list-item-description-text">
        <a href="#" class="list-item-description-text__title">Item title {{$index + 1}}</a>
        <div class="list-item-rating">
            <div class="list-item-rating__score list-item-rating__score--high">9.6</div>
            <div class="list-item-rating__sums">115 ratings</div>
        </div>
        <p class="list-item-description-text__address">3535 Miskolc, Tokaji Ferenc utca 51. (Magyarország)</p>
        <p class="list-item-description-text__review">"Item review: Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sunt et pariatur incidun"</p>
        <p class="list-item-description-text__reviewer-name">Reviewer name</p>
        <div class="list-item-details">
            <p class="list-item-details__text">Prices, opening hours and reviews</p>
            <a class="list-item-details__link" href="#">more details <i class="bi bi-chevron-double-right"></i></a>
        </div>
    </div>
</div>