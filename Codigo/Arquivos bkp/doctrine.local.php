<?php
return array(
		'doctrine' => array(
				'connection' => array(
						'orm_default' => array(
								'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
								'params' => array(
										'user' => 'developer',
										'password' => '123456',
								),
						),
				)
		));