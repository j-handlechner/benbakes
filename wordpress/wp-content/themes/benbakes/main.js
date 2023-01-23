window.addEventListener("load", () => {
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
    const navElements = document.querySelectorAll("#hamburger + div ul li a")
    for(let el of navElements) {
        el.addEventListener("click", (e) => {
            btn.classList.remove("opened");
            btn.classList.add("closed");
        })
    }
    
    document.querySelector("nav > div").classList.add("transition")
    
    const slider_left = document.getElementById("left_slider")
    const slider_right = document.getElementById("right_slider")
    const container = document.getElementById("slidable-container")
    
    let counter = 0
    
    slider_right.addEventListener("click", () => {
        switch(counter%3){
            case 0:
                slider_left.classList.remove("left-disappear")
                slider_left.classList.add("left-appear")
                if(container.classList.contains("state2")){container.classList.remove("state2")}
                container.classList.add("state0")
                counter++
                break
            case 1: 
                slider_right.classList.remove("right-appear")
                slider_right.classList.add("right-disappear")
                container.classList.remove("state0")
                container.classList.add("state1")
                counter++
                break
        }
    })
    
    slider_left.addEventListener("click", () => {
        switch(counter%3){
            case 1: 
                slider_left.classList.remove("left-appear")
                slider_left.classList.add("left-disappear")
                container.classList.remove("state0")
                container.classList.add("state2")
                counter--
                break
            case 2:
                slider_right.classList.remove("right_disappear")
                slider_right.classList.add("right-appear")
                container.classList.remove("state1")
                container.classList.add("state0")
                counter--
                break
        }
    })
});