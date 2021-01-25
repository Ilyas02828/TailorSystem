@extends('layouts.app')@section('title')    Print Salary@endsection@section('content')                        <div class="row">                            <div class="col-xs-12">                                <div class="page-title-box">                                    <h3 class="page-title">Invoice <small> Print Order Invoice.</small></h3>                                     <ol class="breadcrumb p-0 m-0">                                        <li>                                            <a href="#">Salary</a>                                        </li>                                        <li class="active">                                            Invoice                                        </li>                                    </ol>                                    <div class="clearfix"></div>                                </div>                            </div>                        </div>                        <!-- end row -->                        <div class="row">                            <div class="col-md-12">                                <div class="panel panel-default">                                    <!-- <div class="panel-heading">                                        <h4>Invoice</h4>                                    </div> -->                                    <div class="panel-body">                                        <div class="clearfix">                                            <div class="pull-left">                                                <h3><img src="{{ asset('images/lily-logo-min.png')}}" alt="" height="80"> {{{ Auth::user()->name}}} TMS</h3>                                            </div>                                            <div class="pull-right m-t-30 text-right">                                                <h4 class="m-b-0">AUTHOR COPY</h4>                                                <p>Payment ID: W-1</p>                                            </div>                                        </div>                                        <div class="row">                                            <div class="col-md-12">                                                    <div class="table-responsive">                                                    <table class="table m-t-30 table-colored table-info">                                                        <thead>                                                            <tr>                                                                <th>Customer Info</th>                                                                <th>Salary Month</th>                                                                <th>Payment Date</th>                                                                <th class="text-right">Paid Amount</th>                                                            </tr>                                                        </thead>                                                        <tbody>                                                            <tr>                                                                <td width="50%">                                                                    <strong>{{ $salary->staff->staff_name }}</strong>                                                                    <address>                                                                        {{ $salary->staff->staff_address }}<br>                                                                        <abbr title="Phone">P:</abbr> {{ $salary->staff->staff_phone }}                                                                    </address>                                                                   </td>                                                                  <td>                                                                    {{ $salary->salary_month }}                                                                </td>                                                                <td>                                                                    {{ $salary->salary_date }}                                                                </td>                                                                   <td class="text-right">                                                                    <strong>$ {{ $salary->salary_paid }}</strong>                                                                </td>                                                                                                                    </tr>                                                                                         </tbody>                                                    </table>                                                </div>                                            </div><!-- end col -->                                        </div>                                        <!-- end row -->                                        <div class="row">                                            <div class="col-md-12">                                                <div class="pull-left">                                                __________________<br>                                                Author Sign                                                </div>                                                <div class="pull-right text-right">                                                __________________<br>                                                Staff Sign                                                </div>                                            </div><!-- end col -->                                        </div>                                        <hr class="m-t-30">                                        <div class="clearfix">                                            <div class="pull-left">                                                <h3><img src="{{ asset('images/lily-logo-min.png')}}" alt="" height="80"> {{{ Auth::user()->name}}} TMS</h3>                                            </div>                                            <div class="pull-right m-t-30 text-right">                                                <h4 class="m-b-0">STAFF COPY</h4>                                                <p>Payment ID: W-1</p>                                            </div>                                        </div>                                        <div class="row">                                            <div class="col-md-12">                                                    <div class="table-responsive">                                                    <table class="table m-t-30 table-colored table-info">                                                        <thead>                                                            <tr>                                                                <th>Customer Info</th>                                                                <th>Salary Month</th>                                                                <th>Payment Date</th>                                                                <th class="text-right">Paid Amount</th>                                                            </tr>                                                        </thead>                                                        <tbody>                                                            <tr>                                                                <td width="50%">                                                                    <strong>{{ $salary->staff->staff_name }}</strong>                                                                    <address>                                                                        {{ $salary->staff->staff_address }}<br>                                                                        <abbr title="Phone">P:</abbr> {{ $salary->staff->staff_phone }}                                                                    </address>                                                                   </td>                                                                  <td>                                                                    {{ $salary->salary_month }}                                                                </td>                                                                <td>                                                                    {{ $salary->salary_date }}                                                                </td>                                                                   <td class="text-right">                                                                    <strong>$ {{ $salary->salary_paid }}</strong>                                                                </td>                                                                                                                    </tr>                                                                                         </tbody>                                                    </table>                                                </div>                                            </div><!-- end col -->                                        </div>                                        <!-- end row -->                                        <div class="row">                                            <div class="col-md-12">                                                <div class="pull-left">                                                __________________<br>                                                Author Sign                                                </div>                                                <div class="pull-right text-right">                                                __________________<br>                                                Staff Sign                                                </div>                                            </div><!-- end col -->                                        </div>                                        <div class="hidden-print m-t-30">                                            <div class="pull-right">                                                <a href="javascript:window.print()" class="btn btn-info waves-effect waves-light"><i class="fa fa-print"></i> Print</a>                                            </div>                                        </div>                                    </div>                                </div>                            </div>                        </div>                        <!-- end row -->@endsection