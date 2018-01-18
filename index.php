<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_WARNING);
require_once('vendor/limonade.php');
require_once('vendor/URLShortener.class.php');

function configure()
{
	$localhost = preg_match('/^localhost(:d)?/', $_SERVER['HTTP_HOST']);
	$env = $localhost ? ENV_DEVELOPMENT : ENV_PRODUCTION;
	option('env', $env);
	option('base_uri', '/');
	option('url_shortener', new URLShortener('urls.json', 'H4CK2BEG0DFORWIM'));

	setlocale(LC_TIME, "fr_FR");
}

function before()
{
	layout('layouts/default_layout.php');
}

/*
* Adding routes for REST request here with dispatch() limonade function.
* Like : dispatch('/', $callback_function);
*/
function 	index_callback()
{
	$URLShortener = option('url_shortener');
	return render('../public/index.html.php');
}

function	shorten_callback()
{
	$URLShortener = option('url_shortener');
	if (isset($_POST['url']) && !empty($_POST['url']))
	{
		$_POST['url'] = htmlspecialchars($_POST['url']);
		try
		{
			if (($code = $URLShortener->shorten_url($_POST['url'])) != false)
			{
				set('origin_url', $_POST['url']);
				set('shortened', 'http://' . $_SERVER['HTTP_HOST'] . '/' . $code);
				return (render('../public/index.html.php'));
			}
		}
		catch (Exception $e)
		{
			set('error', $e->getMessage());
		}
	}
	return (render('../public/index.html.php'));
}

function	code_callback()
{
	$URLShortener = option('url_shortener');
	$code = params('code');
	if (($url = $URLShortener->get_url($code)) != false)
	{
		set('link', $url);
		return (render('../views/redirections.html.php'));
	}
	set('error', "Unable to find URL");
}

dispatch('/', 'index_callback');
dispatch('/:code', 'code_callback');
dispatch_post('/', 'shorten_callback');
run();
?>
