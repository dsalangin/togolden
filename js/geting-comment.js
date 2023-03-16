const getCommentTempalte = (data, id) => {
  return (`
    <li class="comment" id="${id}">
      <p>
        <span class="comment__user">${data.userName}</span>
        <span class="comment__date">${data.createAt}</span>
      </p>
      <p class="comment__text">${data.text}</p>
    </li>
  `)
}

const renderComment = (data, id) => {
  const modifier = getObjKey(mapFieldsById, data.fieldId);
  const commentList = document.querySelector(`.comments-block--${modifier}`);
  commentList.insertAdjacentHTML('beforeend', getCommentTempalte(data, id));
}

const showNotify = (data, id) => {
  const notifyElement = document.querySelector('#notify');
  notifyElement.href = `http://localhost/company.php?companyId=${data.companyId}#${id}`;
  notifyElement.classList.remove('invisible');
}

const companyId = getGetParam('companyId');

ws.onmessage = (response) => {
  let data = JSON.parse(response.data);
  const idMessage = getUniqueId(data);
  if(data.companyId == companyId) {
    renderComment(data, idMessage);
  }
  if(data.notify) {
    showNotify(data, idMessage);
  }
};