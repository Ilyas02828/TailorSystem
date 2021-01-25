@extends('layouts.app')

@section('title')
    Print Order
@endsection

@section('content')


  

  
    <link href="assets/css/custom-style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <style type="text/css">
    @media print {
    a[href*='//']:after {
        content:" (" attr(href) ") ";
        color: $primary;
    }
    .footer
    {
       display:none; 
    }
  @page {
  size: auto;
  margin: 0;
       }
}
     
      {
        #logo
        {
          float: left;

        }
        #text
        {
          float: right;

        }
        
      }
      <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


    </style>


 <div class="container" >
     

      <div  class="row text-center contact-info" style="font-style:bold">
         <div class="col-lg-18 col-md-8 col-sm-8" >
             <hr />
             <span>
                 <strong>Name : </strong>{{ $order->customer->customer_name }}
             </span>
             <span>
                 <strong>Call : </strong> {{$order->customer->customer_phone }}
             </span>
              <span>
                 <strong>Register_No: </strong >{{$order->customer->customer_reg }}
             </span><br>
               <span>
                 <strong>Delivery Date: </strong >{{$order->delivery_date }}
             
             
         </div>
     </div> 
     
     <br>

     <div class="row" style="margin-left: 13%; ">
         <div class="col-lg-12 col-md-12 col-sm-12">
      
                  <div class="row">
                    <div style="float:left" class="col-md-2 col-sm-2">
                      
                      <table id="table2" class="table-bordered" >
          
                          <tr >
                            <th style="text-align: center;" colspan="4">Title:NAAP </th>
                          </tr>
                          <tr>
                            <th>Name</th>
                            <th>Size</th>
                            
                          </tr>
                      
                          <tr> 
                                 @if($order->shalwar_qamees->lambai!='0')
                                  <td>لمبائی</td> 
                                    <td> {{$order->shalwar_qamees->lambai}}</td>
                                                                  
                                                                        @endif
                                                                        
                                                                    
                               @if($order->shalwar_qamees->tera!= '0')
                                                                  </tr><tr>

                                 <td>تھیرا</td>
                                 <td>{{$order->shalwar_qamees->tera}}</td>
                                                                        @endif
                                                                        
                                                                     
                                    @if($order->shalwar_qamees->asteen != '0')
                                                                    </tr><tr>

                                     <td>آستین</td>   

                                    <td>{{$order->shalwar_qamees->asteen}}</td>
                                                                        @endif
                                         </tr>
                                         
                          <tr>                       
                                   @if($order->shalwar_qamees->asteen_moda != '0')
                                          <td> موآڈاستین</td>   
                                     <td>{{$order->shalwar_qamees->asteen_moda}} 
                                                                        @endif
                                                                        </td>
                                                                        
                                                                     
                                       @if($order->shalwar_qamees->koler != '0')
                                    </tr><tr>

                                        <td> کالر</td>

                                                               <td>  {{$order->shalwar_qamees->koler}}</td>
                                                                        @endif
                                                                      
                                        @if($order->shalwar_qamees->chati != '0')
                                    </tr><tr>
                                         <td>چھاتی</td> 
                                                                       <td>{{$order->shalwar_qamees->chati}}</td>
                                                                        @endif
                                                                    </tr>
                          <tr>
                                         @if($order->shalwar_qamees->kamar != '0')
                                              <td>کمر</td>       
                                                 <td>  {{$order->shalwar_qamees->kamar}}</td>                               
                                                 </tr><tr>

                                                                        @endif
                                                                       
                                          @if($order->shalwar_qamees->daman != '0')
                                           <td>دامن</td> 
                                             <td>{{$order->shalwar_qamees->daman}}</td>
                                                                        @endif
                                                                        
                                                                      
                                           @if($order->shalwar_qamees->down != '0')
                                      </tr><tr>

                                              <td> ڈاون</td>
                                             <td>{{$order->shalwar_qamees->down}}</td>
                                                                        @endif
                                                </tr>
                         <tr>
                                              @if($order->shalwar_qamees->taik != '0')
                                                <td> ٹیک</td>
                                              <td> {{$order->shalwar_qamees->taik}}</td>
                                                                        @endif
                                                                        </td>
                                               
                                               @if($order->shalwar_qamees->bown != '0')
                                        </tr><tr>

                                                 <td> بون</td>
                                                     <td> {{$order->shalwar_qamees->bown}}</td>
                                                                        @endif
                                              
                                                @if($order->shalwar_qamees->leftkam!= 'no')
                                                  <td>لفٹ کم</td>
                                                                      <td>{{$order->shalwar_qamees->leftkam}}</td>
                                                                        @endif
                                                                    </tr>
                         <tr>
                                               @if($order->shalwar_qamees->shalwar != '0')
                                                 <td>لمبائی شلوار</td>
                                                   <td>{{$order->shalwar_qamees->shalwar}}</td> 
                                                                        @endif   
                                                                        
                                                                        
                                                                        
                                                                      
                                                 </tr><tr>
                                                     @if($order->shalwar_qamees->s_g_s != '0')
                                                        <td> گیر حسن</td>
                                                         <td>   {{$order->shalwar_qamees->s_g_s}}</td>
                                                            @endif
                                                            
                                                           
                                                        @if($order->shalwar_qamees->pancha != '0')
                                                             </tr><tr>
                                                             <td> پانچھا</td>
                                                          <td> {{$order->shalwar_qamees->pancha}}</td>
                                                        @endif

                                                                    </tr>
                        
                        </table>
                        </div>
                                            
                    <div style="float:left" class="col-md-4 col-sm-4">

                        <table>
                          <tr >
                            <th style="text-align: center;" colspan="3"> Style </th>
                          </tr>
                          <tr>
                          <th>Name</th>
                          <th>Icon</th>
                          <th>Size</th>
                           </tr>
                         @if($order->shalwar_qamees_designs->bin_ch!= '')

                          <tr>
                            <td>چوڑائ بین</td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                            <td>
                         {{$order->shalwar_qamees_designs->bin_ch}}
                                    </td>
                             
                               </tr>
                         @endif

                          @if($order->shalwar_qamees_designs->binstyle!= '0')

                               <tr>
                                   <td>     بین سٹایل </td>

                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                            
                            <td>  
                                 {{$order->shalwar_qamees_designs->binstyle}}
                                                           
                                                            </td>
                                                          </tr>
                                                           @endif

                                    <tr>
                                 @if($order->shalwar_qamees_designs->koler!= '0')
                                     <td>کالر</td>

                            <td><img width="100px" height="30px" src="{{asset('images/ban.png')}}"></td>
                             <td> 
                              {{$order->shalwar_qamees_designs->koler}}
                                  </td>
                                  @endif
                                </tr>
                                <tr>
                            

                             @if($order->shalwar_qamees_designs->kaafsize!= '0')
                                <td>Kaaf Chorai</td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                                <td>
                              {{$order->shalwar_qamees_designs->kaafsize}} </td>
                                                            @endif
                                                            
                                                            
                                @if($order->shalwar_qamees_designs->kaaflambai!= '0')                                
                             <td>کاف کی لمبائی</td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                                                        <td>
                                                             {{$order->shalwar_qamees_designs->kaaflambai}}</td>
                                                            @endif
                                                                                   
                                                        </tr>
                                                        <tr>
                              @if($order->shalwar_qamees_designs->kaaf!= '0')                                
                             <td>کاف type</td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                                                        <td>
                                                             {{$order->shalwar_qamees_designs->kaaf}}</td>
                                                            @endif
                                                            
                              @if($order->shalwar_qamees_designs->kaaf!= '0')                                
                             <td>Other کاف</td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                                                        <td>
                                                             {{$order->shalwar_qamees_designs->kaafother}}</td>
                                                            @endif                                
                                
                                                                                 </tr>
                               <tr>
                              @if($order->shalwar_qamees_designs->asteensize!= '0')                                
                             <td>Asteen Size </td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                                                        <td>
                                                             {{$order->shalwar_qamees_designs->asteensize}}</td>
                                                            @endif
                                                            
                              @if($order->shalwar_qamees_designs->asteenother!= '0')                                
                             <td>Asteen Other</td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/halft-ban.png')}}"></td>
                                                        <td>
                                                             {{$order->shalwar_qamees_designs->asteenother}}</td>
                                                            @endif                                
                                
                                                                                 </tr>
                              <tr>  
                                                                                     
                                                                                 </tr>
                                                                                 
                                                  
                          
                          <tr>
                              @if($order->shalwar_qamees_designs->patisize!= '0')
                               <td>پٹی سائز </ Size</td>
                            <td><img width="100px" height="30px" src="{{asset('images/sada-patti.png')}}"></td>
                               <td>
                                {{$order->shalwar_qamees_designs->patisize}}</td>
                                                            @endif
                                                            </tr>
                                                            
                                                            
                                                            
                                                  <tr>       
                          @if($order->shalwar_qamees_designs->pati!= '0')                                  
                                        <td>پٹی</td>
                            <td><img width="100px" height="30px"  src="{{asset('images/sada-patti.png')}}"></td>
     <td>
   {{$order->shalwar_qamees_designs->pati}}</td>
                                                            @endif
                                                            </tr>
                                                            <tr>
