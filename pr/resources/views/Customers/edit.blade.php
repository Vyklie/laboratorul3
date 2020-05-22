<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title', 'Page Title')
 
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@section('content')
<form action="{{ route('customers.update', $customer->id) }}" method="post"> 

    @csrf
    @method('patch')
            <div class="wizard-header">
                <h3>
                   <b>Edit {{ $customer->first_name . " " . $customer->last_name }} <br>
                   <small>This information will let us know more about you.</small>
                </h3> 
            </div>

            <div class="wizard-navigation">
                <ul>
                    <li><a href="#about" data-toggle="tab"></a></li> 
                </ul>

            </div>

            <div class="tab-content">
                <div class="tab-pane" id="about">
                  <div class="row">
                      <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                      <div class="col-sm-4 col-sm-offset-1">
                         <div class="picture-container">
                              <div class="picture">
                                  <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                  <input type="file" id="wizard-picture">
                              </div>
                              <h6>Choose Picture</h6>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label>First Name <small>(required)</small></label>
                            <input value="{{ $customer->first_name }}"  name="first_name" type="text" class="form-control" placeholder="firstname...">
                          </div>
                          <div class="form-group">
                            <label>Last Name <small>(required)</small></label>
                            <input value="{{ $customer->last_name }}" name="last_name" type="text" class="form-control" placeholder="lastname...">
                          </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                          <div class="form-group">
                              <label>Email <small>(required)</small></label>
                              <input value="{{ $customer->email }}" name="email" type="email" class="form-control" placeholder="user@gmail.com">
                          </div>
                      </div>
                  </div>
                </div> 
            </div>
            <div class="wizard-footer height-wizard">
                <div class="pull-right"> 
                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' /> 
                </div>
 
                <div class="clearfix"></div>
            </div>

        </form>
@endsection