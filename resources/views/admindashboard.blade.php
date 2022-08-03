@include('layouts.app')
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link href="{{asset('asset\fontawesome\css\fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset\fontawesome\css\solid.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset\fontawesome\css\brands.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset\flagiconcss\css\flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset\datatables\datatables.min.css')}}" rel="stylesheet">
  
</head>

<body>
    
    <div class="wrapper">
     
        <div id="body" class="active">
         
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Admin</div>
                            <h2 class="page-title">Dashboard</h2>
                              
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Users</p>
                                                <span class="number">{{$count1}} Customers</span>
                                                <br>
                                                <span class="number">{{$count}} Expertise</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Books</p>
                                                <span class="number">{{$count2}} Books</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-eye"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Multimedia</p>
                                                <span class="number">{{$count3}} Multimedia</span>
                            
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Contact Us messages</p>
                                                <span class="number">{{$contactus}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
<hr>
<div class="row">
<div class="col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">Expertise table    </div>
        <div class="card-body">
            <p class="card-title"></p>
            <table class="table table-hover" id="dataTables-example" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Date Registered</th>
                        <th>Approve</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                   
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>Expertise</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->approve}}</td>

                        {!! Form::open(['action'=>['App\Http\Controllers\AdminpostController@update',$user->id],'method'=>'POST']) !!}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::hidden('name', $user->name) }}
                        {{ Form::hidden('password', $user->password) }}
                        {{ Form::hidden('email', $user->email) }}
                        {{ Form::hidden('role', $user->role) }}
                        {{ Form::hidden('proffesion', $user->proffesion)}}
                        {{ Form::hidden('phone_number', $user->phone_number) }}
                        {{ Form::hidden('status', $user->status) }}
                        {{ Form::hidden('gender', $user->gender) }}
                        {{ Form::hidden('address', $user->address) }}
                        {{ Form::hidden('educational_status', $user->educational_status) }}
                       
                        <div class="d-flex pt-1">
                            <td>
                          {{Form::submit('Approve',['class'=>'btn btn-warning flex-grow-1'])}}
                            </td>
                        </div>
                          {!! Form::close() !!}

                        {!! Form::open(['action'=>['App\Http\Controllers\AdminpostController@destroy',$user->id],'method'=>'POST']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <div class="d-flex pt-1">
                        <td>
                          
                      {{Form::submit('Delete',['class'=>'btn btn-danger flex-grow-1'])}}
                        </td>
                    </div>
                      {!! Form::close() !!}
                        
                    
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Customers table    </div>
                <div class="card-body">
                    <p class="card-title"></p>
                    <table class="table table-hover" id="dataTables-example" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Date Registered</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users3 as $user3)
                           
                            <tr>
                                <td>{{$user3->id}}</td>
                                <td>{{$user3->name}}</td>
                                <td>{{$user3->email}}</td>
                                <td>Customers</td>
                                <td>{{$user3->created_at}}</td>
                                {!! Form::open(['action'=>['App\Http\Controllers\AdminpostController@destroy',$user3->id],'method'=>'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <div class="d-flex pt-1">
                                <td>
                              {{Form::submit('Delete',['class'=>'btn btn-danger flex-grow-1'])}}
                                </td>
                            </div>
                              {!! Form::close() !!}
                                
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    <div class="card">
        <div class="card-header">Contact us table    </div>
        <div class="card-body">
            <p class="card-title"></p>
            <table class="table table-hover" id="dataTables-example" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $contact)
                   
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<hr>
                 


                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="{{asset('asset\initiate-datatables.js')}}"></script>
    <script src="{{asset('asset\datatables\datatables.min.js')}}"></script>
    <script src="{{asset('asset\jquery.min.js')}}"></script>
</body>

</html>

<style>
    /*------------------------------------------------------------------
* Bootstrap Simple Admin Template
* Version: 3.0
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-------------------------------------------------------------------*/

@import "../components/navbar/navbar-dropdowns.css";
@import "../components/sidebar/sidebar-default.css";

/*------------------------------------------------------------------
# [Color codes]

# teal: #00b5ad
# olive: #b5cc18
# violet: #6435c9
# orange: #f2711c
# darkgray: darkgray
# blue: #2185d0
# grey: #767676
# */

/*------------------------------------------------------------------
[Typography]

Body:           1em / "Lato", "Helvetica Neue", Arial, Helvetica, sans-serif;
Headers:        2em / "Lato", "Helvetica Neue", Arial, Helvetica, sans-serif;
parapgraph:     1em / "Lato", "Helvetica Neue", Arial, Helvetica, sans-serif;

Notes:  decreasing heading by 0.4em with every subsequent heading level
-------------------------------------------------------------------*/

/*------------------------------------------------------------------
[Table of contents]

1. Body / #body
2. Header / #header
3. Navigation / #navbar
4. Content / #content
5. Sidebar / #sidebar
6. Boxes / .box
7. Dashboard cards / .card
8. Miscellaneous
9. Adjustments to dafault behaviors
10. Colors / .teal, .olive, .violet, .orange, .darkgray, .blue, .grey
11. Responsive properties
-------------------------------------------------------------------*/

/*------------------------------------------------------------------
[1. Body / #body]
*/
@font-face {
    font-family: "Lato";
    font-style: normal;
    font-weight: 400;
    font-display: auto;
    src: url("../font/Lato-Regular.eot");
    src: url("../font/Lato-Regular.eot?#iefix") format("embedded-opentype"), url("../font/Lato-Regular.woff") format("woff"), url("../font/Lato-Regular.ttf") format("truetype");
}

body,
h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6,
p,
a,
td {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

body {
    width: 100%;
    height: 100%;
    background: #f4f6fa;
    font-family: "Lato", "Helvetica Neue", Arial, Helvetica, sans-serif;
    font-size: 1rem;
    color: #444;
}

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    overflow-x: hidden
}

#body {
    width: 100%;
    padding: 0;
    min-height: 100vh;
    transition: all 0.3s;
}

/*------------------------------------------------------------------
[2. Header / #header]
*/
#body>.navbar {
    padding: 0 1.5rem;
    min-height: 54px;
    box-shadow: none;
    border-bottom: 1px solid rgba(101, 109, 119, .16);
}

/*------------------------------------------------------------------
[3. Navigation / #navbar] - see /components/navbar/navbar-dropdown.css
*/
.default-light-menu {
    border: none !important;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.5) inset !important;
    color: #fff;
}

