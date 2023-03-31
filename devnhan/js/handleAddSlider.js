
const btn_addSlider = document.querySelector("#btn-addSlider");

btn_addSlider.addEventListener('click', (e) => {
    e.preventDefault();
    const sliderNode = document.querySelector('.file-slider');
    const slider = sliderNode.value;
    if (!slider) {
        swal({
            title: "Error",
            text: "Bạn chưa thêm slider",
            icon: "error",
        });
        return
    }
    let formData = new FormData();
    formData.append('slider', sliderNode.files[0])
    axios.post("../admin/intermediateSliderAdd.php",
        formData,
        {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then((response) => {
            console.log(response.data);
            if (response.data) {
                swal({
                    title: "Success",
                    text: "Bạn đã thêm loại slider thành công",
                    icon: "success",
                })
                return
            }
            swal({
                title: "Error",
                text: "Có lỗi xảy ra chúng tôi sẽ sớm phục hồi!",
                icon: "error",
            });
        })
        .catch(() => {
            swal({
                title: "Error",
                text: "Có lỗi xảy ra chúng tôi sẽ sớm phục hồi!",
                icon: "error",
            });
        })
})