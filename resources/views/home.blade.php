@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Websites</h2></div>

                    <div class="panel-body">
                        <ul class="list-group">
                            @if(sizeof($sites) > 0)
                                @foreach($sites as $site)
                                    <li class="list-group-item">
                                        {$site->name}
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item list-group-item-info">
                                    No websites
                                </li>
                            @endif
                            <li class="list-group-item list-group-item-success create-website" data-toggle="modal" data-target="#mainmodal">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Create
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
