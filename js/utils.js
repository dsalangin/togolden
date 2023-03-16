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

const getCookie = (cookieName) => {
  const matches = document.cookie.match(new RegExp(
    "(?:^|; )" + cookieName.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

const getGetParam = (key) => {
  let params = window.location.search;
  param = params.match(new RegExp(key + '=([^&=]+)'));
  return param ? param[1] : false;
}

const getUniqueId = (data) => {
  return (Date.now() / 2) + data.userName;
}

const getObjKey = (obj, value) => {
  return Object.keys(obj).find(key => obj[key] == value);
}