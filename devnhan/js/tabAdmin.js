
const items = document.getElementsByClassName('item');
const tabContents = document.querySelectorAll('.tab-content');
// const removeActiveItem = () => {
//     let tabItems = document.getElementsByClassName('item');
//     let array = Array.from(tabItems)
//     array.forEach(e => {
//         if (e.classList.contains('active')) {
//             e.classList.remove('active');
//         }
//     })
// }
const removeActiveTabContent = () => {
    Array.from(tabContents).map((e) => {
        if (e.classList.contains('active-tab-content')) {
            e.classList.remove('active-tab-content')
        }
    })
}
const handleClick = (event) => {
    // removeActiveItem();
    // event.target.classList.add('active');
    let dataId = event.target.dataset.id;
    removeActiveTabContent();
    Array.from(tabContents).map((e) => {
        if (e.dataset.id == dataId) {
            e.classList.add('active-tab-content');
        }
    })
}
Array.from(items).forEach((item) => {
    item.addEventListener('click', handleClick);
})