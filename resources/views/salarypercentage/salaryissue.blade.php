@extends('layouts.app')

@section('title')
    Add Salary
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add Salary <small> Add New Salary Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Salary
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
                                            SALARY FORM <small>Requierd</small>
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
						                            {!! Form::open(['route'=>'salarypercentage.store', 'class'=>'form-horizontal m-b-30']) !!}
						                     
						                                <div class="row">						                                
								                  


								                            <div class="col-md-6">
								                              <div class="form-group">
						                                    <label class="col-md-12">Name</label>
						                                    <div class="col-md-12" >
						                                     {!! Form::text('from_date',$user->staff_name, ['class'=>'form-control','required']) !!}
						                                    
						                                    </div>
						                                </div>

								                            </div>


    														<div class="col-md-6">
								                              <div class="form-group">
						                                    <label class="col-md-12">Staff Salary</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('to_date', $user->staff_percentage, ['class'=>'form-control','required']) !!}
						                                    </div>
						                                </div>

								                            </div>

								                            	<div class="col-md-6">
								                              <div class="form-group">
						                                    <label class="col-md-12">Date From selected</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('to_date', $from_date, ['class'=>'form-control','required']) !!}
						                                    </div>
						                                </div>

								                            </div>
								                            	<div class="col-md-6">
								                              <div class="form-group">
						                                    <label class="col-md-12">Date To selected</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('to_date', $to_date, ['class'=>'form-control','required']) !!}
						                                    </div>
						                                </div>

								                            </div>
<table class="table table-bordered" id="mytable" style="text-align: center;">
							
							<tr style="font-size:19px;">
							<th>S_No</th>
							<th>No_Suites</th>
							<th>Order Date</th>
							<th>total Amount</th>
							<th>STaff Salary</th>


							</tr>
								<?php $i=1;
								$balance=0;
							
								?>
                                 
							<tr>@foreach($order as $ilyas)
							<?php
							$create_date=(strtotime($ilyas->created_at)); ?>
							 <!-- echo $create_date; exit();   -->
							 <?php if($create_date >= $intfrom_date){ ?>
								<td><?php echo $i++; ?></td>
								<td>{{$ilyas->no_suite}}</td>
								<td>{{$ilyas->created_at}}</td>
								<td>{{$ilyas->order_amount}}</td>
								
							

							
								
						<?php 
					$balance=0;
                  	$percentage=0;
                  	
					$Percentage=$ilyas->order_amount * $ilyas->staff->staff_percentage/100;
					 
					$balance=array($Percentage);
					  
					 ?>
					<td class="percent">{{$Percentage}}</td>
					
					<?php }?>					


					</tr>
					@endforeach

								
			</table>
			 	<div class="col-md-6">
								                              <div class="form-group">
						                                    <label class="col-md-12">Total Amount SUm</label>
						                                    <div class="col-md-12"> <span id="total">
						                                      
						                                    </span></span>
						                                       
						                                    </div>
						                                </div>

								                            </div>
						


     													 	<div class="col-md-6">
								                              <div class="form-group">
						                                    <label class="col-md-12">Salary Amount</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('to_date', $to_date, ['class'=>'form-control','required']) !!}
						                                    </div>
						                                </div>

								                            </div>
								                             	<div class="col-md-6">
								                              <div class="form-group">
						                                    <label class="col-md-12">Paid Salary</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('paid_salary', '',['class'=>'form-control','required','placeholder'=>'Enter Staff Salary','required']) !!}
						                                    </div>
						                                </div>

								                            </div>
         
								                   
							                            </div>
							                            {!! Form::hidden('salary_date', Carbon\Carbon::today()->format('d-m-Y')) !!}  
									                    {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
									                {!! Form::close() !!}
									            </div>
								            </div>
								        </div>  
							        </div>        
					            </div>
					        </div>
					    </div>            
			            <!-- /row -->

         
@endsection
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script>-->


<!--$(document).ready(function(){-->

    
    
<!--$('#mytable tr ').each(function() {-->

<!--var total=0;-->
<!--        total = parseInt($(this).find(".percent").html());    -->
    

        

<!-- $(this).each(function() {-->
<!--    var sum=0;-->

<!--        sum += parseInt( $(this).find(".percent").html());    -->

<!--$("#total").text(sum);-->
        
<!--     console.log(sum);-->


<!--    }); -->

     

<!--});-->
<!--});-->




<!--	</script>-->























<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script>

// $(document).ready(function(){
// var name=$("#name").val();
// $("#staff").append("<h3>"+name+"</h3>");
// console.log(name);

// });

// if($("#from_date").val() !==''){

// var fm;
// $(this).val();

// console.log(frm);

// }

	// <!-- <td><input type="hidden" value="{{$ilyas->staff->staff_name}}" id="name">
								// </td> -->
	</script>