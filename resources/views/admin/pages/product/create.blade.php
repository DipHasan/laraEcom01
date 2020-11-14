@extends('admin.layouts.master')

@section ('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="card-body">
                <form action="{{ route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('admin.partials.messages')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" id="" cols="8"0 rows="8" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="numbeer" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="numbeer" class="form-control" name="quantity" id="exampleInputEmail1">
                    </div>

                        <div class="form-group">
                        <label for="product_image">Product Image</label>

                        <div class="row">
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image">
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image">
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image">
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image">
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control" name="product_image[]" id="product_image">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection
