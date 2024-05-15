function redirectToPage() {
  // Перенаправление пользователя на другую страницу
  window.location.href = 'pricing.php';
}



// Находим ссылку "Войти/Зарегистрироваться"
var loginRegisterLink = document.getElementById('login-register-link');

var modal = document.getElementById('login-register-modal');

var closeButton = modal.querySelector('.close');


loginRegisterLink.addEventListener('click', function (event) {
  event.preventDefault();
  modal.style.display = 'block';
});


closeButton.addEventListener('click', function () {
  modal.style.display = 'none';
});

window.addEventListener('click', function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
});


function addToCart(productId, productName, productPrice) {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'cart.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        alert(xhr.responseText); // Выводим сообщение об успешном добавлении
        window.location.reload(); // Обновляем страницу
      } else {
        alert('Ошибка: ' + xhr.statusText); // Выводим сообщение об ошибке
      }
    }
  };
  var data = 'action=add_to_cart&product_id=' + encodeURIComponent(productId) + '&product_name=' 
  + encodeURIComponent(productName) + '&product_price=' + encodeURIComponent(productPrice);
  xhr.send(data);
}




// Находим кнопку закрытия модального окна авторизации
var loginCloseButton = document.querySelector('#login-register-modal .close');

// Находим модальное окно авторизации
var loginRegisterModal = document.getElementById('login-register-modal');

// Добавляем обработчик события клика на кнопку закрытия модального окна авторизации
loginCloseButton.addEventListener('click', function () {
  loginRegisterModal.style.display = 'none'; // Закрываем модальное окно при клике на крестик
});

// Находим кнопку закрытия модального окна регистрации
var registerCloseButton = document.querySelector('#register-modal .close');

// Находим модальное окно регистрации
var registerModal = document.getElementById('register-modal');

// Добавляем обработчик события клика на кнопку закрытия модального окна регистрации
registerCloseButton.addEventListener('click', function () {
  registerModal.style.display = 'none'; // Закрываем модальное окно при клике на крестик
});

// Находим ссылку "Ещё не зарегистрировались?" в модальном окне авторизации
var registerLink = document.querySelector('#login-register-modal h5 a');

// Добавляем обработчик события клика на ссылку "Ещё не зарегистрировались?"
registerLink.addEventListener('click', function (event) {
  event.preventDefault(); // Предотвращаем действие по умолчанию (переход по ссылке)
  loginRegisterModal.style.display = 'none'; // Закрываем модальное окно авторизации
  registerModal.style.display = 'block'; // Открываем модальное окно регистрации
});

window.addEventListener('click', function (event) {
  if (event.target == registerModal) {
    registerModal.style.display = 'none'; // Закрываем модальное окно при клике вне его области
  }
});


// Находим ссылку "Авторизоваться" в модальном окне регистрации
var loginLink = document.querySelector('#register-modal h5 a');

// Добавляем обработчик события клика на ссылку "Авторизоваться"
loginLink.addEventListener('click', function (event) {
  event.preventDefault(); // Предотвращаем действие по умолчанию (переход по ссылке)
  registerModal.style.display = 'none'; // Закрываем модальное окно регистрации
  loginRegisterModal.style.display = 'block'; // Открываем модальное окно авторизации
});

window.addEventListener('click', function (event) {
  if (event.target == loginRegisterModal) {
    loginRegisterModal.style.display = 'none'; // Закрываем модальное окно при клике вне его области
  }
});



// Находим ссылку для открытия модального окна "mapModal"
var showMapLink = document.getElementById('showMap');

// Получаем модальное окно "mapModal"
var mapModal = document.getElementById('mapModal');

// Получаем кнопку закрытия модального окна
var closeButton = mapModal.querySelector('.close');

// Добавляем обработчик события клика на ссылку "Работаем с 07:00 до 19:00 по МСК"
showMapLink.onclick = function () {
  mapModal.style.display = 'block'; // Открываем модальное окно с картой при клике
}

// Добавляем обработчик события клика на кнопку закрытия модального окна
closeButton.onclick = function () {
  mapModal.style.display = 'none'; // Закрываем модальное окно при клике на кнопку закрытия
}

// Добавляем обработчик события клика за пределами модального окна для его закрытия
window.addEventListener('click', function (event) {
  if (event.target == mapModal) {
    mapModal.style.display = 'none'; // Закрываем модальное окно при клике вне его области
  }
});


