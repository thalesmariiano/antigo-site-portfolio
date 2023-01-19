var stopTrigger = false

function scrollTrigger({selector, execute, viewTrigger}){
	const triggerPosition = document.querySelector(selector)
							.getBoundingClientRect()

	window.addEventListener("scroll", () => {
		if(window.scrollY > triggerPosition.top/2 && window.scrollY < triggerPosition.bottom){
			if(!stopTrigger){
				execute()
			}
			stopTrigger = true
		}
	})

	if(viewTrigger){
		const trigger = document.createElement("span")
		trigger.style.width = "50px"
		trigger.style.height = "5px"
		trigger.style.background = "red"
		trigger.style.position = "absolute"
		trigger.style.top = `${triggerPosition.y/2}px`
		trigger.style.right = "0px"
		trigger.style.color = "red"
		document.querySelector("body").appendChild(trigger)
	}
}








