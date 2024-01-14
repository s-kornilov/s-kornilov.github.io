<?php
header('Content-Type: application/json');

// токен для авторизации
$authToken = 'd97cd10b79mshf2b3d8fd2c7fc34p17ba5ajsn36e98278eaa3';

if (!isset($_GET['token']) || $_GET['token'] !== $authToken) {
	echo json_encode(['error' => 'Unauthorized access.']);
	exit;
}

$data = [
	'pizzas' => [
		['id' => 1, 'name' => 'Ветчина и грибы', 'description' => 'Ветчина,шампиньоны, увеличинная порция моцареллы, томатный соус', 'price' => 345, 'image' => 'https://s-kornilov.github.io/api-pizza/pizza1.png'],
		['id' => 2, 'name' => 'Баварские колбаски', 'description' => 'Баварски колбаски,ветчина, пикантная пепперони, острая чоризо, моцарелла, томатный соус', 'price' => 345, 'image' => 'https://s-kornilov.github.io/api-pizza/pizza2.png'],
		['id' => 3, 'name' => 'Нежный лосось', 'description' => 'Лосось, томаты черри, моцарелла, соус песто', 'price' => 345, 'image' => 'https://s-kornilov.github.io/api-pizza/pizza3.png'],
		['id' => 4, 'name' => 'Пицца четыре сыра', 'description' => 'Соус Карбонара, Сыр Моцарелла, Сыр Пармезан, Сыр Роккфорти, Сыр Чеддер (тёртый)', 'price' => 345, 'image' => 'https://s-kornilov.github.io/api-pizza/pizza4.png'],
	],
	'combo' => [
		['id' => 1, 'name' => 'Комбо "Мини"', 'description' => 'Если хочется всего понемногу. Маленькая пицца, закуска, напиток и соус. Цена комбо зависит от выбранных продуктов и может быть увеличена', 'price' => 600, 'image' => 'https://s-kornilov.github.io/api-pizza/combo1.jpeg'],
		['id' => 2, 'name' => 'Комбо "Стандарт"', 'description' => 'Карбонара (26 см), Жульетта с курицей (26 см), Мега пепперони (26 см)', 'price' => 700, 'image' => 'https://s-kornilov.github.io/api-pizza/combo2.png'],
		['id' => 3, 'name' => 'Комбо "Большой"', 'description' => 'Пицца Чикен блю чиз на тонком тесте (26 см), Пицца Чикен барбекю на тонком тесте (26 см)', 'price' => 900, 'image' => 'https://s-kornilov.github.io/api-pizza/combo3.png'],
	],
	'desserts' => [
		['id' => 1, 'name' => 'Чизкейк', 'description' => 'Классический ванильный чизкейк Нью-Йорк', 'price' => 189, 'image' => 'https://s-kornilov.github.io/api-pizza/desert1.jpeg'],
		['id' => 1, 'name' => 'Арахисовое печенье', 'description' => 'Ароматное печенье с арахисовой пастой и хрустящим арахисом', 'price' => 99, 'image' => 'https://s-kornilov.github.io/api-pizza/desert2.png'],
		['id' => 1, 'name' => 'Печенье', 'description' => 'Сырники ручной работа из фермерского творога 9% с малиновым вареньем', 'price' => 249, 'image' => 'https://s-kornilov.github.io/api-pizza/desert3.png'],
	],
	'drinks' => [
		['id' => 1, 'name' => 'Лимонад', 'description' => 'Безалкогольный напиток со вкусом лайма и лимона', 'price' => 99, 'image' => 'https://s-kornilov.github.io/api-pizza/drinks1.png'],
		['id' => 2, 'name' => 'Морс Смородина', 'description' => 'Состав: ягода, сахар, вода. Объем: 0,5л', 'price' => 99, 'image' => 'https://s-kornilov.github.io/api-pizza/drinks2.jpeg'],
		['id' => 3, 'name' => 'Lipton Ice Tea', 'description' => 'Чай со вкусом персика, лимона или зеленый', 'price' => 99, 'image' => 'https://s-kornilov.github.io/api-pizza/drinks3.jpeg'],
	]
];

echo json_encode($data);
?>
