@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    @section('content')
    <center><font size="8">Contact Us</font></center>
    <br>
    <div class="container">
        <hr>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
            <font color="black" size="5">You can Email us at:</font>
            <br>
            <br>
            <font color="pink" size="4"><b>customerservice@babywisp.com</b></font>
            <br>
            <br>
            <font color="black" size="5">Or call us at:</font>
            <br>
            <br>
            <font color="black" size="5"><b>(858) 947-3127</b></font>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
                <font color="black" size="4">We are in the office Monday to Thursday 10AM-5PM PST and Friday 10AM-3PM PST.  We try to respond to all inquiries as soon as possible!</font>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
                <br>
                <br>
                <center><font color="black" size="6">Feedback</font></center>
                <br>
                <table class="table table-borderless">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Phone no:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td><textarea cols="5" rows="10" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-outline-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
        </div>
        <br>
        <hr>
        <br>
    </div>
    @endsection
</body>
</html>