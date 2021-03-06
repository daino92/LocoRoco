@extends('master')

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid user">
            @include('user.prof')
            <div class="col-lg-10">
                <div id="page-wrapper" class="dashboard">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">User Management</h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <span class="fa fa-user"></span> User / Show
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <h1 class="username">Update {{Auth::user()->username}}'s information</h1>
                        <div class="form_center">
                           {!! Form::model($user,['method' => 'PATCH','route'=>['update.user',Auth::user()->id],'files'=>true]) !!}
                            <fieldset>
                                <div class="form-group">
                                    {!! Form::label('Name', 'Name:') !!}
                                    {!! Form::text('name',Auth::user()->name,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Surname', 'Surname:') !!}
                                    {!! Form::text('surname',Auth::user()->surname,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Username', 'Username:') !!}
                                    {!! Form::text('username',Auth::user()->username,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('E-mail', 'E-mail:') !!}
                                    {!! Form::text('email',Auth::user()->email,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Password', 'Password:') !!}
                                    {!! Form::text('password',Auth::user()->password,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('File', 'Change Profile Picture:') !!}
                                    {!! Form::file('avatar') !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </fieldset>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection