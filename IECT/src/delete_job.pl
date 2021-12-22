#!/usr/bin/perl

# Borra un trabajo y todos sus resultados dado un identificador.
# Ejecucion: perl delete_job.pl $job_id
# 
# Moises A. Rojas - Apr 2016
# Claudio I. Quevedo - March 2019

use strict;
use warnings;
#use lib('/home/IECT/lib');
use lib('/home/IECT/lib/conf.pm');
use DBI;
#use conf;

#my $db = DBI->connect("dbi:Pg:dbname='$conf::database';host=$conf::ip",$conf::user,$conf::pass);
my $db = DBI->connect("dbi:Pg:dbname='energy';host=localhost","iect2019","asd");
my $id = $ARGV[0];
if (@ARGV != 1) {
	print "\n\tUsage: perl $0 job_id\n\n";
	exit;
}

my $q = $db->prepare("SELECT * FROM data.job WHERE id_job=$id");
$q->execute;
my $n = $q->rows;
$q->finish;

if ($n == 1) {
	print "Deleting job...\n";
	my $q1 = $db->prepare("DELETE FROM data.job WHERE id_job=$id");
	$q1->execute;
	$q1->finish;
	print "Deleting top PDBs...\n";
	my $q2 = $db->prepare("DELETE FROM data.pdb_100 WHERE id_job=$id");
	$q2->execute;
	$q2->finish;
	print "Deleting all results...\n";
	my $q3 = $db->prepare("DELETE FROM data.result WHERE id_job=$id");
	$q3->execute;
	$q3->finish;
}
else {
	print "No job found with id $id.\n";
}

$db->disconnect;
