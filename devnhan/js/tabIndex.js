
const tabs = document.querySelectorAll(".container__tabs__item__nav");
const panes = document.querySelectorAll(".container__tabs__content__pane");
const tabActive = document.querySelector(".container__tabs__item__nav.active");
// console.log([tabActive])
const line = document.querySelector(".container__tabs__item__line");
// console.log(line);
line.style.left = tabActive.offsetLeft + "px";
line.style.width = tabActive.offsetWidth + "px";
// console.log(tabs, panes)
tabs.forEach((tab, index) => {
  const pane = panes[index];
  tab.onclick = function () {
    // console.log(pane)
    document.querySelector(".container__tabs__item__nav.active").classList.remove("active");
    document.querySelector(".container__tabs__content__pane.active").classList.remove("active");
    line.style.left = this.offsetLeft + "px";
    line.style.width = this.offsetWidth + "px";
    this.classList.add("active");
    // console.log(this)
    pane.classList.add("active");
  };
});
