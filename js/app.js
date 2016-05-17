(function(){
	angular.module('app',[]).controller('mycontroller', function($scope, $http, $filter){
		
		$http.get('js/data.json').success(function(response){
			$scope.original = $scope.items = response;
		});
		
		$scope.edit = {};
		$scope.sortState = {'id':'+','name':'+','price':'+','quality':'+'};
		$scope.search = function(searchText){
			$scope.items = $filter('filter')($scope.original, searchText);
		}
		
		$scope.sortBy = function(predicate){
		    $scope.reverse = ($scope.predicate === predicate) ? !$scope.reverse : false;
		    $scope.predicate = predicate;
		}
		
		$scope.sendToForm = function (item){
			for(prop in item){
				$scope.edit[prop] = item[prop];
			}
		};
		
		$scope.update = function (){
			for(var i=0;i<$scope.items.length;i++){
				var item = $scope.items[i];
				if(item.id==$scope.edit.id){
					for(prop in $scope.edit){
						item[prop] = $scope.edit[prop];
					}
					break;
				}
			} 
		};
		
	});
	
	
})();