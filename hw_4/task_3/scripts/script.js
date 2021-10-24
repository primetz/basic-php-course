const gallery = document.querySelectorAll(".gallery-list__img");
const modal = document.querySelector(".modal");
const popupClose = document.querySelector(".modal__close");

gallery.forEach(item => {
    item.addEventListener("click", (evt => {
        modal.classList.add("modal_open");
        const img = document.createElement("img");
        img.src = evt.target.src;
        img.alt = evt.target.alt;
        modal.insertAdjacentElement("beforeend", img);
    }));
});

popupClose.addEventListener("click", evt => {
    modal.querySelector("img").remove();
    modal.classList.remove("modal_open");
});
