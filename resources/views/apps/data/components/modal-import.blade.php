<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form method="post" action="{{url('data/import')}}" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
				</div>
				<div class="modal-body">

					{{ csrf_field() }}

					<label>Pilih file excel</label>
					<div class="form-group">
						<input class="form-control" type="file" name="file" required="required">
					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Import</button>
				</div>
			</div>
		</form>
	</div>
</div>