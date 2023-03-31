
const input_cate = document.querySelector('#input-cate')
const btn_addcate = document.querySelector('#btn-addcate')
btn_addcate.addEventListener('click', (e) => {
    e.preventDefault();
    const value_input_cate = input_cate.value;
    if (!value_input_cate) {
        swal({
            title: "Error",
            text: "Bạn chưa nhập loại tên loại sản phẩm",
            icon: "error",
        });
        return
    }
    axios.post('../admin/intermediateCategoryAdd.php', JSON.stringify({
        value_input_cate: value_input_cate
    }))
        .then((response) => {
            console.log(response.data);
            console.log(response);
            if (response.data === false) {
                swal({
                    title: "Error",
                    text: error,
                    icon: "error",
                });
                return
            }
            swal({
                title: "Success",
                text: "Bạn đã thêm loại sản phẩm thành công",
                icon: "success",
            });
        })
        .catch((error) => {
            swal({
                title: "Error",
                text: "Có lỗi xảy ra chúng tôi sẽ sớm phục hồi!",
                icon: "error",
            });
        })

})
