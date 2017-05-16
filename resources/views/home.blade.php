@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8">
            <div class="panel panel-default">
               <div class="panel-heading">Cast Vote</div>
               <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/party/save">
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6" style="display: inline-block;">
                                <p><input id="" type="radio"  name="party_id" value="1" required autofocus style="display: inline-block;">
                                    <span>Party 1</span>
                                </p>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6" style="display: inline-block;">
                                <p><input id="" type="radio"  name="party_id" value="2" required autofocus style="display: inline-block;">
                                    <span>Party 2</span>
                                </p>
                            </div>
                        </div>

                         <button type="submit" class="btn btn-primary">
                                    Vote
                        </button>


                    </form>

               </div>

@endsection
