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
                                                        

                                        
                                                            <div class="col-md-12">
                                                                <div class="form-group" >
                                                                <div class="col-md-6 " rowsspan="2">

                                                                    <label for="">Kalar</label>
<input type="radio" id="kalar"  name="bin" onclick="binFunction()"  />
</div>
                                                                      <div class="col-md-6" rowsspan="2">
<label for="">Bin</label>
<input type="radio" id="bin"  name="bin" onclick="binFunction()">
</div>
                                                                </div>       
                                                            </div>  
<script type="text/javascript">
  function binFunction()
  {
    var kalar = document.getElementById('kalar');
    var bin = document.getElementById('bin');
    if(kalar.checked)
    {
      
      document.getElementById("binDisplay").style.display = "none";
      document.getElementById("kalarDisplay").style.display = "block";

    }else {
      
      
      document.getElementById("kalarDisplay").style.display = "none";
      document.getElementById("binDisplay").style.display = "block";
    }
  }
</script>
<style> 
  #kalarDisplay {
    
    display: none;
  }
  #binDisplay {
    display: none;
  }
</style>



                                                         <div id="binDisplay"   class="form-group">
                                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">BIN chorai size-  بین چورای سائز
</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('bin_ch', null, ['class'=>'form-control',
                                                                        'placeholder'=>'Write the bin size','']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>  

                                                            <label class="col-md-12">BIN Style بین </label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                      <div class="col-md-6" rowsspan="2">
                                                                        
                                                         <img src="{{asset('images/halft-ban.png')}}" style="height: 90px; width:200px;" >
 
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('binstyle', 'full', '', ['id'=>'inlineCheckbox0']) !!}
                                                                            <label for="inlineCheckbox0">  Half Goal نصف گول


  </label>
                                                                        </div>
                                                                    </div>
 <input type="hidden" name="order_id" value="{{$measurement->order_id}}">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('binstyle', 'half', '', ['id'=>'inlineCheckbox1']) !!}
                                                                            <label for="inlineCheckbox1"> Full Goal </label>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('binstyle', 'gol', '', ['id'=>'inlineCheckbox2']) !!}
                                                                            <label for="inlineCheckbox2">Half Seedha </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('binstyle', 'Choras', '', ['id'=>'inlineCheckbox3']) !!}
                                                                            <label for="inlineCheckbox3"> Full Seedha </label>
                                                                        </div>
                                                                                
                                                                    </div>
                                                                        <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('binstyle', '0', '', ['id'=>'inlineCheckbox55']) !!}
                                                                            <label for="inlineCheckbox55"> No </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div>  
                                                        
                                                        
                                                        
                                     <div id="kalarDisplay" class="form-group">
                                                            <label class="col-md-12">Koler کالر</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                      <div class="col-md-6" rowsspan="2">
                                                                        
                                                         <img src="{{asset('images/ban.png')}}" style="height: 90px; width:200px;" >
 
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('koler', 'french', '', ['id'=>'inlineCheckbox4']) !!}
                                                                            <label for="inlineCheckbox4"> French </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('koler', 'simple', 'checked', ['id'=>'inlineCheckbox5']) !!}
                                                                            <label for="inlineCheckbox5"> Simple </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('koler', '2inch', '', ['id'=>'inlineCheckbox50']) !!}
                                                                            <label for="inlineCheckbox50"> 2insh </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('koler', 'sawa2inch', '', ['id'=>'inlineCheckbox6']) !!}
                                                                            <label for="inlineCheckbox6"> Sawa 2 inch </label>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('koler', '3inch', '', ['id'=>'inlineCheckbox7']) !!}
                                                                            <label for="inlineCheckbox7"> 3 inch </label>
                                                                        </div>
                                                                    </div>
                                                                       <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('koler', '0', '', ['id'=>'inlineCheckbox54']) !!}
                                                                            <label for="inlineCheckbox54"> No </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div>  
                                                        
                                                                                                                        
                                                    



                                                            
                                                             <div class="col-md-12">
                                                                <div class="form-group" >
                                                                <div class="col-md-6 " rowsspan="2">

                                                                    <label for="kaaf">Kaaf</label>
