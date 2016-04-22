<?php

	function sort_header_class($key)
	{
		return is_sort($key) ? 'headon' : 'headout';
	}

	function sort_by($key, $label)
	{
		$querystring = purge_querystring($_SERVER['QUERY_STRING']);
		$len = strlen($querystring);
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
		if ($len == 0)
		{
			$querystring = "sort=$key";
		}
		else
		{
			if (isset($_REQUEST['sort']))
			{
				if (isset($_REQUEST['dir']))
				{
					$querystring = preg_replace(array(
							"/page=$page/",
							"/sort={$_REQUEST['sort']}/",
							"/dir={$_REQUEST['dir']}/"),
						array(
							'page=1',
							"sort=$key",
							'dir=' . (is_sort($key) ? other_dir($_REQUEST['dir']) : $_REQUEST['dir'])),
						$querystring);
				}
				else
				{
					$querystring = preg_replace(array(
							"/page=$page/",
							"/sort={$_REQUEST['sort']}/"),
						array(
							"page=1",
							"sort=$key"),
						$querystring) . (is_sort($key) ? "&dir=up" : "");
				}
			}
			else
			{
				$querystring .= "&sort=$key";
			}
		}
		echo '<a class="head" href="?' . $querystring . '">' . $label .
		(is_sort($key) ?
			(isset($_REQUEST['dir']) && $_REQUEST['dir'] == 'up' ? '<img class="arr" src="/img/sortup.png" hspace="5" />' : '<img class="arr" src="/img/sortdown.png" hspace="5" />') :
			'') .
		'</a>';
	}

	function is_sort($key)
	{
		return (isset($_REQUEST['sort']) && $key == $_REQUEST['sort']);
	}

	function other_dir($dir)
	{
		return ($dir == 'up' ? 'down' : 'up');
	}

	function set_default_dir($dir)
	{
		if (!isset($_REQUEST['dir']))
		{
			$_REQUEST['dir'] = $dir;
		}
	}

	function purge_querystring($qs)
	{
		$pairs = explode('&', $qs);
		$newpairs = array();
		foreach ($pairs as $pair)
		{
			if (!empty($pair))
			{
				list($key, $value) = explode('=', $pair);
				if (in_array($key, array('action', 'controller', 'id')))
				{
					continue;
				}
				$newpairs[] = $pair;
			}
		}
		return implode('&', $newpairs);
	}
?>
