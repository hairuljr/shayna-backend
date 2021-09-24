<script>
  //HapusAjax
  jQuery(document).ready(function($){
    $('.deleteAjax').on('click', function (event) {
      event.preventDefault();
      var route = $(this).attr('href');
      var msg = $(this).attr('data-routeName');
      Swal.fire({
        title: 'Konfirmasi',
        text: "Yakin menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
          if (result.isConfirmed) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var id = $(this).attr('data-id');
            var url = route;
            $.ajax({
              url: url,
              type: 'DELETE',
              data: {
                  _token: CSRF_TOKEN,
                  id: id
              },
              success: function (response){
                Swal.fire(
                'Success!',
                msg+' telah berhasil dihapus!',
                'success'
                );
                setTimeout(function(){
                    window.location.reload();
                }, 1500);
              }
            });
          } else {
            return false;
          }
        });
    });
  });
</script>