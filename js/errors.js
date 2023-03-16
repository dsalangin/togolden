const ERRORS = {
  noUser: 'Такой пользователь не найден',
  incorectPassword: 'Неверный пароль',
  userExists: 'Пользователь с таким email уже существует',
};
const signInEmailInput = document.querySelector('#signInEmail');
const signInPasswordInput = document.querySelector('#signInPassword1');
const sigInModal = new bootstrap.Modal(document.querySelector('#signInModal'));
const signUpEmailInput = document.querySelector('#signUpPassword');
const signUpModal = new bootstrap.Modal(document.querySelector('#signUpModal'));


const error = window.location.hash.slice(1);
if (error) {
  if(error === 'noUser') {
    // log('ERROR: noUser');
    sigInModal.show();
    signInEmailInput.parentNode.insertAdjacentHTML('beforeend', `<div style="color:red;font-size:0.8rem">${ERRORS.noUser}</div>`);
  }
  if(error === 'incorectPassword') {
    // log('ERROR: incorectPassword');
    sigInModal.show();
    signInPasswordInput.parentNode.insertAdjacentHTML('beforeend', `<div style="color:red;font-size:0.8rem">${ERRORS.incorectPassword}</div>`);
  }
  if(error === 'userExists') {
    // log('ERROR: userExists');
    signUpModal.show();
    signUpEmailInput.parentNode.insertAdjacentHTML('beforeend', `<div style="color:red;font-size:0.8rem">${ERRORS.userExists}</div>`);
  }
}
