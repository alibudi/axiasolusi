@extends('template.master')
@section('content')
       <!-- Page Heading -->
       <h1 class="h3 mb-2 text-gray-800">Data Users</h1>

       <div>
        @if(session('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
         <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
           <span class="alert-inner--text"><strong>Success!</strong> {{ session('success') }}!</span>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>
       @endif
       @if(session('errors'))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
          @foreach ($errors->all() as $error)
             <span class="alert-inner--text"><strong>Error!</strong> {{ $error }}!</span>
            @endforeach
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>
       @endif
   </div>
   
       <!-- DataTales Example -->
       <div class="card shadow mb-4">
           <div class="card-header py-3">
               {{-- <h6 class="m-0 font-weight-bold text-primary">Data Users</h6> --}}
               <a href="{{route('user.create')}}" class="btn btn-primary">Add New</a>
           </div>
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                           </tr>
                       </thead>
                       <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($users as $item)
                            
                           <tr>
                               <td>{{$item->name}}</td>
                               <td>{{$item->email}}</td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
@endsection