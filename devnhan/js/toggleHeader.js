
const nav_product = document.querySelector('.nav-product');
const nav_product_sub = document.querySelector('.nav__product__sub');
nav_product.addEventListener('click', (e) => {
    // console.log('1');
    nav_product_sub.classList.toggle('open-product-sub');
})