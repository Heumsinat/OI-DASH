@extends('layouts.user')

@section('content')
    <!-- widget div-->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="display:inline" class="pull-left">
                            <b>Edit User - {{ $user->name }}</b>
                        </h4>
                        <div class="clearfix"></div>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-7">
                            This is Edit Page
                        </div>
                        <div class="col-md-5">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end widget div -->
@stop