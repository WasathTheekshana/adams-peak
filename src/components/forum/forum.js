var myVar = setInterval(LoadData, 2000);

http_request = new XMLHttpRequest();

function LoadData(){
$.ajax({
url: './src/components/forum/view.php',
type: "POST",
dataType: 'json',
success: function(data) {
    $('#MyTable tbody').empty();
    for (var i=0; i<data.length; i++) {
        var commentId = data[i].id;
        if(data[i].parent_comment == 0){
        var row = $('<tr><td class="mainComment"><p class="commenter"><img class="avatar" src="./src/components/forum/avatar.jpg" width="30px" height="30px"/>' + data[i].name + ' <i class="date"> '+ data[i].date + '(GMT)</i></p></br><p class="commentText">' + data[i].comment + '</br></br><a data-toggle="modal" data-id="'+ commentId +'" title="Add this item" class="open-ReplyModal" href="#ReplyModal">Reply</a>'+'</p></td></tr>');
        $('#record').append(row);
        for (var r = (data.length-1); (r >= 0); r--)
                {
                    if ( data[r].parent_comment == commentId)
                    {
                        var comments = $('<tr><td class="repComment"><p class="commenter"><img class="avatar" src="./src/components/forum/avatar.jpg" width="30px" height="30px"/>' + data[r].name + ' <i class="date"> ' + data[r].date + '(GMT)</i></p></br><p class="commentText">'+ data[r].comment +'</p></td></tr>');
                        $('#record').append(comments);
                    }
                }$('#record').append($('<tr class="commentGap"></tr>'));
        }
    }
},
error: function(jqXHR, textStatus, errorThrown){
    // alert('Error: ' + textStatus + ' - ' + errorThrown);
}
});
}



$(document).on("click", ".open-ReplyModal", function () {
     var commentid = $(this).data('id');
     $(".modal-body #commentid").val( commentid );
});


		
//Post data to the server
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var id = document.forms["frm"]["Pcommentid"].value;
		var name = document.forms["frm"]["name"].value;
		var msg = document.forms["frm"]["msg"].value;
		if(name!="" && msg!=""){
			$.ajax({
				url: "./src/components/forum/save.php",
				type: "POST",
				data: {
					id: id,
					name: name,
					msg: msg,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						document.forms["frm"]["Pcommentid"].value = "";
						document.forms["frm"]["name"].value = "";
						document.forms["frm"]["msg"].value = "";
						LoadData(); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			// alert('Please fill all the field !');
		}
	});
});

//Reply comment
$(document).ready(function() {
	$('#btnreply').on('click', function() {
		$("#btnreply").attr("disabled", "disabled");
		var id = document.forms["frm1"]["Rcommentid"].value;
		var name = document.forms["frm1"]["Rname"].value;
		var msg = document.forms["frm1"]["Rmsg"].value;
		if(name!="" && msg!=""){
			$.ajax({
				url: "./src/components/forum/save.php",
				type: "POST",
				data: {
					id: id,
					name: name,
					msg: msg,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#btnreply").removeAttr("disabled");
						document.forms["frm1"]["Rcommentid"].value = "";
						document.forms["frm1"]["Rname"].value = "";
						document.forms["frm1"]["Rmsg"].value = "";
						LoadData(); 
						$("#ReplyModal").modal("hide");
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			// alert('Please fill all the field !');
		}
	});
});




	