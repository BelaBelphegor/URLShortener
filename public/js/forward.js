function	forward()
{
	let a_href = document.getElementById('forward_link').getAttribute("href");
	window.location.href = a_href;
}

setTimeout(forward, 3000);
