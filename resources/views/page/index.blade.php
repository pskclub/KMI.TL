@extends('layouts.master_layout')

@section('content')
    <div class="row" ng-app="kmitl">
        <div class="col-md-8 col-md-offset-2" ng-controller="UrlShortenerCtrl">

            <!-- Header -->
            <div class="text-center">
                <h1 class="text-shadow" style="padding-top: 60px;">
                    KMI<span class="color-primary">.</span>TL <br/>
                    <small>url shortener</small>
                </h1>
                <div class="input-group input-group-lg" ng-class="inputUrlClass">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-link"></span>
                </span>

                    <input id="inputUrl" type="url" class="form-control input-lg"
                           placeholder="Paste a link to shorten it"
                           ng-model="inputUrl" ng-keypress="insertUrl($event)" ng-click="clickInputUrl()">
                      <span class="input-group-btn">
        <button class="btn btn-primary" ng-click="insertUrlOnClick()" type="submit">SHORTEN</button>
      </span>
                </div>
                <small class="color-grey text-shadow">All KMI<span class="color-primary">.</span>TL URLs are public and
                    can be shared by anyone.
                </small>
            </div>

            <!-- Content -->
            <div id="short-urls" ng-if="urls.length">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-8 col-xs-6">Long Url</div>
                            <div class="col-md-3 col-xs-6">Short Url</div>
                            {{--<div class="col-md-1 hidden-xs">Info</div>--}}
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row" ng-repeat="url in urls">
                            <div class="col-md-8 col-xs-6 long-url">
                                <a target="_blank" href="@{{url.url}}" title="@{{url.url}}">@{{url.url}}</a></div>
                            <div class="col-md-3 col-xs-6 long-url">
                                <a target="_blank" href="@{{url.alias}}"
                                   title="@{{url.alias}}">@{{ url.alias.replace("http://", "") }}</a>
                            </div>
                          {{--  <div class="col-md-1 hidden-xs text-center">
                                <a target="_blank" ng-href="@{{url.info}}" href="#">
                                    <span class="glyphicon glyphicon-info-sign"></span>
                                </a>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection