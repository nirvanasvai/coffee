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
			'title' => 'Аналитика',
			'route' => 'analytic',
			'routeIs' => 'analytic',
		],
		[
			'title' => 'Города',
			'route' => 'city.index',
			'routeIs' => 'city.*',
		],
		
		[
			'title' => 'Компании',
			'route' => 'company.index',
			'routeIs' => 'device.*',
		],
		
		[
			'title' => 'Ошибки',
			'route' => 'error.index',
			'routeIs' => 'error.*',
		],
		
		[
			'title' => 'Выход',
			'route' => 'logout',
		],
	];
