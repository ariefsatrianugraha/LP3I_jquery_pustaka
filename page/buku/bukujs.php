<script>
    $(document).ready(function(){
        let mode = 'get';

        $.fn.getData = function(){
            $.ajax({
                url:'api/buku/proses.php',
                type:'POST',
                data: {mod:mode},
                dataType:'json',
                beforeSend:function(){
                    // $('#example-table').loading('toggle');
                },
                success:function(result){
                    // $('#example-table').loading('toggle');
                    let row='';
                    let nomor = 1;
                    for(let i = 0; i < result.length; i++){
                        let buku = JSON.stringify(result[i]);

                        row +="<tr data-buku='"+buku+"'>";
                        row +="<td>"+nomor+"</td>";
                        row +="<td>"+result[i].judul+"</td>";
                        row +="<td>"+result[i].pengarang+"</td>";
                        row +="<td>"+result[i].penerbit+"</td>";
                        row +="<td>"+result[i].sinopsis+"</td>";
                        row +="<td><img src='api/buku/"+result[i].gambar+"'width='50px'></td>";
                        row +="<td><button data-buku='"+buku+"'onclick='$(this).deleteRow()'> Delete </button></td>";
                        row +="</tr>";

                        nomor ++;
                    }

                    $('#row_data').html(row);
                }
            })
        };

        $.fn.saveData= function(){
			let parameter={
				id:$('#tid').val(),
				nim:$('#tnim').val(),
				nama:$('#tnama').val(),
				telpon:$('#ttelpon').val(),
				alamat:$('#talamat').val(),
				mode:modeAction
			}

			$.ajax({
				url:'api/member/proses.php',
				data:parameter,
				type:'POST',
				dataType:'json',
				beforeSend:function(){

				},success:function(res){
					$('#exampleModal').modal('toggle')

					Swal.fire({
						title: 'Succsess',
						text: res.messages,
						icon: 'success',
						confirmButtonText: 'Ok'
					});
					
					modeAction='get';
					$(this).loadData();
				}
			});
		}

        $(this).getData();

        $('#btn_reload').click(function(){
            $(this).getData();
        });

        $('#btn_add').click(function(){
            $('#exampleModal').modal('toggle');
        });

        $('#buku_form').on('submit',function(event){
            event.preventDefault();
            $(this).save();
        });
        
    });
</script>