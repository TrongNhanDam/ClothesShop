
const btn = document.getElementById("pass");
btn.addEventListener('click', (e) => {
    e.preventDefault();
    const old = document.getElementById('old').value;
    const newpass = document.getElementById('new').value;
    const confirmpass = document.getElementById('confirm').value;
    if (!old || !newpass) {
        swal({
            title: "Error",
            text: "Bạn chưa nhập Password cũ hoặc mới!",
            icon: "error",
        });
        return;
    }
    axios.post('../admin/intermediateChangePass.php',
        JSON.stringify({
            oldpass: old,
            newpass: newpass,
            confirmpass: confirmpass
        }))
        .then((response) => {
            if (response.data) {
                swal({
                    title: "Success",
                    text: "Bạn đã đổi mật khẩu thành công",
                    icon: "success",
                });
                return
            }
            swal({
                title: "Error",
                text: "Bạn đã nhập sai Password cũ hoặc xác nhận password mới sai",
                icon: "error",
            });
        })
        .catch((error) => {
            swal({
                title: "Error",
                text: "Có lỗi xảy ra chúng tôi sẽ sớm sửa!",
                icon: "error",
            });
        });
})