.default-light-menu:hover {
    background: #2196F3 !important;
    color: #fff;
}

/*------------------------------------------------------------------
[4. Content / #content]
*/
#body>.content {
    position: relative;
    padding: .5rem;
}

#body .content .page-title h3 {
    margin: 1rem 0;
}

.page-header {
    margin-top: 1.25rem;
}

.page-pretitle {
    font-size: .8rem;
    text-transform: uppercase;
    line-height: 1.6;
    color: #656d77;
}

.page-title {
    margin: 0;
    font-size: 1.5rem;
    line-height: 1.5555556;
}

.detail-subtitle {
    font-size: .8rem;
    text-transform: uppercase;
    line-height: 1.6;
}

/*------------------------------------------------------------------
[5. Sidebar / #sidebar] - see /components/sidebar/sidebar-default.css
*/

/*------------------------------------------------------------------
[6. Boxes / .box] 
*/
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}

.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px 20px;
    background-color: #FAFAFA;
    text-align: right;
}

.box-primary {
    border-top-color: #22a1f9;
}

/*------------------------------------------------------------------
[7. Dashboard Cards / .card] 
*/
.card {
    margin-bottom: 15px;
    box-shadow: rgba(35, 46, 60, .04) 0 2px 4px 0;
}

.card .content {
    padding: 15px 15px 10px 15px;
}

.card .content .icon-big {
    font-size: 3em;
    min-height: 64px;
    line-height: 64px;
}

.card .content .number {
    font-size: 1.5em;
    text-align: right;
    font-weight: bolder;
}

.card .content .footer {
    background-attachment: fixed;
    position: relative;
    padding: 0;
    line-height: 30px;
}

.card .content .stats {
    display: inline-block;
    color: #a9a9a9;
}

/*------------------------------------------------------------------
[8. Miscellaneous ] 
*/
.line {
    border-bottom: 1px solid #E0E0E0;
}

.nav-pills {
    padding: 15px;
    background-color: #E0E0E0;
    -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.05);
}

.btn-rounded {
    border-radius: 10em;
    padding: 6px 8px;
    font-size: small;
    text-transform: none;
    text-shadow: none !important;
    background: #eaeaea;
    border-color: transparent;
    border: none;
}

.btn-rounded:hover {
    border-color: transparent;
    border: none;
}

#myTab {
    margin-bottom: 15px;
}

.no-margin {
    margin: 0;
}

.dfd {
    width: 100%;
}

.bg-lighter-grey {
    background: #FAFAFA;
}

/*------------------------------------------------------------------
[9. Adjustments to default behaviors] 
*/
a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.btn.focus,
.btn:focus {
    box-shadow: none;
}

.btn.btn-square {
    border-radius: 0;
}

.table td,
.table th {
    vertical-align: middle;
}

table.dataTable thead .sorting:before,
table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before,
table.dataTable thead .sorting_desc_disabled:after {
    font-size: .8rem;
    bottom: .9rem;
}

.dataTables_info {
    visibility: hidden;
}

table.dataTable>tbody>tr.child ul.dtr-details {
    display: block;
}

.nav-tabs {
    border-bottom: 2px solid #dee2e6;
}

.nav-tabs .nav-item {
    margin-bottom: -2px;
}

.nav-tabs .nav-link {
    border: none;
    -webkit-transition: color .1s ease;
    transition: color .1s ease;
    color: inherit;
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
    color: #007bff;
    background-color: #fff;
    border-bottom: 2px solid #22a1f9;

}

.tab-content {
    padding: 15px;
}

.svg-inline--fa {
    min-width: 15px;
}

.display-absolute {
    position: absolute;
}

.large-icon {
    font-size: 3em;
}

.license span {
    margin-bottom: 1em;
}

/*------------------------------------------------------------------
[10. Colors / .teal, .olive, .violet, .orange, .darkgray, .blue, .grey] 
*/
.teal {
    color: #00b5ad !important;
}

.olive {
    color: #b5cc18 !important;
}

.violet {
    color: #6435c9 !important;
}

.orange {
    color: #f2711c !important;
}

.darkgray {
    color: darkgray !important;
}

.blue {
    color: #2185d0 !important;
}

.grey {
    color: #767676 !important;
}

/*------------------------------------------------------------------
[11. Responsive properties] 
*/
@media (max-width: 768px) {
    .display-absolute {
        position: relative;
    }
}

@media (max-width: 680px) {
    #body.active .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .nav-dropdown .nav-link-menu {
        position: fixed !important;
        top: 52px !important;
        width: 100% !important;
        margin-top: 0;
    }

    .nav-dropdown .nav-link {
        padding: 10px;
    }

    .nav-dropdown .nav-link-menu::before {
        right: 50%;
    }

    #body .navbar-collapse {
        display: none !important;
    }

    #body .nav-dropdown .nav-item span {
        display: none !important;
    }

    .btn-header {
        display: none;
    }
}

@media (min-width: 200px) {
    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }
}
    </style>
