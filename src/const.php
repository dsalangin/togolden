<?php 
// $companies = [
//   ['id' => 1, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 2, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 3, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 4, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 5, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 6, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 7, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 8, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
//   ['id' => 9, 'name' => 'ООО РОГА И КОПЫТА', 'inn' => '7802930959',
//   'info' => 'Компания ООО РОГА И КОПЫТА, адрес: г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1 зарегистрирована 10.10.2022. Организации присвоены ИНН 7802930959, ОГРН 1227800131162, КПП 780201001. Основным видом деятельности является деятельность по чистке и уборке жилых зданий и нежилых помещений прочая, всего зарегистрировано 13 видов деятельности по ОКВЭД. Связи с другими компаниями отсутствуют.', 
//   'ceo' => 'Микрюкова Екатерина Андреевна',
//   'address' => '	г. Санкт-Петербург, вн.тер.г. поселок Парголово, пр-д Толубеевский, д. 8, к. 2, стр. 1, помещ. 2312Н ОФИС 1, раб. м. 1', 
//   'phoneNumber' => '(800) 555-3535',],
// ];



$fields = ['name' => 'Название', 'inn' => 'ИНН', 'info' => 'Общая информация',
'ceo' => 'Генеральный директор', 'address' => 'Адрес', 'phone_number' => 'Телефон',];

$mapFieldsById = [
  'name' => '1',
  'inn' => '2',
  'info' => '3',
  'ceo' => '4',
  'address' => '5',
  'phone_number' => '6',
  'company' => '7'
];