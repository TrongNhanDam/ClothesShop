
const sign_in = document.querySelector('.sign-in');
const sign_up = document.querySelector('.sign-up');
const link_sign_in = document.querySelector('.signin-login-link');
const link_sign_up = document.querySelector('.signup-login-link');

function showSignIn() {
    sign_in.classList.add('open');

    sign_up.classList.remove('open');

}

function showSignUp() {
    sign_up.classList.add('open');

    sign_in.classList.remove('open');

}
link_sign_in.addEventListener('click', showSignIn);
link_sign_up.addEventListener('click', showSignUp);