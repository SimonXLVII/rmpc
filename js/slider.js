"use strict";

let images = document.querySelectorAll('.slide'),
figcaption = document.querySelector('.slide_descr'),
indexx = 0,
slider = document.querySelector(".slider");

images.forEach((item) => {
    let img = item;
    img.classList.add('slider_item');
});

function hideSlide(indexx)
{
    [...slider.children].forEach(item => item.classList.add('hide'));
    slider.children[indexx].classList.remove('hide');
    let alt = slider.children[indexx].getAttribute("alt");
    figcaption.innerText = "";
    figcaption.innerText = alt
}
hideSlide(indexx);

let temp=1;
function showSlide()
{
    if (indexx != images.length-1 && temp == 1)
    {
        hideSlide(indexx);
        indexx++;
    } else {
        temp=-1;
        hideSlide(indexx);
        indexx--;
    }

    if (temp == -1 && indexx == 0) {
        temp = 1;
    }
}

setInterval(showSlide, 4000);