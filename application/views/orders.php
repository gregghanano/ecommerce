<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Orders</title>
	<style>
		body{
			width:970px;
		}
/*		CSS FOR SEARCH BAR

*/		#search{
			width:970px;
			display: inline-block;
		}
		.search-box{
				width: 400px;
				border-radius:10px;
				display: inline-block;
		}
		.search-form{
			display:inline-block;
		}
		#add-form{
			display:inline-block;
			margin-left: 400px;
		}
		#add-new-product{
			background-color:blue;
			color:white;
			box-shadow: 5px 5px 5px black;
			border: solid 1px black;
		}
		.header {
		 background-color: #CC0000;
		 height: 60px;
		 color: white;
		}
		h1 {
			font-size:20px;
			display:inline;
			margin-left:20px;
			margin-top:30px;
		}
		ul{
			display:inline-block;
		}
		li {
			display:inline;
			margin-right: 20px;
		}
		#log-off{
			display:inline-block;
			float:right;
			margin-right: 50px;
		}
		.orders-products:link {
			color:white;
			text-decoration:none;
		}
		.orders-products:visited {
			color:white;
			text-decoration:none;
		}
		.orders-products:hover{
			text-decoration:underline;
		}
		.orders-products:active{
			text-decoration:underline;
		}
/*		CSS FOR TABLE

*/		table{
			border: 1px solid black;
			border-collapse: collapse;
			width:950px;
			margin-top: 10px;
		}
		th{
			background-color: #989898;
			border: 1px solid black;
			border-collapse: collapse;
		}
		td{
			border: 1px solid black;
			border-collapse: collapse;
			padding-left: 50px;
			
		}
		.gray{
			background-color: #C8C8C8;
		}
		.show{
			margin-left: 450px;
			vertical-align: top;
			display: inline;
		}
		img{
			height: 30px;
			width: 50px;
		}
		.delete{
			padding-left: 20px;
		}

/*		CSS FOR UL

*/		ul{
		display: inline-block;
		}
		.numbers li{
			border-right: 1px solid black;
			padding-left: 10px;
			padding-right: 10px;
		}
		li:last-child{
			border-right: none;
		}
		.numbers{
			margin-left: 150px;
		}
		
	</style>
</head>
<body>
	<div class='header'>
			<h1>Dashboard</h1>
				<ul>
					<li><a class='orders-products' href='/Welcome/search'>Orders</a></li>
					<li><a class='orders-products' href='/Welcome/orders'>Products</a></li>
				</ul>
			<p id='log-off'><a class='orders-products' href='/Welcome/admin'>log off</a></p>
	</div>

	<div id="search">
		<form class='search-form' action='' method='get'>
				<input class='search-box' type='text' name='search' placeholder='search'>
		</form>
		
		<form id='add-form'action='/Welcome/add_product_page' method='post'>
				<input id='add-new-product' type='submit' value='Add New Product'>
		</form>
	</div>

	<table>
		<thead>
			<th>Picture</th>
			<th>ID</th>
			<th>Name</th>
			<th>Inventory Count</th>
			<th>Quantity Sold</th>
			<th>Action</th>
		</thead>
		<tbody>
			<tr class="gray">
				<td><a href="/Welcome/add_product_page"><img class='table-pics' src='http://i.imgur.com/UDhus28.jpg' alt='golden gate bridge'/></a></td>
				<td>1</td>
				<td>T-shirt</td>
				<td>123</td>
				<td>1000</td>
				<td>
					<a href="/Welcome/add_product_page">edit</a>
					<a class="delete" href="/Welcome/product_delete">delete</a>
				</td>
			</tr>
			<tr>
				<td><a href="#"><img class='table-pics' src='http://i.imgur.com/UDhus28.jpg' alt='golden gate bridge'/></a></td>
				<td>2</td>
				<td>T-shirt</td>
				<td>23</td>
				<td>3</td>
				<td>
					<a href="#">edit</a>
					<a class="delete" href="#">delete</a>
				</td>
			</tr>
			<tr class="gray">
				<td><a href="#"><img class='table-pics' src='http://i.imgur.com/UDhus28.jpg' alt='golden gate bridge'/></a></td>
				<td>3</td>
				<td>T-shirt</td>
				<td>1</td>
				<td>2342</td>
				<td>
					<a href="#">edit</a>
					<a class="delete" href="#">delete</a>
				</td>
			</tr>
			<tr>
				<td><a href="#"><img class='table-pics' src='http://i.imgur.com/UDhus28.jpg' alt='golden gate bridge'/></a></td>
				<td>4</td>
				<td>T-shirt</td>
				<td>13</td>
				<td>234</td>
				<td>
					<a href="#">edit</a>
					<a class="delete" href="#">delete</a>
				</td>
			</tr>
			<tr class="gray">
				<td>...</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="#">edit</a>
					<a class="delete" href="#">delete</a>
				</td>
			</tr>
			<tr>
				<td><a href="#"><img class='table-pics' src='http://i.imgur.com/UDhus28.jpg' alt='golden gate bridge'/></a></td>
				<td>50</td>
				<td>T-shirt</td>
				<td>12</td>
				<td>3</td>
				<td>
					<a href="#">edit</a>
					<a class="delete" href="#">delete</a>
				</td>
			</tr>
	</table>

	<div class="numbers">
		<ul>
			<li><a href="/Welcome/orders">1</a></li>
			<li><a href="/Welcome/orders">2</a></li>
			<li><a href="/Welcome/orders">3</a></li>
			<li><a href="/Welcome/orders">4</a></li>
			<li><a href="/Welcome/orders">5</a></li>
			<li><a href="/Welcome/orders">6</a></li>
			<li><a href="/Welcome/orders">7</a></li>
			<li><a href="/Welcome/orders">8</a></li>
			<li><a href="/Welcome/orders">9</a></li>
			<li><a href="/Welcome/orders">10</a></li>
			<li><a href="/Welcome/orders"> -> </a></li>	
		</ul>
	</div>
</body>
</html>
	