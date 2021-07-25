// menamppilkan sidebar
function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

// jquery
$(document).ready(function () {
	$(".link_menu").on("click", function () {
		var data_gambar = $(this).attr("data-gambar");
		var url = "assets/images/";
		var data_menu = $(this).attr("data-menu");

		$("#gambar_modal").attr("src", url + data_gambar);
		$("#nama_modal").text(data_menu);
	});

	$("#basic-addon2").on("click", function () {
		// $(".btn_loading").removeClass("d-none");
		// $("#basic-addon2").addClass("d-none");
		var input = $("#input_email").val();

		Swal.fire({
			imageUrl: "assets/icon/loading.gif",
			// icon: "https://www.boasnotas.com/img/loading2.gif",
			title: "LOADING..",
			text: "Wait a Moment!!",
			imageHeight: 100,
			imageAlt: "Loading image",
			showConfirmButton: false,
			allowOutsideClick: false,
		});

		// return false;
		$.ajax({
			url: "home/sign_up",
			data: { input: input },
			type: "post",
			success: function (data) {
				swal.closeModal();
				if (data == "") {
					Swal.fire({
						icon: "success",
						title: "Berhasil...",
						text: "Terima Kasih, data sudah tersimpan",
					});

					$(".btn_loading").addClass("d-none");
					$("#basic-addon2").removeClass("d-none");
					$(".error").toggleClass("d-none");
				} else {
					swal.closeModal();

					Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Maaf, data gagal terkirim",
					});
					$(".btn_loading").addClass("d-none");
					$("#basic-addon2").removeClass("d-none");
					$(".error").toggleClass("d-none");
					var error = JSON.parse(data);
					$(".error").html(error.email);
				}
				$("#input_email").val("");
			},
		});
	});
});
