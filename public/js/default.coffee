# Angular

angular.module('kmitl', [])
  .controller 'UrlShortenerCtrl', ['$scope' ,'$http' , ($scope, $http)->

    ele = angular.element

    $scope.urls = []
    $scope.inputUrl = ''
    $scope.inputUrlClass = ''

    $scope.insertUrl = (event)->

      # press enter
      if event.keyCode == 13

        # test url
        if /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/.test($scope.inputUrl)

          $scope.inputUrlClass = ''

          # shorten url
          $http.post('pages/ajax_add_url.json', { url: $scope.inputUrl }).success (data)->

            $scope.urls.push data

            ele('#inputUrl').val(data.alias).get(0).select()

        else

          $scope.inputUrlClass = 'has-error'

    # select on click
    $scope.clickInputUrl = ()->
      ele('#inputUrl')[0].select()

  ]