
const projects           = document.querySelectorAll(".projects-item")
const form               = document.querySelector("#contact-form")
const error_empty_inputs = document.querySelector("#error-empty-inputs")
const inputs_container   = document.querySelectorAll(".input-container")

const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

projects.forEach(e => {
	if(e.classList[1] == "disabled-item") return

	e.addEventListener("mouseover", () => {
		e.classList.add("selected")
		projects.forEach(item => {
			if(!item.classList[1] || item.classList[1] !== "selected"){
				item.style.filter = "blur(5px)"
			}
		})
	})

	e.addEventListener("mouseout", () => {
		e.classList.remove("selected")
		projects.forEach(item => {
			if(!item.classList[1] || item.classList[1] !== "selected"){
				item.style.filter = "blur(0px)"
			}
		})
	})

})

form.addEventListener("submit", e => {
	e.preventDefault()
	const inputs = [e.srcElement[0], e.srcElement[1], e.srcElement[2], e.srcElement[3]]

	inputs.forEach(input => {
		if(!input.value || input.value == ' '){
			input.style.border = '1px solid red'
			error_empty_inputs.style.display = "initial"

			setTimeout(() => {
				input.style.border = "1px solid #303030"
				error_empty_inputs.style.display = "none"
			}, 4000)
		}else{
			
		}
	})
})

inputs_container.forEach(container => {
	const input = container.children[0]
	const toast = container.children[1]
	input.addEventListener("input", () => {
		validateInput(input.attributes.name.nodeValue, input, toast)
	})

	input.addEventListener("blur", () => {
		if(input.attributes.name.nodeValue == "message") return
		toast.style.display = "none"
	})
})

function validateInput(name, input, toast){

	switch(name){
		case "name":
			if(input.value.match(/[^a-zA-Z\ ]/)){
				toast.style.display = "initial"
				input.style.border = "1px solid red"
				name_input = false
			}else{
				toast.style.display = "none"
				input.style.border = "1px solid #303030"
				name_input = true
			}
			break
		case "email":
			if(!emailRegex.test(String(input.value).toLowerCase())){
				toast.style.display = "initial"
				input.style.border = "1px solid red"
				email_input = false
			}else{
				toast.style.display = "none"
				input.style.border = "1px solid #303030"
				email_input = true
			}
			break
		case "topic":
			if(input.value.match(/[^a-zA-Z0-9\ ]/)){
				toast.style.display = "initial"
				input.style.border = "1px solid red"
				topic_input = false
			}else{
				toast.style.display = "none"
				input.style.border = "1px solid #303030"
				email_input = true
			}
			break
		case "message":
			break
	}
}






