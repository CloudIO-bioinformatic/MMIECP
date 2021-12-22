#!/usr/bin/perl

use strict;
use warnings;
use DBI;
use lib('/home/dendrimer1/test_vhts/lib');
use conf;

my $db = DBI->connect("dbi:Pg:dbname='$conf::database2';host=$conf::ip", $conf::user, $conf::pass) or die "UN PROBLEMA AQUI\n";

my $q = "SELECT distinct(table_name) FROM information_schema.columns WHERE table_schema='structures' ORDER BY table_name ASC";
my $exec = $db->prepare($q);
$exec->execute();
my $n = $exec->rows;

if ($n == 0) {
	print "FATAL: $n tables\n";
	exit;
}

print "OK: $n tables\n";
while (my @row = $exec->fetchrow_array()) {
	print $row[0]."\n";
}
$exec->finish();

$db->disconnect();
