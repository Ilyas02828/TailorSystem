@extends('layouts.app')

@section('title')
    Add Order
@endsection

@section('content')
<head>
    <style type="text/css">
        label{
            font-size: 17px;
        }
    </style>
</head>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Qamis & Shalwar Style <small> Add New Order Data.</small></h3>
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
                                            STYLE ORDER FORM <small>Requierd</small>
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
                                                    {!! Form::open(['route'=>'style.store',$measurement, 'class'=>'form-horizontal m-b-30']) !!}
                                                        
                             <div class="form-group">

                                                            <label class="col-md-12">BIN</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('bin', 'full', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Full </label>
                                                                        </div>
                                                                    </div>
 <input type="hidden" name="order_id" value="{{$measurement->order_id}}">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('bin', 'half', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Half </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('bin', 'gol', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2"> Gol </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('bin', 'Choras', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Choras </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div>  
                                                             <div class="form-group">
                                                            <label class="col-md-12">Koler</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('koler', 'french', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> French </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('koler', 'simple', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Simple </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('koler', '2inch', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2"> 2insh </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('koler', 'sawa2inch', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Sawa 2 inch </label>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('koler', '3inch', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> 3 inch </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div>  
                                                            

                                                             <div class="form-group">
                                                            <label class="col-md-12">Asteen</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('asteen', 'golsada', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Gol Sada </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('asteen', 'golkaaf', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Gol Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('asteen', 'normalkaaf', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2"> Normal Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('asteen', 'choraskaaf', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Choras Kaaf</label>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('asteen', 'kaaf chota plate', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3">Kaaf Chota Plate </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('asteen', 'fit kaaf', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3">Fit Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('asteen', 'double kaaf', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3">Double Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('asteen', 'stad kaj', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3">Stad Kaj</label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('asteen', 'chak pati kaj', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3">Chak Pati Kaj </label>
                                                                        </div>
                                                                    </div>

                                                                </div>      
                                                            </div>
                                                        </div>  
                                          <div class="form-group">
                                                            <label class="col-md-12">Pati</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('pati', 'sada', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Sada </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('pati', 'ooper', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Ooper </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('pati', 'ghoom', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2"> Ghoom </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('pati', 'duble', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Double </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div>                                  
                                                       
                                                             <div class="form-group">
                                                            <label class="col-md-12">Pocket</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('pocket', 'single side', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Single Side </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('pocket', 'double side', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Double Side </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('pocket', 'front pocket choras', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2"> Front Pocket Choras </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('pocket', 'front pocket goal', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Front Pocket Gol </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div> 

                                                                   <div class="form-group">
                                                            <label class="col-md-12">Silaayi</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('silayi', 'single', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Single </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('silayi', 'double', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Double </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('silayi', 'single chamaktar', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2"> Single Chamktar </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'double chamaktar', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Double Chamaktar </label>
                                                                        </div>
                                                                    </div>
                                                                              <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'tak pey tak', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Tak Pey Tak </label>
                                                                        </div>
                                                                    </div>
                                                                              <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'choka', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Choka </label>
                                                                        </div>
                                                                    </div>


                                                                             <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'triple sada', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Triple silayi sada </label>
                                                                        </div>
                                                                    </div>

                                                                             <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'triple chamaktar', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Triple silayi chamaktar </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div> 

                                                                   <div class="form-group">
                                                            <label class="col-md-12">Galla</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('galla', 'afghani', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Afhani </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('galla', 'indian', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Indian </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('galla', 'qasmi', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2"> Qasmi </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div> 

                                                             
                                                                      <div class="form-group">
                                                            <label class="col-md-12">Daman</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('daman', 'choras', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Choras </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('daman', 'goal', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Goal </label>
                                                                        </div>
                                                                    </div>
                                                               
                                                                </div>      
                                                            </div>
                                                        </div> 





                                                                      <div class="form-group">
                                                            <label class="col-md-12">Desgin</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('design', 'papping', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Papping </label>
                                                                        </div>
                                                                    </div>
                                                                      <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('desgin', 'kurta', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Kurta </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('design', 'other', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Other </label>
                                                                        </div>
                                                                    </div>
                                                               
                                                                </div>      
                                                            </div>
                                                        </div>                                                                                                                                  <div class="form-group">
                                                            <label class="col-md-12">Button Desgin</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('button', 'kaj', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0"> Kaj  </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('button', 'ring', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Ring </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('button', 'other', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Other </label>
                                                                        </div>
                                                                    </div>
                                                               
                                                                </div>      
                                                            </div>
                                                        </div>      
                <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Other Deatils</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::textarea('other_measurements', null, ['rows'=>'1', 'class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>   
                                                            </div> 
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

