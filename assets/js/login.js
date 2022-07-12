app.Login = {
    controller: "Api_main/",
    init: function () {
        var file = this;
        $("#btn-login").click(function () {
            file.authenticationLogin();
        })
    },

    authenticationLogin: function () {
        var nik = $("#inp-nik").val();
        var password = $("#inp-password").val();
        $.ajax({
            url: app.base_url + this.controller + "login",
            data: {
                "username": nik,
                "password": password,
                "app": "SKTN"
            },
            type: "POST",
            success: function (response) {
                var json = $.parseJSON(response);
                localStorage.setItem('resultLogin', response);
                console.log(json);
                if (json.status.responseCode == 400) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Login gagal',
                        showConfirmButton: false,
                        timer: 1500,
                        width: '20em'
                    })
                } else if (json.status.responseCode == 200) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Login berhasil',
                        showConfirmButton: false,
                        timer: 1500,
                        width: '20em'
                        
                    }).then((result) => {
                        console.log(result);
                        if (result.dismiss) {
                            window.location.href = app.base_url + "home";
                        }
                    })
                }
            },
            error: function (response) {
                console.log(response);
            }
        })
    },

}

$(document).ready(function () {
    app.Login.init();
})