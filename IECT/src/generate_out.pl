#!/usr/bin/perl

# Lanzar los calculos de MOPAC2016 sobre un procesador N.
# Ejecucion: perl generate_out.pl $job_dir $n_proc &
# 
# Moises A. Rojas - Apr 2016
# Claudio I. Quevedo - March 2019

use strict;
use DBI;
#use lib('/home/IECT/lib');
#use conf;
use lib('/home/IECT/lib/conf.pm');
#my $db = DBI->connect("dbi:Pg:dbname='$conf::database';host=$conf::ip",$conf::user,$conf::pass);
my $db = DBI->connect("dbi:Pg:dbname='energy';host=localhost","iect2019","asd");
my $dir = $ARGV[0];
my $dir_mop = $dir."mop/";
my $p = $ARGV[1];

# Leer archivo procN con ficheros mop
my $proc = `cat proc$p`;
system("rm -f proc$p"); # Borrar !
my @mops = split(/,/, $proc);
my $total = scalar(@mops);

my $i = 1;
foreach my $mop (@mops) {
	# Ejecutar MOPAC2016.exe para cada mop
	system("/opt/mopac/MOPAC2016.exe ".$dir_mop.$mop);
	
	# Actualizar procentaje de avance de la cola
	my $average = ($i/$total)*100;
	$i++;
	
	# Actualizar avance en la maquina
	my $q = $db->prepare ("UPDATE machine SET p$p=$average WHERE name='fabian'");
	$q->execute;
	$q->finish;
}

$db->disconnect;
