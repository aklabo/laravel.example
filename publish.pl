#!/usr/bin/env perl
# -*- coding: utf-8 -*-
#
# Laravel アプリケーションをデプロイします。
#
#

use strict;
use utf8;
use File::Basename;
use File::Spec::Functions;

sub  _println {

	print(@_, "\n");
}

sub _get_yaml_path {

	my $parent = File::Basename::dirname($0);
	my $path = File::Spec::Functions::catfile(
			$parent, 'publish-playbook.yml');
	return $path;
}

sub _publish {

	my ($path) = @_;
	system('/usr/local/bin/ansible-playbook', $path);
}

sub _main {

	binmode(STDIN, ':utf8');
	binmode(STDOUT, ':utf8');
	binmode(STDERR, ':utf8');

	_println('### start ###');
	_println('executing file path: [', $0, ']');
	my $yaml_path = _get_yaml_path();
	_println('yaml file path: [', $yaml_path, ']');

	chdir('tmp');

	_publish($yaml_path);
}

_main(@ARGV);
