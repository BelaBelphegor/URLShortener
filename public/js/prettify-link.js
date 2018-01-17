window.onload = function()
{
	let fragment  = document.createDocumentFragment();
	let meta_title = document.createElement("meta");
	let meta_type = document.createElement("meta");
	let meta_url = document.createElement("meta");
	let meta_img = document.createElement("meta");


	meta_title.setAttribute("property", "og:title");
	meta_title.setAttribute("content", "TyrionURL - Pretty link reduction");
	meta_type.setAttribute("property", "og:type");
	meta_type.setAttribute("content", "website");
	meta_url.setAttribute("property", "og:url");
	meta_url.setAttribute("content", window.location.href);
	meta_img.setAttribute("property", "og:image");
	meta_img.setAttribute("content", "http://www.maxbrownhotels.com/content/user/1/images/Social%20Scene/MB%20Premail%202.jp://www.cffc.org.nz/assets/Uploads/rv-resources-links-icon.png");
	fragment.appendChild(meta_title);
	fragment.appendChild(meta_type);
	fragment.appendChild(meta_url);
	fragment.appendChild(meta_img);
	document.getElementById("head").appendChild(fragment);
}
