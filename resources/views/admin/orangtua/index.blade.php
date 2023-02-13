<div class="container">
    <h2>INFO ORANG TUA</h2>

    <button type="button" class="btn btn-success mb-2" name="btnTambah" id="btnTambah"> + Tambah Data </button>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Path Gambar</th>
                <th>Judul</th>
                <th>Artikel</th>
                <th>Sumber</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($selectDB as $DATA)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ substr($DATA->gambar, 0, 25) }}...</td>
                    <td>{{ $DATA->judul }}</td>
                    <td>{{ substr($DATA->artikel, 0, 25) }}...</td>
                    <td>{{ substr($DATA->sumberpenulis, 0, 25) }}...</td>
                    <td>
                        <div class="input-group ">
                            <button type="button" class="btn btn-success" name="btnView" id="btnView"> <i
                                    class="fa fa-eye"></i> </button>
                            <div class="input-group-append ms-1">
                                <button type="button" class="btn btn-warning" name="btnEdit" id="btnEdit"> <i
                                        class="fa fa-pen"></i> </button>
                            </div>
                            <div class="input-group-append ms-1">
                                <button type="button" class="btn btn-danger" name="btnHapus" id="btnHapus"> <i
                                        class="fa fa-trash"></i> </button>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

<script type="text/javascript">
    $('#btnTambah').click(function() {


        $.get("{{ url('modaltambah-orangtua') }}", {}, function(data, status) {

            $('#modal-content').html(data);
            $('#theModal').modal('show');

        });

    });
</script>
