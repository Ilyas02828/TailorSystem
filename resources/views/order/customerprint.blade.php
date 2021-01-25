
<!DOCTYPE html>
<html>
<head>

        <!-- DataTables -->
        <link href="{{ asset('css/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

        <link href="{{ asset('css/plugins/toast/jquery.toast.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- App css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
<meta charset="utf-8">
<style type="text/css">		
element.style {
}
@media (max-width: 767px)
.invoice-container {
    padding: 45px 45px 70px;
}
@media (max-width: 895px)
.invoice-container {
    margin: 15px;
}
@media (max-width: 307px)
 #header
 {
    float:left;
 }
.invoice-container {

    padding: 45px 45px 70px;
}
@media (max-width: 600px)

.invoice-container {

    margin: 15px;
}
@media print {
    
    #address
    {
        margin-left: 120px;
        text-align: center;
        width: 300px;
        
    }
}
.invoice-container {
    margin: 15px auto;
    padding: 20px;
    max-width: 900px;
    background-color: #fff;
    border: 1px solid #ccc;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    border-radius: 6px;
}
.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, button, input, select, textarea {
    font-family: "Open Sans",Verdana,Tahoma,serif;
    color: #333;
    font-family: "Open Sans",Verdana,Tahoma,serif;
    color: #333;
    font-size: 10px;
}
#img
{
    text-align: center;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 10px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
     font-family: "Open Sans",Verdana,Tahoma,serif;
    color: #333;
    font-size: 10px;
}
html {
    font-size: 08px;
    -webkit-tap-highlight-color: transparent;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}

:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}


	</style>
	<title></title>
</head>
<body style="background-color: #efefef;">
<div class="container-fluid invoice-container" >
    <div class="row" style="margin-left: 8%; margin-right: 8%; font-size: 12px; margin-top: 2px;">
        <div id="header" class="col-sm-7">
        <p><img id="image"  class="img-responsive" style="margin-left: 35%" width="180px" height="130px" img src="/images/lily-logo.png" alt="ISI-logo"></p>
        <h4 style="margin-left: 25%" >ISI SOFTWARE SOLUTIONS
        </h4>
        </div>
    <div  class="col-sm-5 text-center">
        <div class="payment-btn-container" align="center">
        <p>Customer Name:<b>{{ $order->customer->customer_name }}</b><br>
        Register No:<b>{{ $order->customer->customer_reg}}</b><br>
        Cloths Status:<b>{{ $order->cloths}}</b><br>
        No of Suites:<b>{{ $order->no_suite}}</b><br>

            <div class="small-text">
                
            Due Date: {{$order->delivery_date}}
            </div>
        *****************<br>

       
        <strong>Paid:</strong></td>
                                                        <td width="150px" class="text-right">{{ $order->order_paid }} &nbsp;&nbsp;&nbsp;AED<br>
        <strong> Due:</strong></td>
                                            <td width="150px" class="text-right">{{ $order->order_amount - $order->order_paid }}&nbsp;&nbsp;&nbsp;AED<br>
          
        <strong>Sub-total:</strong></td>
        <td width="150px" class="text-right">{{ $order->order_amount }}</td> &nbsp;&nbsp;&nbsp;AED <br>
    </p>

        <p>
        Contact No:<b>+92-333-0000000</b><br>
        Address:<b>Jinah Avanue, Blue Area <br> Islamabad</b>
    </p>
        
        </div>
         <div id="address">
            <strong>Prepared By:</strong>
            <address  class="small-text">
            ISI SOFTWARE SOLUTIONS<br>
            +92-333-9739504<br>
            print Date:   <?php echo date('Y-m-d');?><br>
               *****************<br>
            </address> 
            </div>
        </div>
    </div>

        <div class="pull-right btn-group btn-group-sm hidden-print">
        <a href="javascript:window.print()" class="btn btn-info"><i class="fa fa-print"></i> Print</a>

        </div>
   
</div>
</body>
</html>
