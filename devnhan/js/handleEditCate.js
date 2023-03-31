
const Cate = document.querySelectorAll('.Cate');
Cate.forEach((item) => {
    const idCate = item.querySelector('.idCate').textContent;
    const btn_cate_edit = item.querySelector('.btn-edit-cate');
    const idCateNumber = parseInt(idCate, 10);
    btn_cate_edit.addEventListener('click', (e) => {
        swal("Nhập vào loại mới", {
            content: "input",
        })
            .then((value) => {
                if (value) {
                    axios.post("../admin/intermediateCategoryEdit.php", JSON.stringify({
                        idCateNumber: idCateNumber,
                        newCate: value
                    }))
                        .then((response) => {
                            if (response.data) {
                                swal({
                                    title: "Thành công",
                                    text: "Bạn đã thay đổi tên loại sản phẩm",
                                    icon: "success",
                                });
                                document.addEventListener('click', (e) => {
                                    window.location.reload();
                                })
                            }
                            else {
                                swal({
                                    title: "Error",
                                    text: "Có lỗi xảy ra!",
                                    icon: "error",
                                });
                            }
                        })
                        .catch((error) => {
                            swal({
                                title: "Error",
                                text: "Có lỗi xảy ra chúng tôi sẽ sớm khắc phục!",
                                icon: "error",
                            });
                        })
                }
                else {
                    swal({
                        title: "Error",
                        text: "Bạn chưa nhập vào tên loại mới",
                        icon: "error",
                    });
                }
            });
    })
})

