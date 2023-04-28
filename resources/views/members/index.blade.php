@extends('layout')

@section('content')


  <!-- About Section-->
  <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Member by Schools</span></h2>
                                <form method="GET" action="#">
                                    @csrf
                                    <label for="school">Select a school:</label>
                                    <select name="school" id="school">
                                        <option value="">All Schools</option>
                                        @foreach ($schools as $school)
                                            <option value="{{ $school }}" {{ request()->input('school') == $school ? 'selected' : '' }}>{{ $school }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit">Filter</button>
                                </form>
                                
                                <h3><?php //echo $title ?></h3>
                                @foreach($members as $member)
                                    <div class="row marketing">
                                        <div class="col-md-10">
                                            <h4>{{$member->name}}</h4>
                                            <p>{{$member->email}}</p>
                                            <p>{{$member->school}}</p>                           
                                            
                                        </div>

                                        <div class="col-md-2">
                                            <a class="btn btn-primary" href="/members/{{$member['id']}}">View</a>
                                        </div>
                                    </div>
                                @endforeach
                        
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
 @endsection
 