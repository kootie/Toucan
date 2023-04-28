@extends('layout')

@section('content')


  <!-- About Section-->
  <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Select an Action</span></h2>
                                
                                

                                    <div class="row marketing">
                                        <div class="col-md-10">
                                            <a class="btn btn-primary" href="/members/index">Member List</a>
                                            <a class="btn btn-primary" href="/members/create">Add Member</a>

                                        </div>

                                    </div>


                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
 @endsection