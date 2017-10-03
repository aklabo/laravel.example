#!/usr/bin/env perl
# -*- coding: utf-8 -*-
#
# Laravel アプリケーションをデプロイします。
#

use strict;
use utf8;
use File::Basename;
use File::Spec::Functions;

sub  _println {

	print(@_, "\n");
}

sub _get_os_name {

	my $stream = undef;
	if (!open($stream, '/etc/os-release')) {
		die($!);
	}
	my $os_name = '';
	while (my $line = <$stream>) {
		if (-1 == index($line, 'NAME')) {
			next;
		}
		if (0 <= index($line, 'Ubuntu')) {
			$os_name = 'Ubuntu';
		}
		elsif (0 <= index($line, 'Debian')) {
			$os_name = 'Debian';
		}
		elsif (0 <= index($line, 'Amazon Linux')) {
			$os_name = 'Amazon Linux';
		}
	}
	close($stream);
	return $os_name;
}

sub _get_yaml_name {

	my $os_name = _get_os_name();
	if ($os_name eq 'Ubuntu') {
		return 'playbook-ubuntu.yml';
	}
	elsif ($os_name eq 'Debian') {
		return 'playbook-debian.yml';
	}
	elsif ($os_name eq 'Amazon Linux') {
		return 'playbook-amazon-linux.yml';
	}
	else {
		return 'playbook.yml';
	}
}

sub _get_yaml_path {

	# スクリプト自身と同じ場所にある playbook.yml を使用します。
	my $parent = File::Basename::dirname($0);
	my $path = File::Spec::Functions::catfile($parent, 'publish-playbook.yml');
	return $path;
}

sub _publish {

	my ($path) = @_;
	system('ansible-playbook', $path);
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
