// Đàm Trọng Nhân B1910113 
const btn_submit = document.querySelector('#btn-submit-login');
const input_username = document.querySelector('#singin-input-username')
const input_password = document.querySelector('#signin-input-password')
btn_submit.addEventListener('click', (e) => {
    e.preventDefault();
    const value_input_username = input_username.value;
    const value_input_password = input_password.value;
    if (!value_input_password || !value_input_username) {
        swal({
            title: "Error",
            text: "Tên tài khoản hoặc mật khẩu chưa nhập",
            icon: "error",
        });
        return
    }
    axios.post('../admin/intermediateLogin.php', JSON.stringify({
        value_input_username: value_input_username,
        value_input_password: value_input_password
    }))
        .then((response) => {
            console.log(response.data, typeof response.data)
            if (response.data) {
                swal({
                    title: "Succsess",
                    text: "Bạn đã đăng nhập thành công",
                    icon: "success",
                });
                document.addEventListener('click', (e) => {
                    location.href = "../admin/index.php";
                })
            }
            else {
                swal({
                    title: "Error",
                    text: "Bạn đã nhập sai mật khẩu hoặc tài khoản không tồn tại",
                    icon: "error",
                });
            }
        })
        .catch((error) => {
            console.log(error);
            swal({
                title: "Error",
                text: "Có lỗi xảy ra, chúng tôi sẽ sớm sửa lại!",
                icon: "error",
            });
        })
})