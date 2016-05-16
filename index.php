<!DOCTYPE html>
<html>
<head>
<title>Angular</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body ng-app="app" ng-init="original=items=[{'id':1,'name':'Eason','price':25.5,'stock':311},
									{'id':2,'name':'Seyla','price':15,'stock':13},
									{'id':3,'name':'Anna','price':500.00,'stock':43},
									{'id':4,'name':'Tim','price':1.03,'stock':0},
									{'id':5,'name':'Vey','price':88,'stock':6},
									{'id':6,'name':'Travis','price':0.99,'stock':290},
									{'id':7,'name':'Joachim','price':160.200001,'stock':25}]">

<div class="container" ng-controller="mycontroller">
	<h2>Search Products</h2>
	<div class="row">
		<div class="col-md-3">
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
		<tr ng-repeat="item in items | orderBy:predicate:reverse">
			<td>{{item.id}}</td>
			<td>{{item.name}}</td>
			<td>{{item.price | currency}}</td>
			<td>{{item.stock}}</td>
		</tr>
	</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
<script src="js/app.js"></script>
</body>
</html>