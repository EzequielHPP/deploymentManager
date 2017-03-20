@extends('layouts.app')

@section('content')
    <div id="viewwebsite" class="container-fluid panel panel-default">
        <div class="row">
            <div class="col-md-12">
                @if(isset($error))
                    <div class="alert alert-dismissable alert-warning">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        <h4>
                            Alert!
                        </h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
                    </div>
                @endif
                @if(isset($success))
                    <div class="alert alert-success alert-dismissable">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        <h4>
                            Alert!
                        </h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
                    </div>
                @endif
                <div class="panel-heading">
                    <h3>
                        Viewing {{$currentSite->name}}
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-10">
                                <p id="site-description">
                                    <span class="label label-defaul pull-right js-editbutton action-buttons" data-target="site-description"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    {!! $currentSite->description !!}
                                </p>
                            </div>
                            <div class="col-md-2">
                                <span class="label label-defaul pull-right framework-logos" data-target="site-description"><img src="{{ URL::to('/') }}/images/{{$framework}}.png"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-success btn-lg btn-block">
                            Update Gorilla
                        </button>
                        <button type="button" class="btn btn-info btn-lg btn-block">
                            Update Website-in-dev
                        </button>
                        <button type="button" class="btn btn-lg btn-block btn-danger">
                            Remove Website
                        </button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Target
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(sizeof($logs) > 0)
                        @foreach($logs as $log)
                            <tr class="{{$log->status}}">
                                <td>
                                    {{$log->id}}
                                </td>
                                <td>
                                    {{ucwords($log->target)}}
                                </td>
                                <td>
                                    {{date('jS, \o\f M Y',strtotime($log->created_at))}}
                                </td>
                                <td>
                                    {{ucwords($log->status)}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="warning">
                            <td colspan="4">
                                No records for this website
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
