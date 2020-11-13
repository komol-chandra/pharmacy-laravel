<!-- JQuery -->
<script src="{{asset('Backend_assets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<!-- JQuery -->

<!-- Bootstrap -->
<script src="{{asset('Backend_assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('Backend_assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap -->

<script src="{{ asset('Backend_assets/assets/js/scrollspyNav.js') }}"></script>



<!-- Feather  Icon -->
<script>
    feather.replace()
</script>
<!-- Feather  Icon -->

<!-- Theme JS -->
<script src="{{asset('Backend_assets/assets/js/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>



<script src="{{asset('Backend_assets/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<!-- Theme JS -->

<!-- JS Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<!-- JS Validation -->

<!-- Datatable CDN -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
</script>
<!-- Datatable CDN -->

<!-- Custom JS -->
<script src="{{asset('Backend_assets/assets/js/custom.js')}}"></script>
<!-- Custom JS -->

<!-- iziToast js script Begin -->
<script>
    @foreach ($errors->all() as $error)
    iziToast.warning({
        title: "Warning",
        message: "{{ $error }}",
        position: 'topRight',
    });
    @endforeach

    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type') }}";
      switch(type){
          case 'info':
          iziToast.info({
            title: "{{ Session::get('title') }}",
            message: "{{ Session::get('message') }}",
            position: 'topRight',
        });
              break;

          case 'warning':
              iziToast.warning({
                title: "{{ Session::get('title') }}",
                message: "{{ Session::get('message') }}",
                position: 'topRight',
            });
              break;

          case 'success':
          iziToast.success({
                title: "{{ Session::get('title') }}",
                message: "{{ Session::get('message') }}",
                position: 'topRight',
                });
              break;

          case 'error':
              iziToast.error({
                title: "{{ Session::get('message') }}",
                message: "{{ Session::get('message') }}",
                position: 'topRight',
                });
              break;
      }
    @endif
</script>

<!-- iziToast js script END -->


<script type="text/javascript">
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previmage')
        .attr('src', e.target.result)
        .width(400)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
@livewireScripts  
</script>
@yield('script')