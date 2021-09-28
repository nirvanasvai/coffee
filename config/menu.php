<?php
	
	return [
		[
			'title' => 'Главная',
			'route' => 'city',
			'routeIs' => 'city',
		],
		[
			'title' => 'Устройства',
			'route' => 'device',
			'routeIs' => 'device.*',
		],
		[
			'title' => 'Компании',
			'route' => 'company.index',
			'routeIs' => 'device.*',
		],
		[
			'title' => 'Аналитика',
			'route' => 'analytic',
			'routeIs' => 'analytic',
		],
		[
			'title' => 'Выход',
			'route' => 'logout',
		],
	];
