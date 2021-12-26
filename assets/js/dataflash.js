const flashdata = $(".flash-data").data("flashdata");
if (flashdata) {
	Swal.fire({
		icon: "success",
		title: "Sukses",
		text: flashdata,
		timer: 2500
	});
}

const flashDataDanger = $(".flash-data-danger").data("flashdata");
if (flashDataDanger) {
	Swal.fire({
		icon: "error",
		title: "Oops..",
		text: flashDataDanger,
	});
}

// delete button
$(".hapus-databelanja").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah Anda yakin?",
		text: "Data yang Anda hapus tidak bisa kembali!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
