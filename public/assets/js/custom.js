$( '#select2-add' ).select2( {
    theme: 'bootstrap-5',
    dropdownParent: $('#addModal')
} );

$( '#select2-edit' ).select2( {
    theme: 'bootstrap-5',
    dropdownParent: $('#editModal')
} );

$(document).ready(function() {
    $('#datatable').DataTable();
} );


