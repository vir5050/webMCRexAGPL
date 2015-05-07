<?php
/* Строки, появляющиеся в скриптах, достать функцией lng() */
$MCR_LANG = array('KB' => 'Кб',
	
	'MALE' => 'Парень', 'FEMALE' => 'Девушка',
	
	//Названия страниц
	'PAGE_OPTIONS' => 'Настройки аккаунта', 'PAGE_NEWS' => 'Главная страница — Новости', 'PAGE_ADMIN' => 'Панель управления', 'BANLIST' => 'Банлист', 'USER_POFILE' => 'Профиль пользователя', 'USERS_LIST' => 'Игроки', 'RULES' => 'Правила', 'GUIDE' => 'Гайды', 'FORUM_TOPIC_NEW' => 'Новая тема...', 'FORUM_TOPIC_VIEW' => 'Просмотр темы', 'FORUM_CAT_VIEW' => 'Список тем', 'FORUM_LIST' => 'Список форумов', 'FORUM_SETTINGS' => 'Создание каталогов/форумов',

	//Прочие пометки
	'FORUM_TO_TOPICS' => 'К списку тем', 'FORUM_TO_TOPIC' => 'К просмотру темы', 'NEWS' => 'Новости', 'ACCOUNT' => 'Личный кабинет', 'MESSAGE_EDIT' => 'Редактирование сообщения',

	//Для меню
	'HOME' => 'Главная', 'USER_OPT' => 'Настройки', 'EXIT' => 'Выход', 'USERS_ALL' => 'Все', 'INFO' => 'Информация', 'FORUM' => 'Форум', 'PM_INBOX' => 'Входящие', 'PM_OUTBOX' => 'Отправленные', 'PM_DRAFTS' => 'Черновики', 'PM_NEW' => 'Написать ЛС', //Админка
	'ADM' => 'Админка', 'ADM_NEW' => 'Добавить новость', 'ADM_CAT' => 'Категории новостей', 'ADM_FILES' => 'Файлы', 'ADM_USER' => 'Аккаунты', 'ADM_REQ' => 'Заявки в модераторы', 'FORUM_EDIT' => 'Настройки форума', 'ADM_REG' => 'Регистрация', 'ADM_GROUP' => 'Группы пользователей', 'ADM_SITE' => 'Настройки сайта', 'ADM_DONATE' => 'Настройки доната', 'ADM_RCON' => 'RCON', 'ADM_LAUNCH' => 'Настройки лончера', 'ADM_SRV' => 'Мониторинг серверов',
	
	'SKIN_UPLOAD' => 'Загрузка образа', 'CLOAK_UPLOAD' => 'Загрузка плаща',
	
	'OPTIONS_COMPLETE' => 'Настройки изменены',
	
	'BD_ERROR' => 'ОШИБКА MySQL Базы данных', 'BD_AUTH_FAIL' => 'Сервер не отвечает или не удается пройти авторизацию', 'BD_NOT_EXIST' => 'База данных с указанным название не существует',
	
	'NOT_SET' => 'Не задано', 'CAPTCHA_FAIL' => 'Защитный код введен не верно', 'MAIL_FAIL' => 'Ошибка отправки сообщения на почтовый ящик', 'WRITE_FAIL' => 'Запись не возможна. Проверьте права на ЗАПИСЬ', 'DEL_FAIL' => 'Ошибка удаления файла', 'CURPASS_FAIL' => 'Текущий пароль введен неверено', 'PERMISSION_FAIL' => 'У Вас нет прав на выполнение данного действия',
	
	'MAX_FILE_SIZE' => 'Максимально допустимый размер файла', 'MAX_FILE_RATIO' => 'Рекомендуемое соотношение сторон изображение',
	
	'MESS_TIMEOUT' => 'Отправлять сообщения можно не чаще чем раз в минуту', 'MESS_SHORT' => 'Сообщение слишком короткое', 'MESS_NOT_FOUND' => 'Комментируемая статья или новость не найдена',
	
	'PROFILE_COMPLITE' => 'Профиль успешно обновлен', 'USER_NOT_EXIST' => 'Пользователь не найден', 'IP_BANNED' => 'IP адрес временно заблокирован', 'IP_UNBANNED' => 'IP адрес разблокирован', 'USER_BANNED' => 'Аккаунт заблокирован',
	
	'AUTH_FAIL' => 'Неверный пароль', 'AUTH_NOT_EXIST' => 'Пользователь с таким именем или e-mail\'ом не существует', 'AUTH_EXIST_LOGIN' => 'Пользователь с таким именем уже существует', 'AUTH_EXIST_EMAIL' => 'Пользователь с таким e-mail\'ом уже существует', 'AUTH_RESTORE' => 'Восстановить пароль',
	
	'RESTORE_NOT_EXIST' => 'Пользователь с таким e-mail\'ом не существует', 'RESTORE_TITLE' => 'Восстановление пароля', 'RESTORE_NEW' => 'Ваши новые авторизационные данные', 'RESTORE_COMPLETE' => 'Новый пароль отправлен Вам на Email.',
	
	'REG_COMPLETE' => 'Регистрация завершена', 'MAIL_CONFIRM' => 'Подтверждение адреса почты', 'MAIL_CONFIRM_MES' => 'Для подтверждения адреса почты необходимо пройти по ссылке', 'MAIL_CONFIRM_MES_END' => 'Если Вы не знаете о чем речь, то проигнорируйте это сообщение', 'REG_CONFIRM_INFO' => 'Сообщение с данными для активации аккаунта отправлено на Ваш почтовый адрес', 'REG_BLOCKED_SITE' => 'Регистрация заблокирована на время технических работ', 'REG_BLOCKED_CMS' => 'Регистрация заблокирована. Используются скрипты сторонней CMS', 'REG_BLOCKED_PROTOCOL' => 'Регистрация заблокирована. Используется интеграция с сетями.',

	'UPLOAD_FAIL' => 'Ошибка при загрузке файла', 'UPLOAD_FORMATS' => 'Допустимые форматы файла',
	
	'ADMIN_SITE_NAME' => 'Название сайта', 'ADMIN_KEY_WORDS' => 'Ключевые слова',
	
	'SERVER_NOT_EXIST' => 'Сервер не найден', 'SERVER_DELETED' => 'Сервер удален', 'SERVER_COMPLITE' => 'Сервер добавлен', 'SERVER_PROTO_EMPTY' => 'Не заданы настройки подключения для заданного протокола', 'SERVER_UPDATED' => 'Настройки мониторинга сервера изменены',
	
	'GROUP_EXIST' => 'Группа с таким названием уже существует', 'GROUP_DELETED' => 'Группа удалена', 'GROUP_COMPLITE' => 'Группа создана', 'GROUP_UPDATED' => 'Группа изменена',
	
	'T_NAME' => 'Название', 'T_AUTHOR' => 'Разработчик', 'T_VERSION' => 'Версия', 'T_ABOUT' => 'Подробнее', 'T_INSTALL_FAIL' => 'Ошибка установки темы оформления', 'T_WRONG_VERSION' => 'Тема оформления не совместима с этой версией движка',
	
	'NEWS_LAST' => 'Последние новости',
	
	'CAT_EXIST' => 'Категория с таким названием уже существует', 'CAT_DELETED' => 'Категория удалена', 'CAT_COMPLITE' => 'Категория создана', 'CAT_UPDATED' => 'Категория изменена',
	
	'FILE_EXIST' => 'Идентичный файл уже существует', 'TXT_ID_EXIST' => 'Объект с таким текстовым идентификатором уже существует',
	
	'LOGIN' => 'Логин', 'PASS' => 'Пароль', 'EMAIL' => 'E-mail', 'TXT_ID' => 'Текстовый идентификатор', 'REPASS' => 'Повтор пароля', 'ENTER' => 'Войти', 'OPEN' => 'Открыть',
	
	'REPASSVSPASS' => 'Пароли не совпадают',
	
	'CHARACTERS' => 'Cимволов',
	
	'FROM' => 'От', 'TO' => 'До', 'OR' => ' или',

	'INCORRECT' => 'Поле заполнено некорректно', 'INCORRECT_LEN' => 'Некорректная длина поля', 'INCORRECT_LEN_RECIVER' => 'Некорректная длина ника получателя ', 'INCORRECT_LEN_TOPIC' => 'Некорректная длина темы сообщения ', 'INCORRECT_LEN_MESSAGE' => 'Некорректная длина сообщения ', 'SENT_SUCCESS' => 'Сообщение успешно отправлено', 'INCORRECT_UNAME' => 'Некорректная длинна поста', 'INCOMPLETE_FORM' => 'Заполните все поля ',);
