const cartPopup = document.querySelector('.cart-popup');
const arrow = document.querySelector('.card-dropdown');
let cartVisible = false;
console.log(cartPopup);

const toggleCart = () => {
    if (cartVisible) cartPopup.classList.remove('visible');
    else cartPopup.classList.add('visible');

    cartVisible = !cartVisible;
};

arrow.addEventListener('click', toggleCart);
