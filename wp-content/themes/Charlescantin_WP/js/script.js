/*Animation de la galerie, page galerie*/

("use strict");

function imagesInit() {
  const images = document.querySelectorAll(".article__image");
  if (images.length) {
    images.forEach((image) => {
      const imageItem = image.querySelector("img");
      const padding = (imageItem.offsetHeight / imageItem.offsetWidth) * 100;
      image.style.paddingBottom = `${padding}%`;
      imageItem.classList.add("init");
    });
  }
}

function gridInit() {
  const items = document.querySelector(".articles__items");
  const itemsGrid = new Isotope(items, {
    itemsSelector: ".article",
    masonry: {
      fitWidth: true,
      gutter: 20,
    },
  });

  document.addEventListener("click", documentActions);
  function documentActions(e) {
    const targetElement = e.target;
    if (targetElement.closest(".filter-articles__item")) {
      const filterItem = targetElement.closest(".filter-articles__item");
      const filterValue = filterItem.dataset.filter;
      const filterActiveItem = document.querySelector(
        ".filter-articles__item.active"
      );

      filterValue === "*"
        ? itemsGrid.arrange({ filter: `` })
        : itemsGrid.arrange({ filter: `[data-filter="${filterValue}"]` });

      filterActiveItem.classList.remove("active");
      filterItem.classList.add("active");

      e.preventDefault();
    }
  }
}

window.addEventListener("load", windowLoad);
function windowLoad() {
  imagesInit();
  gridInit();
}

/*Animation du slider, page tarifs*/
window.onload = function () {
  let next = document.querySelector(".next");
  let prev = document.querySelector(".prev");

  next.addEventListener("click", function () {
    let items = document.querySelectorAll(".item");
    document.querySelector(".slide").appendChild(items[0]);
  });

  prev.addEventListener("click", function () {
    let items = document.querySelectorAll(".item");
    document.querySelector(".slide").prepend(items[items.length - 1]);
  });
};
