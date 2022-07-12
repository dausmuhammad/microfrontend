app.ApplicationMain = {
	controller: "Api_main/",
	init: function () {
		var select2label;
		$(".select2").select2();
		$("#select2option").select2({
			theme: 'material',
			placeholder: 'PILIH OPTION',
			allowClear: true,
			containerCssClass: "form-control-sm"
		})
		$.validator.addMethod("alphabet", function (value, element) {
			return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
		});
		$.validator.setDefaults({
			submitHandler: function () {
				alert("Form successful submitted!");
			}
		});
		$('#quickForm').validate({
			rules: {
				inputText: {
					required: true,
					alphabet: true
				},
				digitText: {
					required: true,
					number: true
				},
				maxlengthText: {
					maxlength: 6
				},
				email: {
					required: true,
					email: email
				},
				noHandphone: {
					number: true,
					maxlength: 13
				},
				select2option: {
					required: true
				}
			},
			messages: {
				inputText: {
					required: "Tidak boleh kosong",
					alphabet: "Hanya boleh input huruf"
				},
				digitText: {
					required: "Tidak boleh kosong",
					number: "Hanya bisa input angka"
				},
				maxlengthText: {
					maxlength: "Panjang karakter tidak boleh lebih dari 6"
				},
				email: {
					required: "E-Mail Tidak boleh kosong",
					email: "E-Mail tidak valid"
				},
				noHandphone: {
					number: "No Handphone tidak boleh selain angka",
					maxlength: "No Handphone tidak boleh lebih dari 13 Digit"
				},
				select2option: {
					required: "Belum di pilih"
				}
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);


			},
			highlight: function (element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
		this.getListMenu();
		this.setProfilUserLogin();


	},
	getListMenu: function () {
		var menu = $.parseJSON(localStorage.getItem('resultLogin'));
		console.log('Result awal : ', menu);
		menu = menu.result.iamResult.resultUserProfileMenu;
		console.log(menu);
		$.each(menu, function () {
			$("#ul-menu-main").append("<li menu_code =" + this['menu_code'] + " menu_parent_code =" + this['menu_parent_code'] + " menu_alias=" + this['menu_alias'] + " class='nav-item'><a href='#' class='nav-link'><p>" + this['menu_desc'] + "</p></a></li>");
		})

	},
	setProfilUserLogin: function () {
		var loginResult = $.parseJSON(localStorage.getItem('resultLogin'));
		var cabang = loginResult.result.iamResult.resultUserProfileLocation;
		var job = loginResult.result.iamResult.resultUserProfileJob;
		var nama = loginResult.result.iamResult.resultUserProfileHeader.fullname;
		var nik = loginResult.result.iamResult.resultUserProfileHeader.nik;
		var hp_no = loginResult.result.iamResult.resultUserProfileHeader.hp_no;
		var cabangUser = "";
		var jobUser = "";
		$.each(cabang, function () {
			cabangUser = this['branch_name'] + "<br/>"
		});
		$.each(job, function () {
			jobUser = this['job_desc'] + "<br/>"
		})

		$("#login-nama").html(nama);
		$("#login-nik").html(nik);
		$("#login-no-telp").html(hp_no);
		$("#login-jabatan").html(jobUser);
		$("#login-cabang").html(cabangUser);
		console.log('cabang', cabang);
		console.log('job', job);
		console.log('nama', nama);
		console.log('nik', nik);
		console.log('hp_no', hp_no);
		console.log('loginResult', loginResult);
	}
}

$(document).ready(function () {
	app.ApplicationMain.init();
})
