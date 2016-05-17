<!DOCTYPE html>
<html>
<head>
<title>Angular</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style type="text/css">
body{
	margin:0px;
	padding:0px;
}
nav{
}
nav>ul{
	padding:0px;
	list-style-type:none;
}
nav>ul>li{
	float:left;
}
nav>ul>li>a{
	padding:10px 15px;
	color:#000;
	background-color:#FFF;
	text-decoration: none;
}
nav>ul>li>a:hover{
	color:#FFF;
	background-color:#000;
}
</style>
</head>
<body ng-app="app">

<div ng-include="'include/header.html'"></div>
									
<div class="container-fluid" ng-controller="mycontroller">
	<div class="row">
		<div class="col-md-8">
			<h2>Search Products</h2>
			<div class="row">
				<div class="col-md-4">
					<input type="search" class="form-control" placeholder="Search Products" ng-model="searchText" ng-change="search(searchText)">
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th><a href="" ng-click="sortBy('id')">ID</a></th>
						<th><a href="" ng-click="sortBy('name')">NAME</a></th>
						<th><a href="" ng-click="sortBy('price')">PRICE</a></th>
						<th><a href="" ng-click="sortBy('stock')">STOCK</a></th>
					</tr>
				</thead>
				<tr ng-repeat="item in items | orderBy:predicate:reverse" ng-click="sendToForm(item)">
					<td>{{item.id}}</td>
					<td>{{item.name}}</td>
					<td>{{item.price | currency}}</td>
					<td>{{item.stock}}</td>
				</tr>
			</table>
		</div>
		<div class="col-md-4">
			<h2>Edit Product</h2>
			<form action="" class="form" ng-model="edit">
				<div class="form-group">
					<label>ID</label>
					<input class="form-control" name="id" readonly="readonly" ng-model="edit.id">
				</div>
				<div class="form-group">
					<label>NAME</label>
					<input class="form-control" name="name" ng-model="edit.name">
				</div>
				<div class="form-group">
					<label>PRICE</label>
					<input class="form-control" name="price" ng-model="edit.price">
				</div>
				<div class="form-group">
					<label>STOCK</label>
					<input class="form-control" name="stock" ng-model="edit.stock">
				</div>
				<div class="form-group">
					<a href="#add" class="btn btn-default"><span class="glyphicon glyphicon-plus">Add</span></a>
					<a href="#update" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk">Save</span></a>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2></h2>
			<p>{{message}}</p>
		</div>	
	</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
<script src="js/app.js"></script>
</body>
</html>