@if($order->shalwar_qamees_designs->frontpocketsize!= '0')
                            <td> sizeفرنٹپاکٹ</td>
                            <td><img width="100px" height="30px"  src="{{asset('images/frontpock.png')}}"></td>
<td>
    
            {{$order->shalwar_qamees_designs->frontpocketsize}}</td> 
                                                            @endif

                         
@if($order->shalwar_qamees_designs->pocketfront!= 'no')
                            <td>فرنٹپاکٹ</td>
                            <td><img width="100px" height="30px" src="{{asset('images/frontpock.png')}}"></td>
                                                        <td>
                                                  {{$order->shalwar_qamees_designs->pocketfront}}</td>
                                                            @endif
                                                        </tr>
                                                        
                            <tr>
                                @if($order->shalwar_qamees_designs->pocketside!= '0')
                                <td>  سایڈ پاکٹ    </td>
                            <td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/back-plate.png')}}"></td>
                                                        <td>
                                                  {{$order->shalwar_qamees_designs->pocketside}}</td>     
                                                            @endif                          
                       
@if($order->shalwar_qamees_designs->pocketshalwar!= 'no')
</tr><tr>
<td>Shalwar  پاکٹ </td>
<td><img width="100px" height="30px" src="{{asset('images/assetsss/iconsprint/shalwar-jeeb.png')}}"></td>
<td>   
 {{$order->shalwar_qamees_designs->pocketshalwar}}</td>
                                                            @endif
                                                        </tr>
                            <tr>
