  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>

    <strong>Copyright &copy; 2017-{{ Carbon\carbon::now()->year }}  <a href="https://Bitfumes.com"> PSTU</a>.</strong> All rights
    reserved.

     <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTabladmin>
<script src="admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{asset('admin/dist/js/demo.js')}}"></script>


<!-- page script -->

    
     @section('footerSection')

    @show

  </footer>