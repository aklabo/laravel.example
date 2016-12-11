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

	my $path = _get_yaml_path();
	system('/usr/local/bin/ansible-playbook', $path);
}

sub _main {

	binmode(STDIN, ':utf8');
	binmode(STDOUT, ':utf8');
	binmode(STDERR, ':utf8');

	chdir('tmp');

	_publish();
}

_main(@ARGV);
