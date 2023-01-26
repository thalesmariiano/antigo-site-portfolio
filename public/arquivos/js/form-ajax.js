
$("#contact-form").submit(e => {
	e.preventDefault()

	const empty_inputs = []

	inputs_container.forEach(container => {
		const input = container.children[0]
		const toast = container.children[1]

		if(!input.value || input.value == " "){
			input.style.border = "1px solid red"
			error_form_toast.style.display = "initial"
			empty_inputs.push(input)

			setTimeout(() => {
				input.style.border = "1px solid #555555"
				error_form_toast.style.display = "none"	
			}, 3000)
		}else{
			input.style.border = "1px solid #9900ff"
		}

		input.addEventListener("input", () => {
			if(!input.value || input.value == " "){
				input.style.border = "1px solid #555555"
			}
		})
	})

	if(!empty_inputs.length){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
			url: "/sendmail",
			type: "post",
			dataType: "json",
			data: $("#contact-form").serialize()
		}).done(response => {
			getResponse(JSON.parse(response))

			inputs_container.forEach(container => {
				container.children[0].value = ""
				container.children[0].style.border = "1px solid #555555"
			})
		})
	}

})

function getResponse(response){
	if(response){
		if(response.sucess){
			sucess_form_toast.style.display = "initial"
			console.log(response)
		}
	}
}
