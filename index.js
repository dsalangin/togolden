const {log} = console;

let field = null;

const textInput = document.querySelector('#commentInput');
const sendButton = document.querySelector('#sendComment');
const commentButtons = document.querySelectorAll('.comment-button');

sendButton.addEventListener('click', () => {
  const comment = textInput.value;

  fetch('add-comment.php', {
  method: 'POST',
  body: JSON.stringify({comment, field}),
  }).then(d => log(d));

})

commentButtons.forEach(element => {
  element.addEventListener('click', () => {
    field = element.dataset.field;

  })
});