
const CateDel = document.querySelectorAll('.Cate');
CateDel.forEach((item) => {
    const idCate = item.querySelector('.idCate').textContent;
    const btn_cate_del = item.querySelector('.btn-del-cate');
    const idCateNumber = parseInt(idCate, 10);
    btn_cate_del.addEventListener('click', (e) => {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    axios.post("../admin/intermediateCategoryDelete.php", JSON.stringify({
                        idCateNumber: idCateNumber,
                    }))
                        .then((response) => {
                            if (response.data) {
                                swal({
                                    title: "Thành công",
                                    text: "Bạn đã xóa tên loại thành công",
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
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    })
})

