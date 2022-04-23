const flashData = $(".flash-data").data("flashdata");

console.log(flashData);

if (flashData == "Ditambahkan") {
	Swal.fire({
		title: "",
		text: "Data Berhasil " + flashData,
		icon: "success",
	});
} else if (flashData == "Gagal Ditambahkan") {
	Swal.fire({
		title: "",
		text: "Data " + flashData,
		icon: "error",
	});
} else if (flashData == "Diubah") {
	Swal.fire({
		title: "",
		text: "Data Berhasil " + flashData,
		icon: "success",
	});
} else if (flashData == "Gagal Diubah") {
	Swal.fire({
		title: "",
		text: "Data " + flashData,
		icon: "error",
	});
} else if (flashData == "Belum Dimasukkan") {
	Swal.fire({
		title: "",
		text: "Gambar " + flashData,
		icon: "error",
	});
} else if (flashData == "Berhasil Login") {
	Swal.fire({
		title: "",
		text: "Login Berhasil",
		icon: "success",
	});
} else if (flashData == "Password Salah") {
	Swal.fire({
		title: "",
		text: "Password Salah",
		icon: "error",
	});
} else if (flashData == "Tidak Terdaftar") {
	Swal.fire({
		title: "",
		text: "Akun " + flashData,
		icon: "error",
	});
}

// tombol hapus

$(".tombolhapus").on("click", function (e) {
	e.preventDefault();

	const href = $(this).attr("href");

	Swal.fire({
		title: "Hapus Data",
		text: "Yakin Hapus Data ?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#dd3333",
		confirmButtonText: "Hapus",
		cancelButtonText: "Batal",
		cancelButtonColor: "#aaa",
	}).then((result) => {
		if (result.value) {
			Swal.fire("Hapus", "Data Berhasil Dihapus.", "success");
			document.location.href = href;
		}
	});
});
