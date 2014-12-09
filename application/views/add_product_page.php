<!DOCTYPE html>
<html>
<head>
	<title>Add a New Product</title>
	<style>
	h1 {
		margin-left: 100px;
	}
	label {
		display:block;
	}
	#main {
		text-align:center;
	}
	.field {
		margin-left: 5px;
		margin-top:8px;
	}
	.image {
		display:block;
		margin-top: 8px;
	}
	#cancel, #preview, #update{
		display: inline-block;
		margin-right: 20px;
	}
	#buttons{
		text-align:center;
		margin-top: 30px;
	}
	.cancel, .preview, .update{
		border-radius: 0px;
		font-size: 20px;
	}
	.cancel {
		background-color:#CDC5BF;
		color:black;
	}
	.preview {
		background-color:#83B51E;
		color:black;
	}
	.update {
		background-color:#3366FF;
		color:white;
	}
	</style>
</head>
<body>
	<h1>Add Product</h1>
	<div id='main'>
		<form action='' method='post'>
			<label>Name: <input class='field' type='text' name='product_name' placeholder='Name of product...'></label>
			<label>Description: <textarea class='field' name='product_description' placeholder='Description of product...'></textarea></label>
			<label>Categories: <select class='field' name='product_category' placeholder='Pick a category'>
				<option value='bridge'>Bridge <a href=''>edit</a>/<a href=''>delete</a></option>
				<option value='mounment'>Mounument <a href=''>edit</a>/<a href=''>delete</a></option>
				<option value='statue'>Statue <a href=''>edit</a>/<a href=''>delete</a></option>
			</select></label>
			<label>or add a new cateogry: <input class='field' type='text' name='new_category'></label>
			<label>Images: <input class='field' type='file' name='image' accept='image/*'></label>
			<!-- needs jquery draggable content -->
				<div class='image'>
					<img src=''>img.png<input type='radio' name='main' value='main'>Main
				</div>
				<div class='image'>
					<img src=''>img.png<input type='radio' name='main' value='main'>Main
				</div>
				<div class='image'>
					<img src=''>img.png<input type='radio' name='main' value='main'>Main
				</div>
			</form>
	</div>
	<div id='buttons'>
		<form id='cancel' action='' method='post'>
			<input class='cancel' type='submit' name='cancel' value='Cancel'>
		</form>
		<form id='preview' action '' method='post'>
			<input class='preview' type='submit' name='preview' value='Preview'>
		</form>
		<form id='update' action='' method='post'>
			<input class='update' type='submit' name='update' value='Update'>
		</form>
	</div>
</body>
</html>