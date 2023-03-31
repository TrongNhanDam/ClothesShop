
const btn_add_product = document.querySelector('#btn-addProduct');

btn_add_product.addEventListener('click', (e) => {
    e.preventDefault();
    const productName = document.querySelector('#input-name-product').value;
    const cateSelect = document.querySelector('#select-cate-product').value;
    const productDes = document.querySelector('#pro-des').value;
    const productPrice = document.querySelector('#input-price-product').value;
    const productSizeS = document.querySelector('#sizeS').value;
    const productSizeM = document.querySelector('#sizeM').value;
    const productSizeL = document.querySelector('#sizeL').value;
    const productSizeXL = document.querySelector('#sizeXL').value;
    const productQuanityAnother = document.querySelector('#quantityAnother').value;
    const productImg = document.querySelector('#pro-img')

    if (!productName || !cateSelect || !productDes || !productPrice || !productSizeS || !productSizeM || !productSizeL || !productSizeXL || !productQuanityAnother || !productImg) {
        swal({
            title: "Error",
            text: "Bạn chưa nhập đủ các thông tin của sản phẩm cần thêm!",
            icon: "error"
        });
        return
    }
    let formData = new FormData();
    formData.append('file', productImg.files[0]);
    formData.append('productName', productName)
    formData.append('cateSelect', cateSelect)
    formData.append('productDes', productDes)
    formData.append('productPrice', productPrice)
    formData.append('productSizeS', productSizeS)
    formData.append('productSizeM', productSizeM)
    formData.append('productSizeL', productSizeL)
    formData.append(' productSizeXL', productSizeXL)
    formData.append('productSizeL', productSizeM)
    formData.append('productQuanityAnother', productQuanityAnother)
    axios.post('../admin/intermediateProductAdd.php',
        formData,
        {
            headers: {
                'Content-Type': 'multipart/form-data'
            }

        }
    )
        .then((response) => {
            console.log(productImg);
            console.log(response.data);
            if (response.data) {
                swal({
                    title: "Success",
                    text: "Bạn đã thêm sản phẩm thành công!",
                    icon: "success"
                });
                return
            }
            swal({
                title: "Error",
                text: "Xử lí dữ liệu bị lỗi!",
                icon: "error"
            });
        })
        .catch((error) => {
            swal({
                title: "Error",
                text: "Có lỗi xảy ra chúng tôi sẽ sớm khăc phục!",
                icon: "error"
            });
        })
})

