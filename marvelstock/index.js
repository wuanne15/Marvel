$(document).ready(function() {
    $('#ranking').DataTable();
} );
$('#ranking').dataTable( {
  "columnDefs": [
    { "orderable": false, "targets": 0,1 }
  ]
} );
