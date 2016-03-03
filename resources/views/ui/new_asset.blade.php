@extends('common.default')
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('css/panel.css')}}">
<script type="text/javascript">
    $(document).ready(function(){
        $('#done').click(function(){
            $('.general').prop('disabled',true);
        });
        
    });
</script>
@stop
@section('content')
 <div class="row">
 	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                            <li ><a href="#asset" data-toggle="tab">Link Asset</a></li>
                            <li><a href="#image" data-toggle="tab">Link Image</a></li>
                            <li><a href="#attachements" data-toggle="tab">Attachements</a></li>
                            <li><a href="#maintenance" data-toggle="tab">Maintenance</a></li>
                            <li><a href="#contracts" data-toggle="tab">Contracts</a></li>
                            <li><a href="#transaction" data-toggle="tab">Transaction History</a></li>

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#custom" data-toggle="tab">Custom Fields</a></li>
                                  
                                </ul>
                            </li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="general">@include('ui.new_asset.general')</div>
                        <div class="tab-pane fade" id="asset">@include('ui.new_asset.asset')</div>
                        <div class="tab-pane fade" id="image">Primary 3</div>
                        <div class="tab-pane fade" id="attachements">Primary 4</div>
                        <div class="tab-pane fade" id="maintenance">Primary 5</div>
                        <div class="tab-pane fade" id="contracts">Primary 5</div>
                        <div class="tab-pane fade" id="transaction">Primary 5</div>
                        <div class="tab-pane fade" id="transaction">Primary 5</div>
                    </div>
                </div>
            </div>
        </div>
 </div>
@stop