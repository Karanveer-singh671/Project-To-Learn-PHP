@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>
         {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
             <div class="form-group">
                 {!! Form::label('name', 'Name:') !!}
                 {!! Form::text('name',null, ['class'=>'form-control']) !!}
             </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::text('role_id',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        {!! Form::select('status',array(1 => 'Active', 0=> 'Not Active'), ['class'=>'form-control']) !!}
    </div>
             <div class="form-group">
             {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
             </div>
             {!! Form::close() !!}
    @endsection