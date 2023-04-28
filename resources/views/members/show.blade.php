@extends('layout')

@section('content')

 <!-- Member Card 2-->
 <div class="card shadow border-0 rounded-4 mb-5">
    <div class="card-body p-5">
      <div class="row align-items-center gx-5">
        <div class="col text-center text-lg-start mb-4 mb-lg-0">
         <div class="bg-light p-4 rounded-4">
         <div class="text-primary fw-bolder mb-2">Member Name: {{$member->name}}</div>
         <div class="small fw-bolder">Email: {{$member->email}}</div> 
         <div class="small fw-bolder">Created: {{$member->created_at}}</div>       
        </div>
      </div>
      <div class="small fw-bolder">Attending Schools: {{$member->school}}</div>
   </div>
  </div>
 </div> 
 <a href="/members/index">Go Back</a>      

 @endsection