@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            Insert Data
        </div>
        <div class="card-body">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('form.save') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Name : </label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="price">Detail : </label>
                    <input type="text" class="form-control" name="detail"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Price : </label>
                    <input type="text" class="form-control" name="price"/>
                </div>
                <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
        </div>
    </div>
@endsection