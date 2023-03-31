
const feedbackDel = document.querySelectorAll('.feedback');
feedbackDel.forEach((item) => {
    const feedbackId = item.querySelector('.feed-id').innerText;
    const btn_del_feedback = item.querySelector('.btn-del-feedback');
    const idFeedNumber = parseInt(feedbackId, 10);
    btn_del_feedback.addEventListener('click', (e) => {
        swal({
            title: "Are you sure?",
            text: "Bạn có muốn xóa góp ý từ user",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    axios.post("../admin/intermediateFeedbackDel.php", JSON.stringify({
                        idFeedNumber: idFeedNumber,
                    }))
                        .then((response) => {
                            console.log(response.data);
                            if (response.data) {
                                swal({
                                    title: "Thành công",
                                    text: "Bạn đã xóa góp ý loại thành công",
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
                    swal("Góp ý vẫn an toàn!");
                }
            });
    })
})