/* Строки, появляющиеся в шаблонах, автоматически заменяются парсером страниц */
$MCR_LANG_TPL = array('{LAUNCHER_DOWN_PAGE_LINK}' => 'СКАЧАТЬ ЛОНЧЕР', '{MENU_SHOW_ALL}' => 'Показать навигацию', '{FOOTER_COPY_BEFORE}' => 'Полное или частичное копирование сайта', '{FOOTER_COPY_AFTER}' => 'запрещено', '{ERR_403}' => 'Доступ запрещен', '{ERR_404}' => 'Страница не найдена', '{ERR_DENIED}' => 'Вы не имеете достатоно прав для доступа к этому разделу или не авторизованы.', '{AUTH}' => 'Авторизация', '{REGISTER}' => 'Регистрация', '{RESTOREPASS}' => 'Востановление пароля', '{AUTH_LOGIN}' => $MCR_LANG['LOGIN']." или e-mail", '{USERNAME}' => $MCR_LANG['LOGIN'], '{PASS}' => $MCR_LANG['PASS'], '{REPASS}' => $MCR_LANG['REPASS'], '{EMAIL}' => 'E-mail', '{ENTER}' => $MCR_LANG['ENTER'], '{RESTOREPASS_LINK}' => 'Забыли пароль?', '{SAVE_SESSION}' => 'Запомнить', '{BOY}' => 'Парень', '{GIRL}' => 'Девушка', '{GENDER}' => 'Пол', '{CODE}' => 'Код', '{CANCEL}' => 'Отмена',);