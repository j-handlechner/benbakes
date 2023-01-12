const btn = document.getElementById("hamburger")

btn.addEventListener("click", () => {
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

const slider_left = document.getElementById("left_slider")
const slider_right = document.getElementById("right_slider")
const container = document.getElementById("slidable-container")
console.log(container)
console.log(container.classList)
let counter = 0

slider_right.addEventListener("click", () => {
    console.log(container.classList)
    
    switch(counter%3){
        case 0:
            console.log("case0 is activated")
            console.log(counter)
            if(container.classList.contains("state2")){container.classList.remove("state2")}
            container.classList.add("state0")
            counter++
            break
        case 1: 
            console.log("case1 is activated")
            console.log(counter)
            container.classList.remove("state0")
            container.classList.add("state1")
            counter++
            break
        case 2: 
            console.log("case2 is activated")
            console.log(counter)
            container.classList.remove("state1")
            container.classList.add("state2")
            counter++
            break
    }
    
})