<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title', 'Page Title')
 

@section('content')
<form action="{{ route('customers.store') }}" autocomplete="off" method="post"> 

    @csrf
            <div class="wizard-header">
                <h3>
                   <b>BUILD</b> YOUR PROFILE <br>
                   <small>This information will let us know more about you.</small>
                </h3>
            </div>

            <div class="wizard-navigation">
                <ul>
                    <li><a href="#about" data-toggle="tab">About</a></li>
                    {{-- <li><a href="#account" data-toggle="tab">Account</a></li>
                    <li><a href="#address" data-toggle="tab">Address</a></li> --}}
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
                            <input  name="firstname" type="text" class="form-control" placeholder="firstname...">
                          </div>
                          <div class="form-group">
                            <label>Last Name <small>(required)</small></label>
                            <input name="lastname" type="text" class="form-control" placeholder="lastname...">
                          </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                          <div class="form-group">
                              <label>Email <small>(required)</small></label>
                              <input name="email" type="email" class="form-control" placeholder="user@gmail.com">
                          </div>
                      </div>
                  </div>
                </div>
                {{-- <div class="tab-pane" id="account">
                    <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-checkbox">
                                    <input type="checkbox" name="job[]" value="Design">
                                    <div class="icon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <h6>Design</h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-checkbox">
                                    <input type="checkbox" name="job[]" value="Code">
                                    <div class="icon">
                                        <i class="fa fa-terminal"></i>
                                    </div>
                                    <h6>Code</h6>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="choice" data-toggle="wizard-checkbox">
                                    <input type="checkbox" name="job[]" value="Develop">
                                    <div class="icon">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    <h6>Develop</h6>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="address">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="info-text"> Are you living in a nice area? </h4>
                        </div>
                        <div class="col-sm-7 col-sm-offset-1">
                             <div class="form-group">
                                <label>Street Name</label>
                                <input name="street_name" type="text" class="form-control" placeholder="">
                              </div>
                        </div>
                        <div class="col-sm-3">
                             <div class="form-group">
                                <label>Street Number</label>
                                <input type="text" class="form-control" placeholder="">
                              </div>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                             <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="">
                              </div>
                        </div>
                        <div class="col-sm-5">
                             <div class="form-group">
                                <label>Country</label><br>
                                 <select name="country" class="form-control">
                                    <option value="Moldova"> Moldova </option>
                                    <option value="Romania"> Romania </option>
                                    <option value="Ukraina"> Ukraina </option> 
                                </select>
                              </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="wizard-footer height-wizard">
                <div class="pull-right">
                    {{-- <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' /> --}}
                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                </div>

                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                </div>
                <div class="clearfix"></div>
            </div>

        </form>
@endsection