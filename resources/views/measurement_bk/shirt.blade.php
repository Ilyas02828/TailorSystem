@extends('layouts.app')

@section('title')
    Add Order
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Waskat <small> Add New Order Data.</small></h3>
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
                                                 {!! Form::model($measurement, ['route'=>['measur_shirt.update', $measurement->id], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30']) !!}
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
                                                                    <label class="col-md-12">Chati </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('chati', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                                   <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Hip </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('hip', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                                
                                                        


                                                            <p class="title text-primary font-w600" ><b>Style / Desgin :</b></p> 
                                                       <div class="form-group">
                                                            <label class="col-md-12">Daman</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('daman', 'goal', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Goal </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('daman', 'seedha', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Seedha </label>
                                                                        </div>
                                                                    </div>
                                                             
                                                                </div>      
                                                            </div>
                                                        </div> 

                                                        <div class="form-group">
                                                            <label class="col-md-12">Pati</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('pati', 'english', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> English </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('pati', 'sada', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Sada </label>
                                                                        </div>
                                                                    </div>
                                                             
                                                                </div>      
                                                            </div>

                                                             <div class="form-group">
                                                            <label class="col-md-12">Kaaf</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('kaaf', 'normal', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Normal </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('kaaf', 'fit', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Fit </label>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('kaaf', 'choras', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Choras </label>
                                                                        </div>
                                                                    </div>

                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('kaaf', 'goal', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Goal </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div></div>


                                                              <div class="form-group">
                                                            <label class="col-md-12">Aasteen</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('asteen_design', 'Coalfnfirm', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Half </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('asteen_design', 'full', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Full </label>
                                                                        </div>
                                                                    </div>
                                                             
                                                                </div>      
                                                            </div>


                                                                    <br><br>  <br><br>
                                                                 <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Other Deatils</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::textarea('other_measurements', null, ['rows'=>'1', 'class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>   
                                                            </div>  
                                                        </div> 
                                                       
                                                                 <!-- <a href="shalwar_style">       
                                                                 <button type="button" class="btn-danger"> NEXT</button> </a>   -->                              </div>           
                                                        {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>            
                                    </div>
                                </div>
                            </div>        
                        </div>
           
         
@endsection

