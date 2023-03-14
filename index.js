const {log} = console;

const mapFieldsById = {
  name: 1,
  inn: 2,
  info: 3,
  ceo: 4,
  address: 5,
  phone_number: 6,
  company: 7
};

const getGetParam = (key) => {
  let params = window.location.search;
  param = params.match(new RegExp(key + '=([^&=]+)'));
  return param ? param[1] : false;
};

const companyId = getGetParam('companyId');
let field = null;

const textInput = document.querySelector('#commentInput');
const sendButton = document.querySelector('#sendComment');
const commentButtons = document.querySelectorAll('.comment-button');
var commentModal = new bootstrap.Modal(document.querySelector('#commentModal'));

sendButton.addEventListener('click', (evt) => {
  evt.preventDefault();
  const comment = textInput.value;

  axios.post('add-comment.php', 
    {comment, fieldId: mapFieldsById[field], companyId: Number(companyId)},
    {headers: {'Content-Type': 'application/json'}}
  );

  textInput.value = '';
  commentModal.hide();
})

commentButtons.forEach(element => {
  element.addEventListener('click', () => {
    field = element.dataset.field;
  })
});