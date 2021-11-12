
@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="new-product-content-box">
            
            <form action="/newproduct/insertion"  method="POST">
                @csrf

                <div class="d-flex justify-content-center">
                    <h2>Add new product</h2>  
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

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus>
    
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
    
                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" autocomplete="price" autofocus>
    
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="inputbox">
                    <select name="category" class="categorybox">
                        <option value="1" selected>Electronics</option>
                        <option value="2" >Accessories</option>
                        <option value="3" >Games</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
    
                    <div class="col-md-6">
                        <select class="form-control" name="category" id="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
    
                        @error('genre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
    
                    <div class="col-md-6">
                        <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image" autocomplete="image" autofocus>
    
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="submit-reset">
                    <div>
                        <input class="submitBtn" type="submit" value="Add">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection