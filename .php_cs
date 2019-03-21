<?php
$finder = \PhpCsFixer\Finder::create()
	->files()
	->name('*.php')
	->in([
		'src',
		'tests'
	]);

return \PhpCsFixer\Config::create()
	->setRules([
		'@PSR2' => true,
		'align_phpdoc' => true,
		'binary_operator_spaces' => true,
	])
	->setFinder($finder);
