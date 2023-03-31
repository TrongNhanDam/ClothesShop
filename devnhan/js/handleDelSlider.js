
const sliderDel = document.querySelectorAll('.slider-item');
sliderDel.forEach((item) => {
    const sliderId = item.querySelector('.sliderId').innerText;
    const btn_del_slider = item.querySelector('.btn-del-slider');
    const idSliderNumber = parseInt(sliderId, 10);
    btn_del_slider.addEventListener('click', (e) => {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    axios.post("../admin/intermediateSliderDel.php", JSON.stringify({
                        idSliderNumber: idSliderNumber,
                    }))
                        .then((response) => {
                            console.log(response.data);
                            if (response.data) {
                                swal({
                                    title: "Thành công",
                                    text: "Bạn đã xóa slider loại thành công",
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

