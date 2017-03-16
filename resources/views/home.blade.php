@extends('layouts.app')

@section('content')
    <div id="dashboard" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Websites</h2></div>

                    <div class="panel-body">
                        <ul class="list-group">
                            @if(sizeof($sites) > 0)
                                @foreach($sites as $site)
                                    <li class="list-group-item row ">
                                        <div class="col-xs-6 col-md-9 pull-left">
                                            <small>{{date('D jS \o\f F, Y',strtotime($site->updated_at))}}</small>
                                            <h3>{{$site->name}}</h3>
                                        </div>
                                        <div class="col-xs-6 col-md-3 pull-left">
                                            <a href="{{$site->local_url}}" target="_blank" title="Open Gorilla URL" class="btn btn-lg btn-info pull-right"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
                                            <a href="{{$site->remote_url}}" target="_blank" title="Open Website-In-Dev URL" class="btn btn-lg btn-info pull-right"><i class="fa fa-external-link" aria-hidden="true"></i></a>
                                            <a href="/edit/{{$site->id}}" title="Edit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item row list-group-item-info">
                                    <div class="col-xs-12 pull-left">
                                        <h3>No websites</h3>
                                    </div>
                                </li>
                            @endif
                            <li class="list-group-item row list-group-item-success create-website" data-toggle="modal" data-target="#createWebsite">
                                <div class="col-xs-12 pull-left text-center">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Create
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
