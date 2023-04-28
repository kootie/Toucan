@extends('layout')

@section('content')




<!-- Member Card 2-->
<div class="card shadow border-0 rounded-4 mb-5">
    <div class="card-body p-5">
      <div class="row align-items-center gx-5">
        <div class="col text-center text-lg-start mb-4 mb-lg-0">
         <div class="bg-light p-4 rounded-4">
         <div class="text-primary fw-bolder mb-2"><h1>Add Member</h1></div>
         <div class="small fw-bolder">
            <form method="POST" action="/members">
                @csrf
                <div class="mb-6">
                    <label for="name">Name:</label>
                    <input  class="border border-gray-200 rounded p-2 w-full" type="text" name="name" id="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email">Email Address:</label>
                    <input  class="border border-gray-200 rounded p-2 w-full" type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label><strong>School :</strong></label><br/>
                    <select class="form-control" name="school[]" multiple="">
                        <option value="" disabled selected>Select a school</option>
                        @foreach ($schools as $school)
                            <option value="{{ $school }}" {{ old('school') == $school ? 'selected' : '' }}>{{ $school }}</option>
                        @endforeach
                    </select>
                    @error('school')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <button class="bg-laravel text-black rounded py-2 px-4 hover:bg-black" type="submit">Add Member</button>
            
            </form> 
        </div>

        </div>
      </div>
   </div>
  </div>
 </div> 
 <a href="/members/index">Go Back</a>      

@endsection