<input type="radio" id="kaaf"  name="kaaf11" onclick="sadaasteenFunction()"  />
</div>
                                                                      <div class="col-md-6" rowsspan="2">
<label for="sadaasteen">Sada Asteen</label>
<input type="radio" id="sadaasteen"  name="kaaf11" onclick="sadaasteenFunction()">
</div>
                                                                </div>       
                                                            </div>  
                                                                    
<script type="text/javascript">
  function sadaasteenFunction()
  {
    //   alert('test');
    var kaaf = document.getElementById('kaaf');
    var sadaasteen = document.getElementById('sadaasteen');
    if(kaaf.checked)
    {
      
      document.getElementById("sadaasteenDisplay").style.display = "none";
      document.getElementById("kaafDisplay").style.display = "block";

    }else {
      
      
      document.getElementById("kaafDisplay").style.display = "none";
      document.getElementById("sadaasteenDisplay").style.display = "block";
    }
  }
  
  
</script>
<style> 
  #kaafDisplay {
    
    display: none;
  }
  #sadaasteenDisplay {
    display: none;
  }
</style>



                                                             <div id="sadaasteenDisplay" class="form-group"> 
                                                            <label class="col-md-12">Sada Asteen  </label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                           
                                                                    
                                                                   
                                                                                     <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Size </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('asteensize', null, ['class'=>'form-control',
                                                                        'placeholder'=>'size',' ']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12"> Other </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('asteenother', null, ['class'=>'form-control',
                                                                        'placeholder'=>'other','']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                                    </div></div></div>
                                                                    
                                                            <div id="kaafDisplay" class="form-group" > 
                                                            <label class="col-md-12">Kaaf  </label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                           
                                                                                     <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Lambai </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('kaaflambai', null, ['class'=>'form-control',
                                                                        'placeholder'=>'Kaaf Lambai','']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12"> chorai </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('kaafsize', null, ['class'=>'form-control',
                                                                        'placeholder'=>'Kaaf chorai','']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                    
                                                                      <div class="col-md-6" rowsspan="2">
                                                                        
                                                         <img src="{{asset('images/kaf.png')}}" style="height: 150px; width:200px;" >
 
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('kaaf', 'golkaaf', 'checked', ['id'=>'inlineCheckbox9']) !!}
                                                                            <label for="inlineCheckbox9"> Gol Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('kaaf', 'normalkaaf', '', ['id'=>'inlineCheckbox10']) !!}
                                                                            <label for="inlineCheckbox10"> Normal Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('kaaf', 'choraskaaf', '', ['id'=>'inlineCheckbox11']) !!}
                                                                            <label for="inlineCheckbox11"> Choras Kaaf</label>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('kaaf', 'kaaf chota plate', '', ['id'=>'inlineCheckbox12']) !!}
                                                                            <label for="inlineCheckbox12">Kaaf Chota Plate </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('kaaf', 'fit kaaf', '', ['id'=>'inlineCheckbox13']) !!}
                                                                            <label for="inlineCheckbox13">Fit Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('kaaf', 'double kaaf', '', ['id'=>'inlineCheckbox14']) !!}
                                                                            <label for="inlineCheckbox14">Double Kaaf </label>
                                                                        </div>
                                                                    </div>
                                                                      <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('kaaf', '0', '', ['id'=>'inlineCheckbox543']) !!}
                                                                            <label for="inlineCheckbox55"> No </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-6">
                                                                            <!--<label class="col-md-12"> Other </label>-->
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('kaafother', null, ['class'=>'form-control',
                                                                        'placeholder'=>'other','']) !!}
                                                                    </div> 
                                                                    </div>

                                                                </div>      
                                                            </div>
                                                        </div> 
                                                        
                                                                            <div class="form-group">
                                                            <label class="col-md-12">Daman دامن</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('daman', 'choras', '', ['id'=>'inlineCheckbox36']) !!}
                                                                            <label for="inlineCheckbox"36> Choras </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('daman', 'goal', 'checked', ['id'=>'inlineCheckbox37']) !!}
                                                                            <label for="inlineCheckbox37"> Goal </label>
                                                                        </div>
                                                                    </div>
                                                               
                                                                </div>      
                                                            </div>
                                                        </div>

                                                           <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Pati </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('patisize', null, ['class'=>'form-control',
                                                                        'placeholder'=>'Pati Size','']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>   
                                          <div class="form-group">
                                                            <label class="col-md-12">Pati Style پٹی</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                       <div class="col-md-6" rowsspan="2">
                                                                        
                                                         <img src="{{asset('images/sada-patti.png')}}" style="height: 90px; width:200px;" >
 
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('pati', 'sada', '', ['id'=>'inlineCheckbox17']) !!}
                                                                            <label for="inlineCheckbox17"> Sada </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('pati', 'ooper', 'checked', ['id'=>'inlineCheckbox18']) !!}
                                                                            <label for="inlineCheckbox18"> Ooper </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('pati', 'ghoom', '', ['id'=>'inlineCheckbox19']) !!}
                                                                            <label for="inlineCheckbox19"> Ghoom </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('pati', 'duble', '', ['id'=>'inlineCheckbox20']) !!}
                                                                            <label for="inlineCheckbox20"> Double </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div>                                  
                                                        
                                                            
                                                       
                                                             <div class="form-group">
                                                            <label class="col-md-12">Front Pocket  فرنٹپاکٹ</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                       <div class="col-md-6" rowsspan="2">
                                                                        
                                                         <img src="{{asset('images/frontpock.png')}}" style="height: 90px; width:200px;" >
 
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('pocketfront', 'yes', 'checked', ['id'=>'inlineCheckbox21']) !!}
                                                                            <label for="inlineCheckbox21"> Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('pocketfront', 'no', '', ['id'=>'inlineCheckbox22']) !!}
                                                                            <label for="inlineCheckbox22"> No </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 </div>
                                                        </div> 
                                                        
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Front Pocket Size </label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('frontpocketsize', null, ['class'=>'form-control',
                                                                        'placeholder'=>'Pati Size','']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                        
                                                                                              <div class="form-group">
                                                            <label class="col-md-12">Shalwar Pocket  </label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                       <div class="col-md-6" rowsspan="2">
                                                                        
                                                         <img src="{{asset('images/frontpock.png')}}" style="height: 90px; width:200px;" >
 
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('pocketshalwar', 'yes', '', ['id'=>'inlineCheckbox71']) !!}
                                                                            <label for="inlineCheckbox71"> Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('pocketshalwar', 'no', 'checked', ['id'=>'inlineCheckbox72']) !!}
                                                                            <label for="inlineCheckbox72"> No </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 </div>
                                                        </div> 

                                                                                  <div class="form-group">
                                                            <label class="col-md-12">Pocketside  سایڈ پاکٹ</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                       <div class="col-md-6" rowsspan="2">
                                                                        
                                                         <img src="{{asset('images/frontpock.png')}}" style="height: 90px; width:200px;" >
 
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('pocketside', '1', 'checked', ['id'=>'inlineCheckbox80']) !!}
                                                                            <label for="inlineCheckbox80"> 1</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('pocketside', '2', '', ['id'=>'inlineCheckbox81']) !!}
                                                                            <label for="inlineCheckbox81"> 2 </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 </div>
                                                        </div> 

                                                                   <div class="form-group">
                                                            <label class="col-md-12">Silaayi سلایی</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('silayi', 'single', 'checked', ['id'=>'inlineCheckbox25']) !!}
                                                                            <label for="inlineCheckbox25"> Single </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('silayi', 'double', '', ['id'=>'inlineCheckbox26']) !!}
                                                                            <label for="inlineCheckbox26"> Double </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('silayi', 'single chamaktar', '', ['id'=>'inlineCheckbox27']) !!}
                                                                            <label for="inlineCheckbox27"> Single Chamktar </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'double chamaktar', '', ['id'=>'inlineCheckbox28']) !!}
                                                                            <label for="inlineCheckbox28"> Double Chamaktar </label>
                                                                        </div>
                                                                    </div>
                                                                              <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'tak pey tak', '', ['id'=>'inlineCheckbox29']) !!}
                                                                            <label for="inlineCheckbox29"> Tak Pey Tak </label>
                                                                        </div>
                                                                    </div>
                                                                              <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'choka', '', ['id'=>'inlineCheckbox30']) !!}
                                                                            <label for="inlineCheckbox30"> Choka </label>
                                                                        </div>
                                                                    </div>


                                                                             <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'triple sada', '', ['id'=>'inlineCheckbox31']) !!}
                                                                            <label for="inlineCheckbox31"> Triple silayi sada </label>
                                                                        </div>
                                                                    </div>

                                                                             <div class="col-md-3">
                                                                        <div class="radio radio-danger radio-inline">
                                                                            {!! Form::radio('silayi', 'triple chamaktar', '', ['id'=>'inlineCheckbox32']) !!}
                                                                            <label for="inlineCheckbox32"> Triple silayi chamaktar </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div> 

                                                                   <div class="form-group">
                                                            <label class="col-md-12">Galla گلہ</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('galla', 'afghani', '', ['id'=>'inlineCheckbox33']) !!}
                                                                            <label for="inlineCheckbox33"> Afghani </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('galla', 'Normal', 'checked', ['id'=>'inlineCheckbox34']) !!}
                                                                            <label for="inlineCheckbox34"> Normal </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-success radio-inline">
                                                                            {!! Form::radio('galla', 'indian', '', ['id'=>'inlineCheckbox35']) !!}
                                                                            <label for="inlineCheckbox35"> indian </label>
                                                                        </div>
                                                                    </div>
                                                                </div>      
                                                            </div>
                                                        </div> 

                                                             
                                                   

                                                                <div class="form-group">
                                                     <label class="col-md-12">Desgin ڈیزائن</label>
                                                            <div class="col-md-12 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-info radio-inline">
                                                                            {!! Form::radio('design', 'papping', '', ['id'=>'inlineCheckbox38']) !!}
                                                                            <label for="inlineCheckbox38"> papping  </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('design', 'kurta', '', ['id'=>'inlineCheckbox39']) !!}
                                                                            <label for="inlineCheckbox39"> kurta </label>
                                                                        </div>
                                                                    </div>
                                                                           <div class="col-md-4">
                                                                        <div class="radio radio-warning radio-inline">
                                                                            {!! Form::radio('design', 'simple', 'checked', ['id'=>'inlineCheckbox97']) !!}
                                                                            <label for="inlineCheckbox97"> Simple </label>
                                                                        </div>
                                                                    </div>
                                                               
                                                                </div>      
                                                            </div>
                                                        </div> 


                                                           
                                                             <div class="col-md-12">
                                                                <div class="form-group">
                                                                 <label class="col-md-12">Button Desgin ڈیزائن بٹن</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('button', null, ['class'=>'form-control',
                                                                        'placeholder'=>'Write the Button design','']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>      




                                                  

                <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Other Deatils</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::textarea('other_measurements', null, ['rows'=>'1', 'class'=>'form-control','']) !!}
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
                                                            </div>  
<script type="text/javascript">
  function binFunction()
  {
    var kalar = document.getElementById('kalar');
    var bin = document.getElementById('bin');
    if(kalar.checked)
    {
      
      document.getElementById("binDisplay").style.display = "none";
      document.getElementById("kalarDisplay").style.display = "block";

    }else {
      
      
      document.getElementById("kalarDisplay").style.display = "none";
      document.getElementById("binDisplay").style.display = "block";
    }
  }
</script>
<style> 
  #kalarDisplay {
    
    display: none;
  }
  #binDisplay {
    display: none;
  }
</style>

         
@endsection

