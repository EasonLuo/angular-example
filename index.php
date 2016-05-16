<!DOCTYPE html>
<html>
<head>
<title>Angular</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body ng-app="app" ng-init="original=items=[{'id':1,'name':'A','price':25.5,'quality':3},
									{'id':2,'name':'B','price':15,'quality':1},
									{'id':3,'name':'C','price':500.00,'quality':4},
									{'id':4,'name':'D','price':1.03,'quality':0},
									{'id':5,'name':'E','price':88,'quality':6},
									{'id':6,'name':'F','price':0.99,'quality':9},
									{'id':7,'name':'G','price':160.200001,'quality':2}]">

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
				<th><a href="" ng-click="sortBy('quality')">QUALITY</a></th>
			</tr>
		</thead>
		<tr ng-repeat="item in items | orderBy:predicate:reverse">
			<td>{{item.id}}</td>
			<td>{{item.name | lowercase}}</td>
			<td>{{item.price | currency}}</td>
			<td>{{item.quality}}</td>
		</tr>
	</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
<script src="js/app.js"></script>
</body>
</html>