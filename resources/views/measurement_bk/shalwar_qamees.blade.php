@extends('layouts.app')

@section('title')
    Add Order
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Shalwar & Qamees <small> Add New Order Data.</small></h3>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Order
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portlet">
                                    <div class="portlet-heading portlet-default">
                                        <h3 class="portlet-title text-dark">
                                            ORDER FORM <small>Requierd</small>
                                        </h3>
                                        <div class="portlet-widgets">                                            
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" class="zoom"><i class="ion-arrow-resize"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="bg-default" class="panel-collapse collapse in">
                                        <div class="portlet-body">                           
                                            <div class='row'>
                                                <div class="col-md-6 col-md-offset-3"> 
                                                     {!! Form::model($measurement, ['route'=>['measurements.update', $measurement->id], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30']) !!}

                                                
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Lambai</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('lambai', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                       <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Tera</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('tera', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Asteen</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('asteen', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Koler</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('koler', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Chati</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('chati', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Kamar</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('kamar', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Daman </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('daman', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                                  <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Shalwar Lambai </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('shalwar', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                                  <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Shalwar Gear & Hassan </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('s_g_s', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>  
                                                                  <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Pant Shalwar</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('pant_s', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>        
                                                       
                                                                 <!-- <a href="shalwar_style">       
                                                                 <button type="button" class="btn-danger"> NEXT</button> </a>     -->                                       
                                                        {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>            
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>            
                <!-- /row -->
            </div>

         
@endsection

