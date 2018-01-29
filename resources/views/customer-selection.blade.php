@extends('layouts.app')

    @section('content')
    
    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Register your account </h6>
             
             <div class="form-layout form-layout-6">
               <div class="row no-gutters">
                 <div class="col-5 col-sm-4">
                   Full Name:
                 </div><!-- col-4 -->
                 <div class="col-7 col-sm-8">
                     <input class="form-control" type="text" name="fullname" placeholder="Enter your fullname" required>
                 </div><!-- col-8 -->-
               </div><!-- row -->
               
               <div class="row no-gutters">
                 <div class="col-5 col-sm-4">
                   Email Address:
                 </div><!-- col-4 -->
                 <div class="col-7 col-sm-8">
                     <input class="form-control" type="text" name="email" placeholder="Enter your email address" required>
                 </div><!-- col-8 -->
               </div><!-- row -->
             </div><!-- form-layout -->

            <div class="row no-gutters">
                 <div class="col-5 col-sm-4">
                   Contact Number:
                 </div><!-- col-4 -->
                 <div class="col-7 col-sm-8">
                     <input class="form-control" type="number" name="contact" placeholder="Enter your contact number" required>
                 </div><!-- col-8 -->
               </div><!-- row -->
             </div><!-- form-layout -->
             
             <div class="row no-gutters">
                 <div class="col-5 col-sm-4">
                   Username:
                 </div><!-- col-4 -->
                 <div class="col-7 col-sm-8">
                     <input class="form-control" type="text" name="username" placeholder="Enter your desired username" required>
                 </div><!-- col-8 -->
               </div><!-- row -->
             </div><!-- form-layout -->
             
             <div class="row no-gutters">
                 <div class="col-5 col-sm-4">
                   Password:
                 </div><!-- col-4 -->
                 <div class="col-7 col-sm-8">
                     <input class="form-control" type="text" name="email" placeholder="Enter your desired password" required>
                 </div><!-- col-8 -->
               </div><!-- row -->
             </div><!-- form-layout -->
    @endsection
