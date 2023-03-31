
const province = document.querySelector('#province');
const district = document.querySelector('#district');
const ward = document.querySelector('#ward');
const host = 'https://provinces.open-api.vn/api/';
const hostApi = "https://provinces.open-api.vn/api/?depth=1";
// axios.get(hostApi)
//     .then(function (response) {
//         console.log(response);
//     })
//     .catch(function (error) {
//         console.log(error)
//     });

var callApiProvince = api => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data, "province");
            // console.log(response.data);
        });
}
callApiProvince(hostApi);

var callApiDistrict = api => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.districts, "district");
            // console.log(response);
        });
}
var callApiWard = api => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.wards, "ward");
            // console.log(response);
        });
}
var renderData = (array, select) => {
    array.forEach(element => {
        var node = document.createElement("option");
        let code_ = element.code;
        let name_ = element.name;
        // console.log(code_);
        // console.log(name_);
        node.value = code_;
        node.innerText = name_;
        document.querySelector('#' + select).appendChild(node);
    });
}

var nodePro = '<option disabled selected value="">Chọn tỉnh</option>'
province.innerHTML = nodePro;
var nodeDis = '<option disabled selected value="">Chọn huyện</option>'
district.innerHTML = nodeDis;
var nodeWad = '<option disabled selected value="">Chọn xã</option>'
ward.innerHTML = nodeWad;

province.onchange = () => {
    district.innerHTML = '';
    callApiDistrict(host + "p/" + province.value + "?depth=2")
    // console.log(host + "p/" + province.value + "?depth=2");
}
district.onchange = () => {
    ward.innerHTML = '';
    callApiWard(host + "d/" + district.value + "?depth=2")
    // console.log(host + "d/" + district.value + "?depth=2");
}
// https://provinces.open-api.vn/api/p/ ?depth=2
// https://provinces.open-api.vn/api/d/2/ ?depth=2

