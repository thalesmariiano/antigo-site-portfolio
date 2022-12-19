
function scrollTrigger({element, execute, viewTrigger}){
	const triggerPosition = document.querySelector(element)
							.getBoundingClientRect()

	window.addEventListener("scroll", () => {
		if(window.scrollY > triggerPosition.top/2 && window.scrollY < triggerPosition.bottom){
			execute()
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

scrollTrigger({
	element: "#about-me-section",
	execute: () => {
		document.querySelector("[data-skill=front-end]").children[0].style.width = "90%"
		setTimeout(() => document.querySelector("[data-skill=back-end]").children[0].style.width = "70%", 500)
		setTimeout(() => document.querySelector("[data-skill=database]").children[0].style.width = "30%", 1000)
	}
})









