@extends('layouts.app')

@section('title')
    Customers 
@endsection

@section('content')

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Customer <small> All Customers Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Customer
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <!--<div class="row bg-title" style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                            <div class="col-lg-12">
                                <h4 class="page-title">Minimal Dashboard</h4>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Minimal Dashboard</li>
                                </ol>
                            </div>
                        </div>-->


                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portlet">
                                    <div class="portlet-heading portlet-default">
                                        <h3 class="portlet-title text-dark">
                                            Customer <small>Records</small>
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
                                      
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Phone</th>
                                                            <th>Register_No</th>
                                                            <th>Sex</th>
                                                            <th>Address</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                

                                                    @foreach($customers as $customer)  

                                                        <tr>
                                                            <td>{{$customer->id}}</td>
                                                            <td>{{$customer->customer_name}}</td>
                                                            <td>{{$customer->customer_phone}}</td>
                                                            <td>{{$customer->customer_reg}}</td>
                                                            <td>{{$customer->customer_sex}}</td>
                                                            <td>{{$customer->customer_address}}</td>
                                                            <td class="text-center">
                                                            	<a href="{{ route('customers.show', $customer->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                                            	<a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>                                   

                                                    @endforeach

                                                    </tbody>
                                                </table> 
                                            </div>
                                        </div>    
                                    </div>
                                </div>    
                            </div>
                        </div>   

@endsection