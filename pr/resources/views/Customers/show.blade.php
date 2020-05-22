<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title', 'Page Title')
 

@section('content')
<form action="{{ route('customers.update', $customer->id) }}" method="post"> 

    @csrf
            <div class="wizard-header">
                <h3>
                   <b>View {{ $customer->first_name . " " . $customer->last_name }} <br>
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
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label>First Name:  {{ $customer->first_name }}</label> 
                          </div>
                          <div class="form-group">
                            <label>Last Name: {{ $customer->last_name }}</label> 
                          </div>
                          <div class="form-group">
                            <label>Email: {{ $customer->email }}</label> 
                          </div>
                      </div> 
                  </div>
                </div> 
            </div>
            <div class="wizard-footer height-wizard">
                <div class="pull-right">   
                    <a class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' href="{{ route('customers.index') }}">Go Back</a>
                </div>
 
                <div class="clearfix"></div>
            </div>

        </form>
@endsection