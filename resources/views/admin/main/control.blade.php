@extends('admin.main.app')

@section('body')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       @yield('title')
        <small>@yield('title-small')</small>
      </h1>
      @yield('breadcrumb')
      
    </section>

    <!-- Main content -->
    <section class="content">
      
     @yield('main-content')

    </section>
    <!-- /.content -->
@endsection