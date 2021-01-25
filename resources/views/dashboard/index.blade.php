
@extends('layouts.app')

@section('title')
    Dashboard 
@endsection

@section('content')

                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

                        <div class="row">
                            <div class="col-xs-12">
                                <div style="background: url('{{ asset('images/bg3.jpg') }}'); margin: 0px -20px; background-position: bottom;">
                                    <div style="background-color: rgba(62, 74, 89, 0.69);">
                                        <div class="page-title-box" style="margin: 0; margin-bottom: 20px; background-color: transparent;">
                                            <div class="col-lg-12 m-t-40">
                                                <h2 class="text-white m-b-0">Dashboard</h2>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xs-12">
                                                <p class="text-muted" style="font-size: 20px; font-weight: 800 ">Welcome *{{{ Auth::user()->name}}}*</p>
                                            </div>
                                            <div class="clearfix"></div>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi mdi-briefcase-check widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="ORDER READY">ORDER READY</p>
                                        <h2 class="text-white"><span data-plugin="counterup">{{$order_ready}}</span></h2>
                                        <p class="m-0"><b>Total</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-warning">
                                    <i class="mdi mdi-briefcase-download widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">ORDER CONFIRM</p>
                                        <h2 class="text-white"><span data-plugin="counterup">{{$order_confirm}}</span></h2>
                                        <p class="m-0"><b>Total</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class="mdi mdi-square-inc-cash widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">ORDER DUE</p>
                                        <h2 class="text-white"><span data-plugin="counterup">{{$order_due}}</span></h2>
                                        <p class="m-0"><b>Total</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="mdi mdi-account-convert widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">STAFF</p>
                                        <h2 class="text-white"><span data-plugin="counterup">{{$staffs}}</span></h2>
                                        <p class="m-0"><b>Total</b></p>
                                    </div>
                                </div>
                            </div>                            
                        </div>


                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 ">ORDER CHART</h4>
                                    <canvas id="myChart" width="50%"></canvas>
                                    <script>
                                        new Chart(document.getElementById("myChart"), {
                                            type: 'pie',
                                            data: {
                                                labels: ["Confirm", " Processing", "Ready", "Delivered"],
                                                datasets: [{
                                                    label: "Population (millions)",
                                                    backgroundColor: ["#70b9eb", "#f3b760","#46c37b","#f5707a"],
                                                    data: [{{ $order_confirm }}, {{ $order_processing }}, {{ $order_ready }}, {{ $order_delivered }}]
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: false,
                                                    text: 'Order Chart'
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-box widget-box-one">
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Amount</p>
                                                <h2 class="text-warning"><span data-plugin="counterup">{{$order_month_total}}/- &nbsp;PKR</span></h2>
                                                <p class="text-muted m-0"><b>CURRENT MONTH</b></p>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-md-4">    
                                        <div class="card-box widget-box-one">
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Paid</p>
                                                <h2 class="text-success"><span data-plugin="counterup">{{$order_month_paid}}/- &nbsp;PKR</span></h2>
                                                <p class="text-muted m-0"><b>CURRENT MONTH</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">    
                                        <div class="card-box widget-box-one">
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Due</p>
                                                <h2 class="text-danger"><span data-plugin="counterup">{{$order_month_due}}/- &nbsp;PKR</span></h2>
                                                <p class="text-muted m-0"><b>CURRENT MONTH</b></p>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-4">
                                        <div class="card-box widget-box-one">
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Order</p>
                                                <h2 class="text-warning"><span data-plugin="counterup">{{$order_month}}</span></h2>
                                                <p class="text-muted m-0"><b>CURRENT MONTH</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">    
                                        <div class="card-box widget-box-one">
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Ready</p>
                                                <h2 class="text-success"><span data-plugin="counterup">{{$order_month_ready}}</span></h2>
                                                <p class="text-muted m-0"><b>CURRENT MONTH</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">    
                                        <div class="card-box widget-box-one">
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Delivered</p>
                                                <h2 class="text-danger"><span data-plugin="counterup">{{$order_month_delivery}}</span></h2>
                                                <p class="text-muted m-0"><b>CURRENT MONTH</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    

                                          <div class="col-md-12">
                                        <div class="card-box widget-box-one">
                                            <table width="100%" class="text-center">
                                                <tr>
                                                    <td style="width: 50%;">
                                                        <div class="push-30 push-30-t">
                                                            <i class="fa fa-users fa-3x text-primary-dark"></i>
                                                        </div>
                                                    </td>
                                                    <td style="width: 50%;">
                                                        <div class="h1 font-w700"><span class="h2 text-muted">+{{ $customers }}</span> </div>
                                                        <div class="h5 text-muted text-uppercase push-5-t"> Customers</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>

@endsection


<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>