
@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="new-product-content-box">
            
            <form action="/newcategory/insertion"  method="POST" enctype="multipart/form-data">
                @csrf

                <div class="d-flex justify-content-center">
                    <h2>Add New Category</h2>  
                </div> 
                <br>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus>
    
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Insert') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection