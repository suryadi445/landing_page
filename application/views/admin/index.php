<div class="container shadow-lg p-3 mb-5 bg-white rounded mt-3">
    <div class="col-md-12">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <table class="table table-bordered text-center table-responsive" id="tabel_artikel">
                        <div class="row justify-content-center">
                            <h2>Data Artikel</h2>
                        </div>
                        <div class="row justify-content-end">
                            <button class="btn btn-primary mb-3 mr-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                        </div>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Artikel</th>
                                <th scope="col">Isi Artikel</th>
                                <th scope="col">Thumbnail Artikel</th>
                                <th scope="col">Tag Artikel</th>
                                <th scope="col">Kategori Artikel</th>
                                <!-- <th scope="col">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- looping ajax -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- modal tambah menu -->
<div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" enctype="multipart/form-data" id="form">
                    <div class="form-group row">
                        <label for="judul_artikel" class="col-sm-4 col-form-label">Judul Artikel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="judul_artikel" id="judul_artikel">
                        </div>
                        <div class="col-sm-8 offset-sm-4">
                            <span class="text-danger error_validasi" id="error_judul"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi_artikel" class="col-sm-4 col-form-label">Isi Artikel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="isi_artikel" id="isi_artikel">
                        </div>
                        <div class="col-sm-8 offset-sm-4">
                            <span class="text-danger error_validasi" id="error_isi"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thumbnail_artikel" class="col-sm-4 col-form-label">Thumbnail Artikel</label>
                        <div class="input-group col-sm-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="thumbnail_artikel" name="thumbnail_artikel">
                                <label class="custom-file-label" for="thumbnail_artikel">Pilih Gambar</label>
                            </div>
                        </div>
                        <div class="col-sm-8 offset-sm-4">
                            <span class="text-danger error_validasi" id="error_thumbnail"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tag_artikel" class="col-sm-4 col-form-label">Tag Artikel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tag_artikel" id="tag_artikel">
                        </div>
                        <div class="col-sm-8 offset-sm-4">
                            <span class="text-danger error_validasi" id="error_tag"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori_artikel" class="col-sm-4 col-form-label">Kategori Artikel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kategori_artikel" id="kategori_artikel">
                        </div>
                        <div class="col-sm-8 offset-sm-4">
                            <span class="text-danger error_validasi" id="error_kategori"></span>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary keluar" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="button_tambah">Tambah Data</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- modal ckeditor -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Isi Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <textarea class="form-control" id="ckeditor" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Isi Artikel</button>
            </div>
        </div>
    </div>
</div>