document.addEventListener('click', function (event) {
  var navItemUser = document.querySelector('.nav-item-user');
  var searchInput = navItemUser.querySelector('.search-input');

  // Если был сделан клик вне .nav-item-user и строка поиска отображается
  if (!navItemUser.contains(event.target) && navItemUser.classList.contains('active')) {
    searchInput.value = ''; // Очищаем строку поиска
    searchInput.style.display = 'none'; // Скрываем строку поиска
    navItemUser.classList.remove('active'); // Удаляем класс active
  }
});

function toggleSearch(event) {
  var navItemUser = document.querySelector('.nav-item-user');
  var searchInput = navItemUser.querySelector('.search-input');

  // Если строка поиска не отображается, отобразить ее и добавить класс active
  if (!navItemUser.classList.contains('active')) {
    searchInput.style.display = 'block'; // Отображаем строку поиска
    searchInput.focus(); // Фокусируемся на строке поиска
    navItemUser.classList.add('active'); // Добавляем класс active
  } else {
    // Если строка поиска уже отображается, скрыть ее и удалить класс active
    searchInput.value = ''; // Очищаем строку поиска
    searchInput.style.display = 'none'; // Скрываем строку поиска
    navItemUser.classList.remove('active'); // Удаляем класс active
  }

  event.stopPropagation(); // Предотвращаем всплытие события
}

// Функция для выполнения поискового запроса
function performSearch() {
  var searchInput = document.getElementById('searchInput');
  var searchTerm = searchInput.value.trim(); // Получаем текст из строки поиска, удаляем пробелы в начале и конце

  // Если введенный текст не пустой, перенаправляем пользователя на страницу поиска с соответствующими параметрами
  if (searchTerm !== '') {
    window.location.href = 'search.php?q=' + encodeURIComponent(searchTerm); // Перенаправляем на страницу поиска с запросом в URL
  }
}

// Получаем ссылку на элемент ввода поискового запроса
var searchInput = document.getElementById('searchInput');

// Добавляем обработчик события "keydown" для поля ввода
searchInput.addEventListener('keydown', function(event) {
    // Проверяем, была ли нажата клавиша Enter (код клавиши 13)
    if (event.keyCode === 13) {
        // Получаем значение из поля ввода
        var searchTerm = searchInput.value.trim();

        // Проверяем, не пуст ли поисковый запрос
        if (searchTerm !== '') {
            // Проверяем, если поисковый запрос равен "Каталог", перенаправляем на pricing.php
            if (searchTerm.toLowerCase() === 'каталог') {
                window.location.href = 'pricing.php';
            } else {
                // Перенаправляем пользователя на страницу search.php с поисковым запросом в URL
                window.location.href = 'search.php?q=' + encodeURIComponent(searchTerm);
            }
        }
    }
});





// Дождемся загрузки всего контента страницы
document.addEventListener('DOMContentLoaded', function () {
  // Находим кнопку закрытия модального окна по id
  var closeModalButton = document.getElementById('close-modal');

  // Находим модальное окно по id
  var errorModal = document.getElementById('error-modal');

  // Добавляем обработчик события клика на кнопку закрытия модального окна
  closeModalButton.addEventListener('click', function () {
    errorModal.style.display = 'none'; // Закрываем модальное окно при клике на крестик
  });

  // Добавляем обработчик события клика вне модального окна для его закрытия
  window.addEventListener('click', function (event) {
    if (event.target == errorModal) {
      errorModal.style.display = 'none'; // Закрываем модальное окно при клике вне его области
    }
  });
});







// !!!!!!!!!!!!!!!!!!!!!!!!!!

// Получаем ссылку на кнопку "Добавить новость" по ее id
var addNewsButton = document.getElementById('open-add-news-modal');

// Получаем ссылку на модальное окно для добавления новости по его id
var addNewsModal = document.getElementById('add-news-modal');

// Получаем ссылку на элемент для закрытия модального окна (обычно крестик)
var closeModalButton = addNewsModal.querySelector('.close');

// Добавляем обработчик события клика на кнопку "Добавить новость"
addNewsButton.addEventListener('click', function () {
  addNewsModal.style.display = 'block'; // Показываем модальное окно
});

// Добавляем обработчик события клика на элемент для закрытия модального окна
closeModalButton.addEventListener('click', function () {
  addNewsModal.style.display = 'none'; // Скрываем модальное окно
});

// !!!!!!!!!!!!!!!!!!!!!!!!!!


// Обработчик событий на клик по размеру
document.querySelectorAll('.size-filter').forEach(function (element) {
  element.addEventListener('click', function (event) {
    event.preventDefault(); // Предотвращаем переход по ссылке

    // Получаем выбранный размер
    var size = this.dataset.size;

    // Отправляем запрос на сервер для получения товаров с выбранным размером
    // Можно использовать AJAX для этого
    // После получения результатов обновляем каталог товаров
  });
});



