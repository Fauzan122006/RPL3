$(function() {
    $('.tombolTambahData') .on('click', function() {
        
        $('#judulModalLabel').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('tambah data');
        $('#nama').val('');
            $('#telepon').val('');
            $('#email').val('');
            $('#jurusan').val('');
            $('#id').val('');
        $('.modal-body form').attr('action', 'http://localhost/PHP/Sandika%20Galih/phpmvc/daftarsiswa/tambah');
        

    });

    $('.tampilModalUbah') .on('click', function() {
        
        $('#judulModalLabel').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('ubah data');
        $('.modal-body form').attr('action', 'http://localhost/PHP/Sandika%20Galih/phpmvc/daftarsiswa/ubah');


        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/PHP/Sandika%20Galih/phpmvc/daftarsiswa/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#telepon').val(data.telepon);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        })
    });
    

});