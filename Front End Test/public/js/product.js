$(document).ready(function () {
    if ($.fn.DataTable.isDataTable('#productTable')) {
        $('#productTable').DataTable().destroy();
    }

    $('#productTable').DataTable({
        ordering: false
    });

    $('#btnSave').on('click', function () {
        alert('Data berhasil disimpan');
        $('#addModal').modal('hide');
    });
});
