@extends('layouts.app')@section('title')    Add Order@endsection@section('content')                        <div class="row">                            <div class="col-xs-12">                                <div class="page-title-box">                                    <h3 class="page-title">Add Order <small> Add New Order Data.</small></h3>                                    <ol class="breadcrumb p-0 m-0">                                        <li>                                            <a href="#">Dashboard</a>                                        </li>                                        <li class="active">                                            Add Order                                        </li>                                    </ol>                                    <div class="clearfix"></div>                                </div>                            </div>                        </div>                        <!-- end row -->                        <!-- /row -->                        <div class="row">                            <div class="col-sm-12">                                <div class="portlet">                                    <div class="portlet-heading portlet-default">                                        <h3 class="portlet-title text-dark">                                            ORDER FORM <small>Requierd</small>                                        </h3>                                        <div class="portlet-widgets">                                                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="ion-minus-round"></i></a>                                            <span class="divider"></span>                                            <a href="#" class="zoom"><i class="ion-arrow-resize"></i></a>                                            <span class="divider"></span>                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>                                        </div>                                        <div class="clearfix"></div>                                    </div>                                    <div id="bg-default" class="panel-collapse collapse in">                                        <div class="portlet-body">                           				                        	<div class='row'>				                        		<div class="col-md-6 col-md-offset-3"> 						                            {!! Form::open(['route'=>'waskat.store', 'class'=>'form-horizontal m-b-30']) !!}						                                <div class="form-group">						                                    <label class="col-md-12">Customer Name</label>						                                    <div class="col-md-12">						                                         {!! Form::select('customer_id', $customer, null, ['id'=>'product_id', 'class'=>'form-control select2','required']) !!}						                                    </div>						                                </div>						                                <input type="hidden" name="ilyas" value="2" />									                    <div class="form-group">						                                    <label class="col-md-12">Staff Name</label>						                                    <div class="col-md-12">						                                         {!! Form::select('staff_id', $staff, null, ['id'=>'product_id', 'class'=>'form-control select2','required']) !!}						                                    </div>						                                </div>						                                  <!--  <div class="form-group">						                                    <label class="col-md-12">Staff Percentage</label>						                                    <div class="col-md-12">						                                         {!! Form::select('staff_id', $staff_percentage, null, ['class'=>'form-control select2','required']) !!}						                                    </div>						                                </div> -->						                                 <div class="form-group">						                                    <label class="col-md-12">Number of Suites</label>						                                    <div class="col-md-12">						                                         {!! Form::number('no_suite', '', ['class'=>'form-control','required']) !!}						                                    </div>						                                </div>						                                <div class="form-group">						                                    <label class="col-md-12">Delivery Date</label>						                                    <div class="col-md-12">						                                         {!! Form::date('delivery_date', '', ['class'=>'form-control','required']) !!}						                                    </div>						                                </div>						                                <div class="row">						                                	<div class="col-md-6">						                                		<div class="form-group">						                                    		<label class="col-md-12">Amount</label>						                                    		<div class="col-md-12">						                                				{!! Form::number('order_amount', '', ['class'=>'form-control','placeholder'=>'Enter Total Amount', 'required']) !!}						                                			</div>						                                		</div>							                                	</div>						                                	<div class="col-md-6">						                                		<div class="form-group">						                                    		<label class="col-md-12">Paid</label>						                                    		<div class="col-md-12">						                                				{!! Form::number('order_paid', '', ['class'=>'form-control','placeholder'=>'Enter Paid Amount','required']) !!}						                                			</div>							                                		</div>						                                	</div>						                                </div>							                            <div class="form-group">						                                    <label class="col-md-12">Order Details</label>						                                    <div class="col-md-12">						                                         {!! Form::textarea('order_details', '', ['rows'=>'2', 'class'=>'form-control', 'placeholder'=>'Enter Order Details','required']) !!}						                                    </div>						                                </div>   							                            <div class="form-group">							                                <label class="col-md-12">Status</label>							                                <div class="col-md-12 ">							                                	<div class="row">							                                		<div class="col-md-3">								                                		<div class="radio radio-info radio-inline">									                                        {!! Form::radio('order_status', 'Confirm', '', ['id'=>'inlineCheckbox0']) !!}									                                        <label for="inlineCheckbox0"> Confirm </label>									                                    </div>								                                    </div>								                                    <div class="col-md-3">									                                    <div class="radio radio-warning radio-inline">									                                        {!! Form::radio('order_status', 'Processing', '', ['id'=>'inlineCheckbox1']) !!}									                                        <label for="inlineCheckbox1"> Processing </label>									                                    </div>								                                    </div>								                                    <div class="col-md-3">									                                    <div class="radio radio-success radio-inline">									                                        {!! Form::radio('order_status', 'Ready', '', ['id'=>'inlineCheckbox2']) !!}									                                        <label for="inlineCheckbox2"> Ready </label>									                                    </div>								                                    </div>								                                    <div class="col-md-3">									                                    <div class="radio radio-danger radio-inline">									                                        {!! Form::radio('order_status', 'Delivered', '', ['id'=>'inlineCheckbox3']) !!}									                                        <label for="inlineCheckbox3"> Delivered </label>									                                    </div>								                                    </div>							                                	</div>									                                </div>							                            </div>								                        									                    {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}									                {!! Form::close() !!}									            </div>									        </div>									    </div>            						            </div>					            </div>					        </div>        			            </div>			        </div>			    </div>                            <!-- /row -->            </div>         @endsection