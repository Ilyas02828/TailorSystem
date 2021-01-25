@extends('layouts.app')

@section('title')
    Orders
@endsection

@section('content')

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Order <small> All Orders Data.</small></h3>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Order
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
                                            Order <small>Records</small>
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
                                                            <th>Address</th>
                                                            <th>Assign to</th>
                                                            <th>Amount</th>
                                                            <th>Due</th>
                                                            <th>Delivery Date</th>
                                                            <th>Order Status</th>                                     
                                                            <th class="text-center" width="200px">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                

                                                    @foreach($orders as $order)  
                                                    @if($order->ilyas==1)
                                                        <tr>
                                                            <td>{{$order->id}}</td>
                                                            <td data-toggle="popover" title="" data-content="{{$order->order_details}}" data-placement="top" data-original-title="Details">{{$order->customer->customer_name}}</td>
                                                            <td>{{$order->customer->customer_phone}}</td>
                                                            <td>{{$order->customer->customer_address}}</td>
                                                            <td>{{$order->staff->staff_name}}</td>
                                                            <td>{{$order->order_amount}}</td>
                                                            <td>{{$order->order_amount - $order->order_paid}}</td>
                                                            <td>{{$order->delivery_date}}</td>
                                                            @if($order->order_status == 'Confirm')
                                                                <td class="text-center"><span class="label label-default"> {{$order->order_status}}</span></td>
                                                            @elseif($order->order_status == 'Processing')
                                                                <td class="text-center"><span class="label label-warning"> {{$order->order_status}}</span></td>
                                                            @elseif($order->order_status == 'Ready')
                                                                <td class="text-center"><span class="label label-success"> {{$order->order_status}}</span></td>
                                                            @elseif($order->order_status == 'Delivered')
                                                                <td class="text-center"><span class="label label-primary"> {{$order->order_status}}</span></td>    
                                                            @endif
                                                            <td class="text-center">
                                                                <a href="{{ route('measurements.edit', $order->id) }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
                                                                <a href="{{ route('orders.show',$order->id) }}" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>

                                                                <a href="{{ route('customerprint.show',$order->id) }}" class="btn btn-sm btn-default"><i class="fa fa-print"></i></a>

                                                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                                  <a href="{{ route('style.edit', $order->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                                {{ Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete', 'style'=>'display:inline-block']) }}
                                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')" ><i class="fa fa-trash-o"></i></button>
                                                                {{ Form::close() }}
                                                            </td>
                                                        </tr>                                   
                                                        @endif
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