
const row_product = document.querySelectorAll('.row-product');
row_product.forEach((item) => {
    const btn_del = item.querySelector(".btn-del");
    btn_del.addEventListener('click', (e) => {
        const productId = parseInt(item.querySelector(".productId").textContent, 10);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    axios.post("../admin/intermediateProductDelete.php", JSON.stringify({
                        productId: productId,
                    }))
                        .then((response) => {
                            if (response.data) {
                                swal({
                                    title: "Thành công",
                                    text: "Bạn đã xóa sản phẩm  thành công",
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