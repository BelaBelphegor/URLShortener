<?php
class	URLShortener
{
	private		$_base;
	private		$_database;
	private		$_urls;

	public function		__construct($database, $base)
	{
		$this->_database = $database;
		$file_handler = file_get_contents($this->_database);
		$this->_urls = json_decode($file_handler, true);
		$this->_base = $base;
	}

	public function		get_url($code)
	{
		if (isset($this->_urls[$code]) && !(empty($this->_urls[$code])))
			return ($this->_urls[$code]);
		return (false);
	}

	public function		shorten_url($url)
	{
		if (!($this->is_valid_url($url)))
			return (false);
		if (($keys = array_keys($this->_urls, $url)))
		{
			if (isset($keys) && !empty($keys))
				return ($keys[0]);
		}	
		$code = $this->generate_code();
		$this->_urls[$code] = $url;
		$json = json_encode($this->_urls);
		if ((file_put_contents($this->_database, $json)) == false)
		{
			throw new RuntimeException("Unable to write on database.");
			return (false);
		}
		return ($code);
	}

	public function		is_valid_url($url)
	{
		if (filter_var($url, FILTER_VALIDATE_URL) === false && strcmp($url, 'http://www.forbidden-selfies.hol.es') > 0)
		{
			throw new RuntimeException("Invalid URL Format.");
			return (false);
		}
		//$ch = curl_init();
		/*curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if (curl_exec($ch) == false)
		{
			throw new RuntimeException("Invalid URL Target. ");
			return (false);
		}
		curl_close($ch);*/
		return (true);
	}

	public function		generate_code()
	{
		$code = "";
		do
		{
			for ($i = 0; $i < 8; $i++)
			{
				$code .= $this->_base[rand(0, strlen($this->_base) - 1)];
			}
		} while ($this->get_url($code) !== false);
		return ($code);
	}
}
?>
