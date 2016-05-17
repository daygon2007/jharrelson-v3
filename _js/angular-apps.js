var blogApp = new angular.module('blogPage', ['ui.router', 'ngResource'] );

blogApp.factory('Posts', function( $resource ){
    return $resource( '../' + appInfo.api_url + 'posts/:ID', {
        ID: '@id'
    })
});

blogApp.controller ('ListCtrl', ['$scope', 'Posts', function($scope, Posts) {
    console.log('ListCtrl');
    $scope.page_title = "Sweetness Blog Listing";
    Posts.query(function(res){
        $scope.posts = res;
    })
}]);

blogApp.config( function( $stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise('/');
    $stateProvider
        .state( 'list', {
            url: '/',
            controller: 'ListCtrl',
            templateUrl: appInfo.template_directory + 'angular-templates/list.html'
    })
});

blogApp.filter('renderCode', ['$sce', function ( $sce ){
    return function( text ) {
        return $sce.trustAsHtml(text);
    }
}]);