@extends('app');

@section('content')

    <div class="container">
    <div class="row">
        <h1>Create new Contact</h1>
    </div>
    <div class="row">
        <form action="/submit" method="post">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Please fix the following errors
            </div>
            @endif
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Mobile</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="mobile" name="mobile" placeholder="Mobile" value="{{ old('mobile') }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Group</label>
  <select  type="email" class="form-control @error('Group') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

    @include('errors.list')
@stop