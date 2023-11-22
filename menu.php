<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>honghee</title>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<script src="home.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<div>
			<a href="./home.php">
				<img src="./images/honghee.png" alt="홍희">
			</a>
		</div>
		<a class="tab" href="./guide.php">매장 안내</a>
		<a class="tab" href="./menu.php">메뉴 정보</a>
		<a class="tab" href="./announce.php">공지사항</a>
	</header>

	<div class="menu-items"> 
  	</div>
	
	<footer>
		<p>© 2023 Simple Page</p>
	</footer>
	<script>
		const menuData = {
			"data": [
				{
					"id": 1,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 2,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 3,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 4,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 5,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 6,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 7,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 8,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 9,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				},
				{
					"id": 10,
					"img": "1111",
					"name": "케이크",
					"price": 7800,
					"about": "케이크 정보입니다",
					"today": true
				}
					]
				};

		const menuContainer = document.querySelector('.menu-items');

		menuData.data.forEach(item => {
		const menuItem = document.createElement('div');
		menuItem.classList.add('menu-item');

		menuItem.innerHTML = `
			<img src="${item.img}" alt="${item.name}">
			<h3>${item.name}</h3>
			<p>가격: ${item.price / 100}원</p>
			<p>${item.about}</p>
		`;

		menuContainer.appendChild(menuItem);
		});
	</script>

</body>
</html>
