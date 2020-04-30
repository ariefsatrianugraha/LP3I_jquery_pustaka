<script>
    // $(document).ready(function(){
        // let mode = 'get';

        // $.fn.getData = function(){
        //     $.ajax({
        //         url:'api/peminjaman/proses.php',
        //         type:'POST',
        //         data: {mod:mode},
        //         dataType:'json',
        //         beforeSend:function(){
        //             // $('#example-table').loading('toggle');
        //         },
        //         success:function(result){
        //             // $('#example-table').loading('toggle');
        //             let row='';
        //             let nomor = 1;
        //             for(let i = 0; i < result.length; i++){
        //                 let peminjaman = JSON.stringify(result[i]);

        //                 row +="<tr data-peminjaman='"+peminjaman+"'>";
        //                 row +="<td>"+nomor+"</td>";
        //                 row +="<td>"+result[i].nama_peminjam+"</td>";
        //                 row +="<td>"+result[i].tanggal_pinjam+"</td>";
        //                 row +="<td>"+result[i].tanggal_pengembalian+"</td>";
        //                 row +="<td>"+result[i].judul_buku+"</td>";
        //                 row +="<td>"+result[i].jumlah_pinjam+"</td>";
        //                 row +="<td><button data-peminjaman='"+peminjaman+"'onclick='$(this).deleteRow()'> Delete </button></td>";
        //                 row +="</tr>";

        //                 nomor ++;
        //             }

        //             $('#row_data').html(row);
        //         }
        //     })
        // };

        // $.fn.saveData= function(){
		// 	let parameter={
		// 		id:$('#idPinjam').val(),
		// 		nim:$('#tnim').val(),
		// 		nama:$('#tnama').val(),
		// 		telpon:$('#ttelpon').val(),
		// 		alamat:$('#talamat').val(),
		// 		mode:mode
		// 	}

		// 	$.ajax({
		// 		url:'api/member/proses.php',
		// 		data:parameter,
		// 		type:'POST',
		// 		dataType:'json',
		// 		beforeSend:function(){

		// 		},success:function(res){
		// 			$('#exampleModal').modal('toggle')

		// 			Swal.fire({
		// 				title: 'Succsess',
		// 				text: res.messages,
		// 				icon: 'success',
		// 				confirmButtonText: 'Ok'
		// 			});
					
		// 			modeAction='get';
		// 			$(this).getData();
		// 		}
		// 	});
		// }

        // $(this).getData();

        $.fn.saveData = function(){
            var name = $('#nama_pinjam').val();
            var tanggal_pinjam = $('#tanggal_pinjam').val();
            var tanggal_pengembalian = $('#tanggal_pengembalian').val();
            var judul_buku = $('#judul_buku').val();
            var jumlah_pinjam = $('#jumlah_pinjam').val();

            var isi = `<tr><td>${name}</td><td>${tanggal_pinjam}</td><td>${tanggal_pengembalian}</td><td>${judul_buku}</td><td>${jumlah_pinjam}</td>`;

            $('table tbody').append(isi);
        }

        $('#btn_add').click(function(){
            $('#exampleModal').modal('toggle');
        });

        $('#btnProses').click(function(){
            
            // let nama = $('#nama_peminjam').val();
            // let tanggal_pinjam = $('#tanggal_pinjam').val();
            // let tanggal_pengembalian = $('#tanggal_pengembalian').val();
            // let judul_buku = $('#judul_buku').val();
            // let jumlah_pinjam = $('#jumlah_pinjam').val();

			$(this).saveData();
            $

		});

        $('#tanggal_pinjam').datepicker();
        $('#tanggal_pinjam').datepicker('option','dateFormat','yy-mm-dd');
        $('#tanggal_pengembalian').datepicker()
        $('#tanggal_pengembalian').datepicker('option','dateFormat','yy-mm-dd');
    // }); 
</script>