
//thong tin user
const btnPay = document.querySelector(".container__checkout__a");
const userName = document.querySelector(".container__ShipmentDetails__name");
const userEmail = document.querySelector(".container__ShipmentDetails__emailphone__email");
const userPhone = document.querySelector(".container__ShipmentDetails__emailphone__phone");
const userAddress = document.querySelector(".container__ShipmentDetails__address");
const userPro = document.querySelector("#province");
const userDis = document.querySelector("#district")
const userWar = document.querySelector("#ward");

btnPay.addEventListener("click", (e) => {
    e.preventDefault();
    //thong tin user
    const uName = userName.value;
    const uEmail = userEmail.value;
    const uPhone = userPhone.value;
    const uAddress = userAddress.value;
    const uPro = userPro.value;
    const uDis = userDis.value;
    const uWar = userWar.value;
    if (!uName || !uEmail || !uPhone || !uAddress || !uPro || !uDis || !uWar) {
        swal({
            title: "Ops!",
            text: "Bạn phải nhập đầy đủ thông tin trước đã!",
            icon: "error",
        });
        return
    }
    axios.post("../php/intermediateAddOrder.php", JSON.stringify({
        uName: uName,
        uEmail: uEmail,
        uPhone: uPhone,
        uAddress: uAddress,
        uPro: uPro,
        uDis: uDis,
        uWar: uWar
    }))
        .then((response) => {
            if (response.data) {
                swal({
                    title: "Tuyệt vời!",
                    text: "Bạn đã đặt hàng thành công!",
                    icon: "success",
                });
                return
            }
            swal({
                title: "Lỗi!",
                text: "Có lỗi xảy ra chúng tôi sẽ sớm khắc phục!",
                icon: "error",
            });
        })
        .catch((error) => {
            swal({
                title: "Lỗi!",
                text: "Có lỗi xảy ra chúng tôi sẽ sớm khắc phục!",
                icon: "error",
            });
        })
})