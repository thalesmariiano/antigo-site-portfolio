
$(function(){
	$("#contact-form").submit(e => {
		e.preventDefault()

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
			console.log(JSON.parse(response))
		})
	})
})