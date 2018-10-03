@extends('admin/layouts/app')

@section('main-content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <@include('admin.layouts.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
                 <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admin</h3>
            </div>

            @include('includes.messages')


            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('user.store')}}" method="post">
              {{csrf_field()}}
              <div class="box-body">


                <div class="col-lg-offset-3 col-lg-6">

                  <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" class="form-control" id="name" placeholder="User Name" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" placeholder="phone" name="phone" value="{{ old('phone') }}">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="password" name="password" value="{{ old('password') }}">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" class="form-control" id="password_confirmation" placeholder="confirm_password" name="password_confirmation">
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                  <div class="checkbox">
                    <label><input type="checkbox" name="status"
                     @if (old('status') == 1)
                    checked 
                    @endif
                     value="1">Status</label>
                  </div>
                </div>

                <div class="form-group">
                  <label>Assign Role</label>
                  <div class="row">
                    @foreach($roles as $role)
                    <div class="col-lg-3">
                      <div class="checkbox">
                        <label><input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}</label>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>

                 <div class="from-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('user.index')}}" type="button" class="btn btn-warning" >Back</a>
              </div>

                </div>
             

              </div> 
              </div>
                        
             
            </form>
          </div>

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection