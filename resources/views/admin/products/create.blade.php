@extends('layouts.app')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products/</span> Add</h4>

    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add new product</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Description</label>
                    <div class="col-sm-10">
                        <textarea id="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="price">Price</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="text" id="price" class="form-control" name="price" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="quantity">Quantity</label>
                    <div class="col-sm-10">
                        <input type="text" id="quantity" class="form-control" name="quantity" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image">Image</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" class="form-control" name="image" />
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10 text-end">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
