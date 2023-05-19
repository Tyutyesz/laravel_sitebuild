require('./bootstrap');
require('bootstrap');

const $listItems = document.querySelectorAll(".list-item");
const $listDescriptions = document.querySelectorAll(".list-item-description");
const $closeButtons = document.querySelectorAll(".list-item-description__close");
const $showMoreBtn = document.getElementById("showMore");
let selectedItem;
let activePages = 3;
let currentPage = 1;
let firstIndex = 0;
let pager = 3;

const init = () => {
    
    paginationInit();

    $listItems.forEach(item => {
        linkEvent(item, item.querySelector('a'));
    });
    $closeButtons.forEach(button => {
        closeEvent(button);
    });
};

const linkEvent = (parent, item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        if (selectedItem === parent){
            return;
        } else {
            if (selectedItem !== undefined){
                selectedItem.classList.remove("list-item--active");
            }
            
            selectedItem = parent;
            selectedItem.classList.add("list-item--active");
        }
        
    })
};
const closeEvent = (button) => {
    button.addEventListener("click", () => {
        selectedItem.classList.remove("list-item--active");
        selectedItem = undefined;
    })
};

const paginationInit = () => {
    pagination();
    $showMoreBtn.addEventListener("click", pagination);
}
const pagination = () => {
    for (let i = firstIndex; i < currentPage * pager; i+= 1){
        if($listItems[i] === undefined){
            endPagination();
            break;
        }
        $listItems[i].classList.remove("d-none");
        $listDescriptions[i].classList.remove("d-none");
    }
    firstIndex = (currentPage * pager) - 1;
    currentPage += 1;
}
const endPagination = () => {
    $showMoreBtn.removeEventListener("click", pagination);
    $showMoreBtn.classList.add("d-none");
}

window.addEventListener("DOMContentLoaded", init);