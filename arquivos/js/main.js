
const projects           = document.querySelectorAll(".projects-item")
const form               = document.querySelector("#contact-form")
const error_form_toast   = document.querySelector("#error-form-toast")
const sucess_form_toast  = document.querySelector("#sucess-form-toast")
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
	const errors = []
	const form_inputs = [e.srcElement[0], e.srcElement[1], e.srcElement[2], e.srcElement[3]]

	form_inputs.forEach(input => {
		const input_name = input.attributes.name.nodeValue

		if(formValidation(input_name, input)){
			input.style.border = '1px solid #9900ff'			
		}else{
			error_form_toast.style.display = "initial"
			input.style.border = '1px solid red'
			errors.push({
				input: input,
				error: "error"
			})
			setTimeout(() => {
				error_form_toast.style.display = "none"
			}, 4000)
		}
	})

	if(!errors.length){
		form_inputs.forEach(input => {
			input.value = ""
			input.style.border = "1px solid #303030"
		})
		sucess_form_toast.style.display = "initial"
		setTimeout(() => {
			sucess_form_toast.style.display = "none"
		}, 4000)
	}

})

inputs_container.forEach(container => {
	const input = container.children[0]
	const toast = container.children[1]
	const input_name = input.attributes.name.nodeValue

	input.addEventListener("input", () => {
		if(formValidation(input_name, input)){
			input.style.border = "1px solid #9900ff"
			if(toast) toast.style.display = "none"
		}else{
			input.style.border = "1px solid red"
			toast.style.display = "initial"
		}
	})

	input.addEventListener("blur", () => {
		if(input_name == "message") return
		toast.style.display = "none"
	})
})

function formValidation(name, input){
	const isEmpty = !input.value || input.value == ' '

	if(!isEmpty){
		if(name == "name" || name == "topic"){
			if(!input.value.match(/[^a-zA-Z0-9\ ]/)){
				return true
			}else return false
		}
		if(name == "email"){
			if(emailRegex.test(String(input.value).toLowerCase())){
				return true
			}else return false
		}
		if(name == "message"){
			return true
		}
	}else return false
}


