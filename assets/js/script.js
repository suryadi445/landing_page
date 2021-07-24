// menamppilkan sidebar
function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function () {
	$(".link_menu").on("click", function () {
		var data_gambar = $(this).attr("data-gambar");
		var url = "assets/images/";
		var data_menu = $(this).attr("data-menu");

		$("#gambar_modal").attr("src", url + data_gambar);
		$("#nama_modal").text(data_menu);
	});

	$("#basic-addon2").on("click", function () {
		var input = $("#input_email").val();
		$.ajax({
			url: "home/sign_up",
			data: { input: input },
			type: "post",
			success: function (data) {
				// console.log(data);
				if (data == "") {
					Swal.fire({
						icon: "success",
						title: "Berhasil...",
						text: "Terima Kasih, data sudah tersimpan",
					});
				} else {
					Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Maaf, data gagal terkirim",
					});
					var error = JSON.parse(data);
					$(".error").html(error.email);
				}
				$("#input_email").val("");
			},
		});
	});
});
