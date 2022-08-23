<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }} "></script>
<!-- prismjs plugin -->
<script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
<script src="{{ asset('assets/libs/list.js/list.min.js') }}"></script>
<script src="{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<!-- ckeditor -->
<script src="{{ asset('assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<!-- trix -->
<script src="{{ asset('vendor/trix/trix.js') }}"></script>
<!-- dropzone js -->
<script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>
<!-- datatable-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<!-- chartjs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<!-- Layout config Js -->
<script src="{{ asset('assets/js/layout.js') }}"></script>
<!--Select2-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!--Custom JS-->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Sweet Alert-->
@include('sweetalert::alert')

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">VERSION MONITORING ED</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Version 1.3
      </div>
      <div class="modal-footer">
        <button id="btn_version_close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
	$( "#btn_version" ).on( "click", function() {
	  $('#exampleModal').modal('show');
	});

	$( "#btn_version_close" ).on( "click", function() {
	  $('#exampleModal').modal('hide');
	});
</script>

@stack('js')
