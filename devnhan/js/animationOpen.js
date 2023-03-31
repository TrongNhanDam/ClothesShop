
const item_mini_img = document.querySelectorAll('.container__clothesmini__clothes__item');
window.onscroll = function() {
    myFunction()
};

function myFunction() {
    // console.log(document.documentElement.scrollTop)
    if (document.documentElement.scrollTop > 2376.800048828125) {

        for (i = 0; i < item_mini_img.length; i++) {
            item_mini_img[i].classList.remove('close');
        }

    }
}