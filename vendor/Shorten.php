<?php

namespace Vendor\Model

class Shorten implements JsonSerializable
{
	private 	$title;
	private		$url;
	private		$content_type;
	private		$image;

	public function		__construct()
	{
	}

	public function		getTitle()
	{
		return ($this->title);
	}

	public function		getUrl()
	{
		return ($this->url);
	}

	public function		getContentType()
	{
		return ($this->content_type);
	}

	public function		getImage()
	{
		return ($this->image);
	}

	public function		jsonSerialize()
	{
		// to array
	}
}
