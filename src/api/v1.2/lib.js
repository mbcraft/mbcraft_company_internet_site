

//help from https://stackoverflow.com/users/4742733/aakash
//https://stackoverflow.com/questions/588040/window-onload-vs-document-onload - thanks!

//help from https://stackoverflow.com/users/431780/greg
//https://stackoverflow.com/questions/4257545/how-can-i-check-in-javascript-if-a-dom-element-contains-a-class

//https://gomakethings.com/why-i-still-use-xhr-instead-of-the-fetch-api/#the-fetch-api-is-a-failed-promise

//also thanks to www.w3schools.com


function loadPhilosophy(address,element) {
	var xhr = new XMLHttpRequest();

	// Setup our listener to process compeleted requests
	xhr.onreadystatechange = function () {

		// Only run if the request is complete
		if (xhr.readyState !== 4) return;

		// Process our return data
		if (xhr.status >= 200 && xhr.status < 300) {
			// What do when the request is successful

			element.innerHTML = xhr.responseText;
		} else {
			// What to do when the request has failed
			console.log('error', xhr);
		}

	};

	// Create and send a GET request
	// The first argument is the post type (GET, POST, PUT, DELETE, etc.)
	// The second argument is the endpoint URL
	xhr.open('GET', address);
	xhr.send();
}

window.addEventListener("load",function(e) {

	var el_list = document.getElementsByClassName("embed_philosophy");

	for (let i=0;i<el_list.length;i++) {

		var element = el_list[i];

		var element_id = element.id;

		var language = element.classList.contains("it") ? "it" : "en";
		var server = element.classList.contains("mirror") ? "mbcraftlab" : "mbcraft";

		var address = "https://www."+server+".it/api/v1.2/get_philosophy_content_html.php?language="+language+"&element_id="+element_id+"&embed=true";

		loadPhilosophy(address,element);

	}	

});

