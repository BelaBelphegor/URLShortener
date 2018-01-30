<?php

namespace Vendor\Model

class ShortenAnalytic implements JsonSerializable
{
	private				$id;
	private				$country;
	private				$town;
	private				$timestamp;
	private				$referer;
	private				$user_agent;

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
