const sendComment = async (comment) => {
  const response = await axios.post('add-comment.php',
  { comment, fieldId: mapFieldsById[field], companyId: Number(companyId) },
  { headers: { 'Content-Type': 'application/json' } }
  );
  
  
  if (response.data.status === 'ok') {
    ws.send(JSON.stringify(response.data.comment));
  }
}

let field = null;

const textInput = document.querySelector('#commentInput');
const sendButton = document.querySelector('#sendComment');
const commentButtons = document.querySelectorAll('.comment-button');
const commentModal = new bootstrap.Modal(document.querySelector('#commentModal'));

commentButtons.forEach(element => {
  element.addEventListener('click', () => {
    field = element.dataset.field;
  })
});

sendButton.addEventListener('click', (evt) => {
  evt.preventDefault();
  const comment = textInput.value;

  sendComment(comment);

  textInput.value = '';
  commentModal.hide();
});