(function(){
	angular.module('app',[]).controller('mycontroller', function($scope, $filter){
		
		$scope.sortState = {'id':'+','name':'+','price':'+','quality':'+'};
		$scope.search = function(searchText){
			$scope.items = $filter('filter')($scope.original, searchText);
		}
		
		$scope.sortBy = function(predicate){
		    $scope.reverse = ($scope.predicate === predicate) ? !$scope.reverse : false;
		    $scope.predicate = predicate;
		}
	});
	
	
})();