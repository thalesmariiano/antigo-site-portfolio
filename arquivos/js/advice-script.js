const advice_text = document.querySelector("#advice-text")
const url = "https://api.adviceslip.com/advice"

function getAdvice(){
	fetch(url)
		.then(response => response.json())
			.then(data => {
				const slip = data.slip
				advice_text.innerHTML = `"#${slip.id} | ${slip.advice}"`
			})
		.catch(error => {
			console.log(`Error: ${error}`)
		})
}
getAdvice()