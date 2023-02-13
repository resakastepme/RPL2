<h1 class="text-center"> TAMBAH INFO ORANG TUA </h1>
<hr class="animated zoomIn">
<form action="{{ route('tambah-orangtua') }}" method="POST" enctype="multipart/form-data" id="form-action">
    @csrf

    <h5> GAMBAR * </h5>
    <input type="file" id="img" name="img" accept="image/*">

    <br><br>

    <h5> JUDUL * </h5>
    <input type="text" id="judul" name="judul">

    <br><br>

    <h5> SUMBER * </h5>
    <input type="text" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis" style="width: 49%;"><br>

    <br>

    <h5> ARTIKEL * (html_entity_decode) </h5>
    <textarea name="artikel" id="artikel" cols="90" rows="19"></textarea>

    <br>

    <button type="submit" class="btn btn-primary mt-3" name="btnSubmit" id="btnSubmit"> SUBMIT </button>
    <button type="button" class="btn btn-danger mt-3" name="btnBatal" id="btnBatal"> BATAL </button>
</form>

<script type="text/javascript">
    $('#btnBatal').click(function() {

        $('#theModal').modal('hide');

    });

    $('#form-action').on('submit', function(e) {

        e.preventDefault();

        var form = this;

        $.ajax({

            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function() {
                $('#content').hide();
            },
            success: function(data) {
                if (data.code == 0) {
                    Swal.fire({
                        icon: 'danger',
                        title: 'Oops...',
                        text: 'Gagal!'
                    })
                }else{

                    $(form)[0].reset();
                    $('#content').show();
                    $('#theModal').modal('hide');

                    Swal.fire({
                        icon: 'success',
                        title: 'Nice!',
                        text: 'Data berhasil disimpan.'
                    })
                }

                // $(form)[0].reset();
                // $('#content').show();
                // $('#theModal').modal('hide');

                // Swal.fire({
                //     icon: 'success',
                //     title: 'Nice!',
                //     text: 'Data berhasil disimpan.'
                // })

            }

        });

    });

    // $('#btnSubmit').click(function() {

    //     var img = $('#img').prop('files')[0];
    //     var judul = $('#judul').val();
    //     var sumber = $('#sumberpenulis').val();
    //     var artikel = $('#artikel').val();

    //     $.ajax({

    //         type: "POST",
    //         contentType: "multipart/form-data",
    //         url: "{{ url('tambah-orangtua') }}",
    //         data: {
    //             img: img,
    //             judul: judul,
    //             sumber: sumber,
    //             artikel: artikel
    //         },
    //         success: function(response) {
    //             // $('#theModal').modal('hide');

    //             console.log('SUCCESS')

    //         },
    //         error: function(response){
    //             console.log('ERROR')
    //         }

    //     });

    // if (img && judul && sumber && artikel) {

    //     $.ajax({

    //         type: "GET",
    //         url: "{{ url('tambah-orangtua') }}",
    //         data: {
    //             img: img,
    //             judul: judul,
    //             sumber: sumber,
    //             artikel: artikel
    //         },
    //         success: function(data) {
    //             $('#theModal').modal('hide');

    //         }

    //     });

    // } else {

    //     Swal.fire({
    //         icon: 'warning',
    //         title: 'Oops...',
    //         text: 'Lengkapin form terlebih dahulu!'
    //     })

    // }

    // });
</script>