@if($order->shalwar_qamees_designs->silayi!= '0')
                                <td>سلایی</td>
                                                               <td>
                                                 
                                                    {{$order->shalwar_qamees_designs->silayi}}</td>
                                                            @endif
                                                            </tr><tr>
                                                            
@if($order->shalwar_qamees_designs->galla!= '0')
  <td> گلہ</td>
<td>     
 {{$order->shalwar_qamees_designs->galla}}</td>
 @endif
 
 @if($order->shalwar_qamees_designs->daman!= '0')
  </tr><tr>
  <td> دامن</td>                                                            
        <td>  
            {{$order->shalwar_qamees_designs->daman}}</td>
             @endif
                                                        </tr>

<tr>   
 @if($order->shalwar_qamees_designs->design!= '0')
 <td> ڈیزائن</td>
      <td>
    {{$order->shalwar_qamees_designs->design}}</td>
    @endif
    
    @if($order->shalwar_qamees_designs->button!= '0')
                                <td> ڈیزائن بٹن</td>
            <td>  
  {{$order->shalwar_qamees_designs->button}} </td>
                                    @endif

@if($order->shalwar_qamees_designs->other_measurements!= '0')                                    
                    <td>Other deatils</td>
                    <td>   
                 {{$order->shalwar_qamees_designs->other_measurements}}</td>
                                                            @endif
 

                          </tr>
                      </table>
                      <br>
                      <div  class="row text-center contact-info" style="font-style:bold">
         <div class="col-lg-4 col-md-4 col-sm-4" >
      
                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-info waves-effect waves-light"><i class="fa fa-print"></i> Print</a>
                                            </div>
                                        </div>
                    </div>
                    
  </div>
  


               </div>
             <!-- <hr />
             <div class="ttl-amts">
               <h4>  Total Amount : 900 USD </h4>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h5>  Tax : 90 USD ( by 10 % on bill ) </h5>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h4> <strong>Bill Amount : 990 USD</strong> </h4>
             </div> -->
         
     </div>

   
 </div>




@endsection