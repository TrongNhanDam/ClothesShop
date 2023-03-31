
const btn_guest = document.querySelector(".btn-guest");
btn_guest.addEventListener('click', (e) => {
    e.preventDefault();
    const userEmail = document.querySelector(".container__form__input").value;
    const userContent = document.querySelector(".container__form__textarea").value;
    if (!userEmail || !userContent) {
        swal({
            title: "Error",
            text: "Vui lòng nhập đủ thông tin",
            icon: "error",
        });
        return
    }
    axios.post('../php/intermediateFeedback.php', JSON.stringify({
        userEmail: userEmail,
        userContent: userContent
    }))
        .then((response) => {
            console.log(response.data);
            // console.log(response);
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
                text: "Cảm ơn bạn đã góp ý, DevNhan xin ghi nhận góp ý",
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