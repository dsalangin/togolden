<?php

function getTemplate($path, $data) {
  if (!file_exists($path)) {
      return 'Ошибка же';
  }

  extract($data);
  ob_start();
  include $path;

  return ob_get_clean();
}