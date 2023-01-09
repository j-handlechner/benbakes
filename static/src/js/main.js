const btn = document.getElementById("hamburger")

btn.addEventListener("click", () => {
    console.log(btn.ariaLabel)
    if(btn.classList == "closed") {
        btn.classList.remove("closed");
        btn.classList.add("opened");
    }
    else {
        btn.classList.remove("opened");
        btn.classList.add("closed");
    }
})

// for closing the expaneded nav when clicking on a link
const navElements = document.querySelectorAll("#hamburger + ul li a")
for(let el of navElements) {
    el.addEventListener("click", (e) => {
        btn.classList.remove("opened");
        btn.classList.add("closed");
    })
}

document.querySelector("nav > ul").classList.add("transition")