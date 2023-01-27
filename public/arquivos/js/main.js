
const body               = document.querySelector("body")
const inputs_array       = document.querySelectorAll(".input")
const projects_array     = document.querySelectorAll(".projects-item")

// const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

projects_array.forEach(project => {
	if(project.dataset.enable == "false") return

	project.addEventListener("mouseover", () => {
		project.classList.add("selected")
		projects_array.forEach(item => {
			if(item.classList[1] !== "selected"){
				item.style.filter = "blur(4px)"
			}
		})
	})

	project.addEventListener("mouseout", () => {
		project.classList.remove("selected")
		projects_array.forEach(item => {
			if(item.classList[1] !== "selected"){
				item.style.filter = "blur(0px)"
			}
		})
	})
})

scrollTrigger({
	selector: "#about-me-section",
	execute: () => {
		var prompt_number = 0
		const prompt_line = document.querySelectorAll(".prompt-line")


		setInterval(() => {
			if(prompt_number >= prompt_line.length){
				clearInterval()
			}else{
				prompt_line[prompt_number].style.opacity = 1
			}
			prompt_number++
		}, 400)
		
		about_particles.resumeAnimation()
	}
})

const about_particles = Particles.init({
	selector: "#particles-bg",
	maxParticles: 250,
	color: "#9900ff",

	responsive: [
	    {
	     	breakpoint: 768,
	      	options: {
		        maxParticles: 200
		    }
	    },
	    {
	      	breakpoint: 425,
	      	options: {
		      	maxParticles: 100
	    	}
	    },
	    {
	     	breakpoint: 320,
	      	options: {
	      		maxParticles: 0
	    	}
		}
  	]
})
about_particles.pauseAnimation()

window.onresize = () => {
	closePopup()
}

const stack_popup_container = document.querySelector("#stack-popup-container")
const stack = document.querySelectorAll(".stack-container")

function openPopup(){
	if(window.innerWidth < 870){

		document.querySelectorAll(".skill-box").forEach(skill_box => {

			skill_box.addEventListener("click", () => {
				if(skill_box.dataset.stack == "front"){
					stack[0].style.display = "flex"
					stack[1].style.display = "none"
				}else if(skill_box.dataset.stack == "back"){
					stack[0].style.display = "none"
					stack[1].style.display = "flex"
				}
				body.style.overflow = "hidden"
				stack_popup_container.style.display = "flex"
			})
		})

	}
}
openPopup()

function closePopup(){
	body.style.overflow = "initial"
	stack_popup_container.style.display = "none"
}

const hamburger_button = document.querySelector("#hamburger-button")

hamburger_button.addEventListener("click", () => {
	if(hamburger_button.dataset.state == "close"){
		hamburger_button.classList.add("hamburger-close")
		hamburger_button.dataset.state = "open"

	}else if(hamburger_button.dataset.state == "open"){
		hamburger_button.classList.remove("hamburger-close")	
		hamburger_button.dataset.state = "close"	

	}
})

function getCurrentAge(){
	const date = new Date()
	const currentYear = date.getFullYear()
	const yearOfBirth = 2003

	if(date.getMonth() == 6){
		return currentYear - yearOfBirth
	}else{
		return currentYear - yearOfBirth - 1
	}
}

const idade = document.querySelector("#idade-text")
idade.innerText = getCurrentAge()







