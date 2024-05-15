<?php
session_start();
include 'config.php';

// Проверяем, был ли отправлен запрос на добавление товара в корзину
if (isset($_POST['action']) && $_POST['action'] === 'add_to_cart' && isset($_POST['product_id'])) {
    // Получаем данные о товаре
    $product_id = intval($_POST['product_id']);
    $product_name = $_POST['product_name'];
    $product_price = floatval($_POST['product_price']);

    // Добавляем товар в сессию корзины
    $_SESSION['cart'][] = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price
    );

    // Возвращаем сообщение об успешном добавлении товара в корзину
    echo "Товар '{$product_name}' успешно добавлен в корзину!";
    exit; // Прерываем выполнение скрипта
}

// Если не был отправлен запрос на добавление товара в корзину, выводим сообщение об ошибке
echo "Ошибка: Неверный запрос.";
?>
