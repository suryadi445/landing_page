// menamppilkan sidebar
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// memanggil ckeditor
CKEDITOR.replace('ckeditor');


// jquery
var table;
$(document).ready(function(){
    table = $('#tabel_artikel').dataTable({
            "processing": true, 
            "serverSide": true, 
            "order": [], 
            "ajax": {
                "url": "get_data_user",
                "type": "POST"
            },
            "columnDefs": [
            { 
                "targets": [ 1,2,3,4,5 ], 
                "orderable": false, 
            },
            ],
            // !cara untuk menambahkan id dan class pada datatables serverside
        //     "columnDefs": [
        //     { 
        //         "targets": [ 2 ], 
        //         "createdCell": function (row){
        //             $( row ).attr( 'data-row-id', 'editor' )// Row id attr
        //             $( row ).addClass('editor')
        //         }
        //     },
        // ],
    });

    // manipulasi text pada input file gambar bootstrap
    $('.custom-file-input').on('change', function(){
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName)
    });

    // menghilangkan notifikasi error
    $('input, .keluar').click(function(){
        $('.error_validasi').html('')
    })

    // insert
    $('#form').submit(function(e){
        e.preventDefault();

        $.ajax({
        url: 'insert',
        type: 'post',
        processData:false,
        contentType:false,
        cache:false,
        data: new FormData(this),
        success: function(data) {
            // console.log(data);
                if(data != 'true'){
                let error = JSON.parse(data);
                
                $('#error_judul').html(error.judul_artikel)
                $('#error_isi').html(error.isi_artikel)
                $('#error_kategori').html(error.kategori_artikel)
                $('#error_tag').html(error.tag_artikel)
                $('#error_thumbnail').html(error.thumbnail_artikel)
                }else{
                    $('#exampleModal').modal('hide')
                    $('#judul_artikel').val('')
                    $('#isi_artikel').val('')
                    $('#kategori_artikel').val('')
                    $('#tag_artikel').val('')
                    $('#thumbnail_artikel').val('')

                    $('#tabel_artikel').DataTable().ajax.reload();
                }
            }
        })
    })
} );
