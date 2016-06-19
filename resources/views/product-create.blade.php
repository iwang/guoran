@extends('layouts.app')

@section('content')

<div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('product') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="product" class="col-sm-3 control-label">Product</label>

                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="product" class="col-sm-3 control-label">Description</label>

                <div class="col-sm-6">
                    <input type="text" name="description"  class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="product" class="col-sm-3 control-label">Price</label>

                <div class="col-sm-6">
                    <input type="text" name="price"  class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="product" class="col-sm-3 control-label">Discount</label>

                <div class="col-sm-6">
                    <input type="text" name="discount" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add product
                    </button>
                </div>
            </div>
        </form>
    </div>

    @endsection