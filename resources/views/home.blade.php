@extends('layouts.app')


@section('content')

    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Chat Message Module</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-8" >
                                <div id="messages" ></div>
                            </div>
                            <div class="col-lg-8" >
                                <form action="{{ url('send-message') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="user" value="{{ auth()->user()->name }}" >
                                    <div class="form-group">
                                        <textarea class="form-control msg"></textarea>
                                    </div>
                                    <br/>
                                    <input type="button" value="Send" class="btn btn-success send-msg" id="send-msg">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection