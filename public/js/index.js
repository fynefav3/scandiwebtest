$(document).ready(function () {
	$.ajax({
		url: "api/products",
		type: "GET",
		//   dataType: 'json',
		success: function (res) {
			var data = JSON.parse(res)
			var html = ""

			for (let index = 0; index < data.length; index++) {
				const element = data[index]

				html +=
					"<div class='col-auto'><div class='card' style='width: 18rem;'><input class='form-check-input m-2 delete-checkbox' type='checkbox' value='" +
					element["id"] +
					"' onclick='addDelete(" +
					element["id"] +
					")'><div class='card-body'><h5 class='card-title' style='font-weight: bold;'>" +
					element["name"] +
					"</h5><p class='card-text'>sku:" +
					element["sku"] +
					"0<br>" +
					element["attribute"] +
					"<br> $" +
					element["price"] +
					"<br></p><a href='#' class='btn btn-danger'>Add to Cart</a></div></div></div>"
			}

			$("#products").html(html)
		},
	})

	$("#delete-product-btn").click(function () {
		var myJson = JSON.stringify(ids)

		$.ajax({
			url: "api/delete",
			type: "POST",
			data: {
				ids: myJson,
			},
			//   dataType: "json",
			success: function (res) {
				ids = []
				location.reload()
			},
		})
	})
})

var ids = []

function addDelete(id) {
	if (ids.includes(id)) {
		const i = ids.indexOf(id)

		ids.splice(i, 1)
	} else {
		ids.push(id)
	}
}
