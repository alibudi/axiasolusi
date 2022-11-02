@extends('template.master')
@section('content')
<div class="row row-sm">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                {{-- <h4 class="card-title mb-1">Create Users</h4> --}}
            
            </div>
            <div class="card-body pt-0">
                <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="">Confirmation Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password">
                    </div>
                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            {{-- <button type="submit" class="btn btn-secondary">Cancel</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- row -->
@endsection