<?php
session_start();
if($_SESSION['existe']==""){
  session_start();
  session_unset();
  unset($_SESSION);
  $_SESSION=array();
  session_destroy();
  header("Location:../vista/iect.php");
}
?>

<!DOCTYPE html>
<head>
  <!--<meta charset="utf-8">-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>IECT</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- archivos CSS, los estilos -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css"  />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="icono-fabi.jpg" />
  <link rel="stylesheet" type="text/css" href="../css/easyui.css">
  <link rel="stylesheet" type="text/css" href="../css/icon.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/table.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="../css/periodic-table.css"/>
  <style type="text/css">
  .modal-lg {
  max-width: 55% !important;
  }
  .preloader {
  width: 30px;
  height: 30px;
  border: 5px solid #eee;
  border-top: 5px solid #666;
  border-radius: 50%;
  animation-name: girar;
  animation-duration: 2s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  }
  @keyframes girar {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }
  </style>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm bg-light navbar-dark">
    <ul class="nav justify-content-center">


    </ul>

    <ul class="navbar-nav ml-auto">
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <h1 align="center"><b>RATIONAL DESIGN AND STUDY OF POLYMERS RELATED TO COMPOUNDS OF
        INDUSTRIAL INTEREST USING A HYBRID STRATEGY IN-SILICONE / EXPERIMENTAL</b></h1>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <li class="nav-item">

          <button  type="button" class="btn btn-danger" onclick="logout();"><b>Log-out</b></button>
      </li>
    </ul>
  </nav>


  <div class="container">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">

    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#menu1" >Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Service</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab"  href="#menu3">Wiki</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
        <div id="menu1" class="container tab-pane active"><br>
          <h1>Bioinformatics</h1>
                        <p>In	 recent	 decades,	 a	 number	 of	 relevant	 pollutants	 compounds	 have	 been	 identified,	 which	 adversely
              affect	 agricultural	 and	 industrial	 processes.	 These	 include:	 organophosphorus	 compounds	 that	 cause
              direct	 toxicity	 to	 humans	 due	 to	 misuse	 and	 exposure	 of	 these	 compounds	 in	 agriculture,	 also
              haloanisoles	and	polyphenols	that	cause	serious	damage	to	the	organoleptic	and	sensory	properties	of
              wines	and	spirits.

              This	 problem	 requieres	 to	 be	 studied	 and	 solved	 using	 scientific	 research	 and	 technological
              development,	 which	 allows	 design	 and	 implement	 systems	 or	 products	 (safe	 for	 the	 environment	 and
              human)	with	high	affinity	for	these	targets,	which	allow	selectively	extract	them	from	the	contaminated
              environment.


              Considering	the	problem	described,	this	project	proposed	like	objective,	rationally	design		and	study	of
              the	affinity	of	polimeric	macromolecules	by	the	pollutans	compounds	of	interest	in	the	agroindustry,
              using	an	in-silico/experimental	hybrid	strategy.

              To	carry	out	the	objective	and	implement	an	efficient	solution	was	proposed	a	multidisciplinary	hybrid
              strategy	 involving	 synergies	 between	 bioinformatics,	 chemistry	 and	 nanotechnology.	 The	 involved
              methodology	consisted	of:	the	development	and	implementation	of	a	computational	tool	for	calculating
              large-scale	intermolecular	interaction	energies	for	the	polymer-target	complexes	through		semiempirical
              quantum	 mechanical	 methods	 (SQM.	 	 Furthemore,	 	 the	 rational	 design	 of	 polymers	 	 and
              characterization	 of	 their	 interactions	 with	 the	 different	 targets	 using	 studies	 of	 molecular	 dynamics
              simulations.	Through	experimental	studies	and	chromatographic	techniques	was	be	able	to	estimate	the
              affinity	and	capture	ability	that	have	the	different	designed	polymers	by	the	targets.

              The	final	results	of	this	thesis	showed	that,	PAMAM	G4	dendrimer	functionalized	with	the	amino	acid
              asparagine,	achievement	efficiently	catch	the	organophosphate	methamidophos,	therefore,	it	may	be	a
              good	 candidate	 for	 a	 nano-detoxification	 process.	 The	 same	 PAMAM,	 but	 smaller	 generation	 (G0),
              functionalized	 with	 methanimine	 derivatives	 showed	 efficiency	 to	 retain	 lactate	 and	 citrate	 (organic
              ions).	PVPP,	P-NIOA	and	PANI-EB	polymers	showed	selective	affinity	for	polyphenols	and	haloanisoles	in
              wine	and	whiskey.

              Therefore,	the	in-silico	/	experimental	strategy	implemented	in	this	thesis,	allowed	rigorously	study	of
              the	behavior	of	different	polymers	as	candidates	for	efficiently	and	selectively	remove	the	agroindustrial
              targets	studied.	</p><button  type="button" class="btn btn-danger" onclick="logout();"><b>Log-out</b></button>

        </div>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <div id="menu2" class="container tab-pane fade">
          <br></br>
          <h3>IECT</h3>
          <div class="container" id="container-formulario">
            <form class="needs-validation" id="form-iect" role="form" method="post" enctype="multipart/form-data" novalidate>
                <div class="row">
                  <div class="col order-1" style="border: 1px gray groove;">

                  <div class="col-md-12 mb-12">
                    <label for="job_name">Job name</label>
                    <input style="font-size:12px;font-type:Arial;" type="text" class="form-control" id="job_name" name="job_name" placeholder="Job name" required>
                    <div class="invalid-feedback">
                      Please provide a valid job name.
                    </div>
                  </div>

                  <div class="col-md-12 mb-12">

                  <!--<div class="custom-file" id="pdb_monomer" lang="es">
                    <input type="file" class="custom-file-input" id="pdb_monomer" name="pdb_monomer" aria-describedby="fileHelp" required>
                    <div class="invalid-feedback">
                      Please provide a valid monomer pdb.
                    </div>
                    <label class="custom-file-label" for="pdb_monomer">
                       PDB monomer file...
                    </label>
                  </div>
                  <div class="custom-file" id="pdb_drug" lang="es">
                    <input type="file" class="custom-file-input" id="pdb_drug" name="pdb_drug" aria-describedby="fileHelp" required>
                    <div class="invalid-feedback">
                      Please provide a valid drug pdb.
                    </div>
                    <label class="custom-file-label" for="pdb_drug">
                       PDB drug file...
                    </label>
                  </div>-->

                  </div>
                  <div class="col-md-12 mb-12">
                    <label for="pdb"> Input text of PDB files </label>
                    <textarea style="font-size:12px;font-type:Arial;" class="form-control" name="pdb_monomer" id="pdb_monomer" rows="3" placeholder="PDB molecule 1"></textarea>
                    <div class="invalid-feedback">
                      Please provide a valid PDB molecule 1 text.
                    </div>
                  </br>
                    <textarea style="font-size:12px;font-type:Arial;" class="form-control" name="pdb_drug" id="pdb_drug" rows="3" placeholder="PDB molecule 2"></textarea>
                    <div class="invalid-feedback">
                      Please provide a valid PDB molecula 2 text.
                    </div>
                  </div>
                  <div class="col-md-12 mb-12">
                    <label for="gc">Geometrical center</label>
                    <input style="font-size:12px;font-type:Arial;" type="text" class="form-control" id="gc_monomer" name="gc_monomer" placeholder="Molecule 1" required>
                    <div class="invalid-feedback">
                      Please provide a valid geometrical center for molecule 1.
                    </div>
                    <br>
                    <input style="font-size:12px;font-type:Arial;" type="text" class="form-control" id="gc_drug" name="gc_drug" placeholder="Molecule 2" required>
                    <div class="invalid-feedback">
                      Please provide a valid geometrical center for molecule 2.
                    </div>
                  </div>
                  <div class="col-md-12 mb-12">
                    <label for="gc">Sampling size</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sampling_size" id="sampling_size1" value="1000" required>
                      <label class="form-check-label" for="s_size1">
                        1000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sampling_size" id="sampling_size2" value="10000" required>
                      <label class="form-check-label" for="s_size2">
                        10000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sampling_size" id="sampling_size3" value="100000" required>
                      <label class="form-check-label" for="s_size3">
                        100000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sampling_size" id="sampling_size4" value="1000000" required>
                      <label class="form-check-label" for="s_size4">
                        1000000
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  name="sampling_size" id="sampling_size5" value="custom" required>
                      <label class="form-check-label" for="s_size5">
                        <input style="font-size:12px;font-type:Arial;" type="text" class="form-control" name="sampling_size_custom" id="sampling_size_custom" placeholder="Custom sampling size">
                      </label>
                      <div class="invalid-feedback">
                        Please provide a valid sampling size.
                      </div>
                    </div>

                  </div>



                  <div class="col-md-12 mb-12">
                    <label for="gc">Parametric method</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="parametric_method" id="p_method1" value="PM6" required>
                      <label class="form-check-label" for="p_method1">
                        PM6
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="parametric_method" id="p_method2" value="PM6-D">
                      <label class="form-check-label" for="p_method2">
                        PM6-D
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="parametric_method" id="p_method3" value="PM6-H">
                      <label class="form-check-label" for="p_method3">
                        PM6-H
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="parametric_method" id="p_method4" value="PM6-DH2">
                      <label class="form-check-label" for="p_method4">
                        PM6-DH2
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="parametric_method" id="p_method5" value="PM6-DH+">
                      <label class="form-check-label" for="p_method5">
                        PM6-DH+
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="parametric_method" id="p_method6" value="PM7">
                      <label class="form-check-label" for="p_method6">
                        PM7
                      </label>
                      <div class="invalid-feedback">
                        Please provide a valid parametric method.
                      </div>
                    </div>

                  </div>

                  <div class="form-row">
                    <div class="col-md-4 mb-4">

                      <label for="job_name">Molecule 1 charge</label>
                      <input type="text" class="form-control" id="monomer_charge" name="monomer_charge" placeholder="" maxlength="3" size="2" required>
                      <div class="invalid-feedback">
                        Please provide a valid Monomer charge.
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">

                      <label for="job_name">Molecule 2 charge</label>
                      <input type="text" class="form-control" id="drug_charge" name="drug_charge" placeholder="" maxlength="3" size="2" required>
                      <div class="invalid-feedback">
                        Please provide a valid Drug charge.
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">

                      <label for="job_name">System charge</label>
                      <input type="text" class="form-control" id="system_charge" name="system_charge" placeholder="" maxlength="3" size="2" required>
                      <div class="invalid-feedback">
                        Please provide a valid System charge.
                      </div>
                    </div>
                  </div>


                  <div class="form-row">
                    <div class="col-md-4 mb-4">
                      <label for="gc">Molecule 1 multiplicity type</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="monomer_multiplicity" id="m_multiplicity1" value="Singlet" required>
                        <label class="form-check-label" for="m_multiplicity1">
                          Singlet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="monomer_multiplicity" id="m_multiplicity2" value="Doublet">
                        <label class="form-check-label" for="m_multiplicity2">
                          Doublet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="monomer_multiplicity" id="m_multiplicity3" value="Triplet">
                        <label class="form-check-label" for="m_multiplicity3">
                          Triplet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="monomer_multiplicity" id="m_multiplicity4" value="Quartet">
                        <label class="form-check-label" for="m_multiplicity4">
                          Quartet
                        </label>
                      </div>
                    </div>

                    <div class="col-md-4 mb-4">
                      <label for="gc">Molecule 2 multiplicity type</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="drug_multiplicity" id="d_multiplicity1" value="Singlet" required>
                        <label class="form-check-label" for="d_multiplicity1">
                          Singlet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="drug_multiplicity" id="d_multiplicity2" value="Doublet">
                        <label class="form-check-label" for="d_multiplicity2">
                          Doublet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="drug_multiplicity" id="d_multiplicity3" value="Triplet">
                        <label class="form-check-label" for="d_multiplicity3">
                          Triplet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="drug_multiplicity" id="d_multiplicity4" value="Quartet">
                        <label class="form-check-label" for="d_multiplicity4">
                          Quartet
                        </label>
                      </div>
                    </div>

                    <div class="col-md-4 mb-4">
                      <label for="gc">System multiplicity type</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="system_multiplicity" id="s_multiplicity1" value="Singlet" required>
                        <label class="form-check-label" for="s_multiplicity1">
                          Singlet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="system_multiplicity" id="s_multiplicity2" value="Doublet">
                        <label class="form-check-label" for="s_multiplicity2">
                          Doublet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="system_multiplicity" id="s_multiplicity3" value="Triplet">
                        <label class="form-check-label" for="s_multiplicity3">
                          Triplet
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="system_multiplicity" id="s_multiplicity4" value="Quartet">
                        <label class="form-check-label" for="s_multiplicity4">
                          Quartet
                        </label>
                      </div>
                    </div>
                  </div>


              </div>
              <div class="col order-12" style="border: 1px gray groove;">
                <div class="col-md-6 mb-6">
                  <label for="p_number">Processors number available</label>
                  <input style="font-size:12px;font-type:Arial;" type="text" class="form-control" id="p_number" name="p_number" value="14" placeholder="14" maxlength="2" size="2" disabled>
                  <div class="invalid-feedback">
                    Please provide a valid processors number.
                  </div>
                </div>

                <div class="col-md-6 mb-6">
                  <label for="o_number">Outputs number (PDB files, ouputs must be equal to or less than sampling size)</label>
                  <input style="font-size:12px;font-type:Arial;" type="text" class="form-control" id="o_number" name="o_number" placeholder="Outputs number" maxlength="5" size="2" required>
                  <div class="invalid-feedback">
                    Please provide a valid outputs number.
                  </div>
                </div>

                <div class="col-md-8 mb-8">
                  <label for="algorithm">Evaluation criteria of algorithm</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="algorithm" id="algorithm1" value="S" required>
                    <label class="form-check-label" for="algorithm1">
                      Simple Average
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="algorithm" id="algorithm2" value="M">
                    <label class="form-check-label" for="algorithm2">
                      Metropolis
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="algorithm" id="algorithm3" value="A">
                    <label class="form-check-label" for="algorithm3">
                      Both
                    </label>
                    <div class="invalid-feedback">
                      Please provide a valid evaluation criteria of algorithm.
                    </div>
                  </div>
                </div>

                <div class="col-md-8 mb-8">
                  <label for="value_energy">Value of energy calculation</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="value_energy" id="value_energy1" value="T" required>
                    <label class="form-check-label" for="value_energy1">
                      Total energy (Electronic + Molecular)
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="value_energy" id="value_energy2" value="F">
                    <label class="form-check-label" for="value_energy2">
                      Enthalpy of formation (DHf)
                    </label>
                    <div class="invalid-feedback">
                      Please provide a valid value of energy calculation.
                    </div>
                  </div>
                </div>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

                <div class="col-md-8 mb-8">
                  <!--<input id="elements" name="elements" size="30" type="hidden">-->
                  	<!-- Default elements table ! -->
                  	<table cellpadding="1" cellspacing="1" border="1">
                  		<tr height="25px" style="background-color:silver;">
                  			<th width="250px">Element (default vdW radius)</th>
                  		</tr>
                  		<tr>
                        <div class="form-check">
                  			<td><input type="checkbox" id="el_O"  checked> Oxygen (rad: 1.4)</td>
                        </div>
                      </tr>
                  		<tr>
                  			<td><input type="checkbox" id="el_C"  checked> Carbon (rad: 1.7)</td>
                  		</tr>
                  		<tr>
                  			<td><input type="checkbox" id="el_S"  checked> Sulfur (rad: 1.85)</td>
                  		</tr>
                  		<tr>
                  			<td><input type="checkbox" id="el_N"  checked> Nitrogen (rad: 1.5)</td>
                  		</tr>
                  		<tr>
                  			<td><input type="checkbox" id="el_P" > Phosphorus (rad: 1.9)</td>
                  		</tr>
                  		<tr>
                  			<td><input type="checkbox" id="el_Cl" > Chlorine (rad: 1.75)</td>
                  		</tr>
                  		<tr>
                  			<td><input type="checkbox" id="el_H"  checked> Hydrogen (rad: 1.2)</td>
                  	</table>
                    <div id="new_table"></div>
                    <!-- List of elements ! -->

                    <br>
                    <button class="btn btn-success" onclick="open_periodic_table();" type="button">Add element</button><br><br>
                </div>

<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
                <br></br>
                <button class="btn btn-primary" onclick="agregarJob();" type="button">Continue</button>
                &emsp;&emsp;
                <button class="btn btn-default" onclick="resetForm();" type="button">Reset</button>

              </div>

            </div><!--div row-->

          </form><!--form-iect-->
          </div>
          <div class="container" id="container-monitorizacion" style="display: none;">
            <div align="center" id="titulo-monitorizacion">Wait...</div>
            <div align="center" id="loader"><div class="preloader"></div></div>


            <div class="progress">
              <div id="barra-total" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width:0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span id="porcentaje_barra"></span></div>
            </div>
            <br>
            <br>  
              <div style="border: 1px gray groove;" align="center" class="container col-md-8 mb-8" id="use_cpu">Cpu status<br>
              <div style="font-size:10px;font-type:Arial;">Processor 1: <span id="p1"></span>%  Processor 8: <span id="p8"></span>%</div>
              <div style="font-size:10px;font-type:Arial;">Processor 2: <span id="p2"></span>%  Processor 9: <span id="p9"></span>%</div>
              <div style="font-size:10px;font-type:Arial;"> Processor 3: <span id="p3"></span>%  Processor 10: <span id="p10"></span>%</div>
              <div style="font-size:10px;font-type:Arial;"> Processor 4: <span id="p4"></span>%  Processor 11: <span id="p11"></span>%</div>
              <div style="font-size:10px;font-type:Arial;"> Processor 5: <span id="p5"></span>%  Processor 12: <span id="p12"></span>%</div>
              <div style="font-size:10px;font-type:Arial;"> Processor 6: <span id="p6"></span>%  Processor 13: <span id="p13"></span>%</div>
              <div style="font-size:10px;font-type:Arial;"> Processor 7: <span id="p7"></span>%  Processor 14: <span id="p14"></span>%</div>
              </div>

          </div><!--div monitorizacion-->
        </div><!--div menu2-->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

        <div id="menu3" class="container tab-pane fade"><br>
          COMO USAR EL SOFTWARE?
          <!-- workspace  profesores-->
          <div id="container-asistencia" class="container-fluid" style="display: none;" >
            <div class="row">
              <div class="col-lg12">
                <div class="panel panel-info">
                  <div id="panel-body-asistencia" class="panel-body">
                    <div id="estadistica-asistencia">

                    </div>

                    <div class="table-responsive">
                      <table id="dataTable_asistencia" class="display table compact nowrap"></table>
                    </div>

                    <canvas id="pie-chart-asistencia" width="800" height="400"></canvas>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- modals-->
       <div class="modal"  id="modal-periodictable" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-centered modal-lg">
           <div class="modal-content">
             <!-- header modal -->
             <div class="modal-header">

               <h4 class="modal-title"><b>Periodic table</b></h4>
               <button type="button" onclick="closeperiodictable();" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span></button>
             </div>

             <!-- body modal-->
             <div class="modal-body">
<!--PERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLE-->
<!--PERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLE-->
<!--PERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLE-->


                        <div id="main_container" >
                          <div id="group_bar">
                            <div class="group_numbers">
                              <div class="group_number" title="Group 1: Alkali Metals">1</div>
                              <div class="group_number" title="Group 2: Alkaline Earth Metals">2</div>
                              <div class="group_number group_3" title="Group 3">3</div>
                              <div class="group_number" title="Group 4">4</div>
                              <div class="group_number" title="Group 5">5</div>
                              <div class="group_number" title="Group 6">6</div>
                              <div class="group_number" title="Group 7: Halogens">7</div>
                              <div class="group_number" title="Group 0: Noble Gases">0</div>
                              <div class="clear"></div>
                            </div>
                          </div>
                          <div id="legend">
                            <div id="legend_transparent"></div>
                            <div id="legend_categories">
                              <div class="legend_category" onmouseover="showElementGroups('a');" onmouseout="resetElementStates();">
                                <span class="legend_block alkaliMetal">&nbsp;</span>
                                <span class="legend_group-name"><strong>ALKALI METALS</strong></span>
                              </div>
                              <div class="legend_category" onmouseover="showElementGroups('ae');" onmouseout="resetElementStates();">
                                <span class="legend_block alkalineEarthMetal">&nbsp;</span>
                                <span class="legend_group-name"><strong>ALKALINE EARTH METALS</strong></span>
                              </div>
                              <div class="legend_category" onmouseover="showElementGroups('t');" onmouseout="resetElementStates();">
                                <span class="legend_block transitionMetal">&nbsp;</span>
                                <span class="legend_group-name"><strong>TRANSITION METALS</strong> (d-BLOCK)</span>
                              </div>
                              <div class="legend_category" onmouseover="showElementGroups('om');" onmouseout="resetElementStates();">
                                <span class="legend_block otherMetal">&nbsp;</span>
                                <span class="legend_group-name"><strong>OTHER METALS</strong></span>
                              </div>
                              <div class="legend_category" onmouseover="showElementGroups('nm');" onmouseout="resetElementStates();">
                                <span class="legend_block nonMetal">&nbsp;</span>
                                <span class="legend_group-name"><strong>NON-METALS</strong></span>
                              </div>
                              <div class="legend_category" onmouseover="showElementGroups('h');" onmouseout="resetElementStates();">
                                <span class="legend_block halogen">&nbsp;</span>
                                <span class="legend_group-name"><strong>HALOGENS</strong> (NON-METALS)</span>
                              </div>
                              <div class="legend_category" onmouseover="showElementGroups('ng');" onmouseout="resetElementStates();">
                                <span class="legend_block nobleGas">&nbsp;</span>
                                <span class="legend_group-name"><strong>NOBLE GASES</strong> (NON-METALS)</span>
                              </div>
                              <div class="legend_category" onmouseover="showElementGroups('otm');" onmouseout="resetElementStates();">
                                <span class="legend_block otherTrans">&nbsp;</span>
                                <span class="legend_group-name"><strong>OTHER TRANSITION METALS</strong> (f-BLOCK)</span>
                              </div>
                              <div class="clear"></div>
                            </div>
                          </div>

                          <div id="element_large_container">
                            <div id="element_id_1" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Hydrogen"></a><div class="element_large_full-name">Hydrogen</div><div class="element_large_atomic-number cat_nonMetal">1</div><div class="element_large_mass-number">1.0</div><div class="element_large_symbol cat_nonMetal">H</div></div><div id="element_id_2" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Helium"></a><div class="element_large_full-name">Helium</div><div class="element_large_atomic-number cat_nobleGas">2</div><div class="element_large_mass-number">4.0</div><div class="element_large_symbol cat_nobleGas">He</div></div><div id="element_id_3" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Lithium"></a><div class="element_large_full-name">Lithium</div><div class="element_large_atomic-number cat_alkaliMetal">3</div><div class="element_large_mass-number">6.9</div><div class="element_large_symbol cat_alkaliMetal">Li</div></div><div id="element_id_4" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Beryllium"></a><div class="element_large_full-name">Beryllium</div><div class="element_large_atomic-number cat_alkalineEarthMetal">4</div><div class="element_large_mass-number">9.0</div><div class="element_large_symbol cat_alkalineEarthMetal">Be</div></div><div id="element_id_5" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Boron"></a><div class="element_large_full-name">Boron</div><div class="element_large_atomic-number cat_nonMetal">5</div><div class="element_large_mass-number">10.8</div><div class="element_large_symbol cat_nonMetal">B</div></div><div id="element_id_6" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Carbon"></a><div class="element_large_full-name">Carbon</div><div class="element_large_atomic-number cat_nonMetal">6</div><div class="element_large_mass-number">12.0</div><div class="element_large_symbol cat_nonMetal">C</div></div><div id="element_id_7" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Nitrogen"></a><div class="element_large_full-name">Nitrogen</div><div class="element_large_atomic-number cat_nonMetal">7</div><div class="element_large_mass-number">14.0</div><div class="element_large_symbol cat_nonMetal">N</div></div><div id="element_id_8" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Oxygen"></a><div class="element_large_full-name">Oxygen</div><div class="element_large_atomic-number cat_nonMetal">8</div><div class="element_large_mass-number">16.0</div><div class="element_large_symbol cat_nonMetal">O</div></div><div id="element_id_9" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Fluorine"></a><div class="element_large_full-name">Fluorine</div><div class="element_large_atomic-number cat_halogen">9</div><div class="element_large_mass-number">19.0</div><div class="element_large_symbol cat_halogen">F</div></div><div id="element_id_10" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Neon"></a><div class="element_large_full-name">Neon</div><div class="element_large_atomic-number cat_nobleGas">10</div><div class="element_large_mass-number">20.2</div><div class="element_large_symbol cat_nobleGas">Ne</div></div><div id="element_id_11" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Sodium"></a><div class="element_large_full-name">Sodium</div><div class="element_large_atomic-number cat_alkaliMetal">11</div><div class="element_large_mass-number">23.0</div><div class="element_large_symbol cat_alkaliMetal">Na</div></div><div id="element_id_12" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Magnesium"></a><div class="element_large_full-name">Magnesium</div><div class="element_large_atomic-number cat_alkalineEarthMetal">12</div><div class="element_large_mass-number">24.3</div><div class="element_large_symbol cat_alkalineEarthMetal">Mg</div></div><div id="element_id_13" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Aluminium"></a><div class="element_large_full-name">Aluminium</div><div class="element_large_atomic-number cat_otherMetal">13</div><div class="element_large_mass-number">27.0</div><div class="element_large_symbol cat_otherMetal">Al</div></div><div id="element_id_14" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Silicon"></a><div class="element_large_full-name">Silicon</div><div class="element_large_atomic-number cat_nonMetal">14</div><div class="element_large_mass-number">28.1</div><div class="element_large_symbol cat_nonMetal">Si</div></div><div id="element_id_15" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Phosphorus"></a><div class="element_large_full-name">Phosphorus</div><div class="element_large_atomic-number cat_nonMetal">15</div><div class="element_large_mass-number">31.0</div><div class="element_large_symbol cat_nonMetal">P</div></div><div id="element_id_16" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Sulfur"></a><div class="element_large_full-name">Sulfur</div><div class="element_large_atomic-number cat_nonMetal">16</div><div class="element_large_mass-number">32.1</div><div class="element_large_symbol cat_nonMetal">S</div></div><div id="element_id_17" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Chlorine"></a><div class="element_large_full-name">Chlorine</div><div class="element_large_atomic-number cat_halogen">17</div><div class="element_large_mass-number">35.5</div><div class="element_large_symbol cat_halogen">Cl</div></div><div id="element_id_18" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Argon"></a><div class="element_large_full-name">Argon</div><div class="element_large_atomic-number cat_nobleGas">18</div><div class="element_large_mass-number">39.9</div><div class="element_large_symbol cat_nobleGas">Ar</div></div><div id="element_id_19" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Potassium"></a><div class="element_large_full-name">Potassium</div><div class="element_large_atomic-number cat_alkaliMetal">19</div><div class="element_large_mass-number">39.1</div><div class="element_large_symbol cat_alkaliMetal">K</div></div><div id="element_id_20" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Calcium"></a><div class="element_large_full-name">Calcium</div><div class="element_large_atomic-number cat_alkalineEarthMetal">20</div><div class="element_large_mass-number">40.1</div><div class="element_large_symbol cat_alkalineEarthMetal">Ca</div></div><div id="element_id_21" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Scandium"></a><div class="element_large_full-name">Scandium</div><div class="element_large_atomic-number cat_transitionMetal">21</div><div class="element_large_mass-number">45.0</div><div class="element_large_symbol cat_transitionMetal">Sc</div></div><div id="element_id_22" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Titanium"></a><div class="element_large_full-name">Titanium</div><div class="element_large_atomic-number cat_transitionMetal">22</div><div class="element_large_mass-number">47.9</div><div class="element_large_symbol cat_transitionMetal">Ti</div></div><div id="element_id_23" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Vanadium"></a><div class="element_large_full-name">Vanadium</div><div class="element_large_atomic-number cat_transitionMetal">23</div><div class="element_large_mass-number">50.9</div><div class="element_large_symbol cat_transitionMetal">V</div></div><div id="element_id_24" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Chromium"></a><div class="element_large_full-name">Chromium</div><div class="element_large_atomic-number cat_transitionMetal">24</div><div class="element_large_mass-number">52.0</div><div class="element_large_symbol cat_transitionMetal">Cr</div></div><div id="element_id_25" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Manganese"></a><div class="element_large_full-name">Manganese</div><div class="element_large_atomic-number cat_transitionMetal">25</div><div class="element_large_mass-number">54.9</div><div class="element_large_symbol cat_transitionMetal">Mn</div></div><div id="element_id_26" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Iron"></a><div class="element_large_full-name">Iron</div><div class="element_large_atomic-number cat_transitionMetal">26</div><div class="element_large_mass-number">55.8</div><div class="element_large_symbol cat_transitionMetal">Fe</div></div><div id="element_id_27" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Cobalt"></a><div class="element_large_full-name">Cobalt</div><div class="element_large_atomic-number cat_transitionMetal">27</div><div class="element_large_mass-number">58.9</div><div class="element_large_symbol cat_transitionMetal">Co</div></div><div id="element_id_28" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Nickel"></a><div class="element_large_full-name">Nickel</div><div class="element_large_atomic-number cat_transitionMetal">28</div><div class="element_large_mass-number">58.7</div><div class="element_large_symbol cat_transitionMetal">Ni</div></div><div id="element_id_29" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Copper"></a><div class="element_large_full-name">Copper</div><div class="element_large_atomic-number cat_transitionMetal">29</div><div class="element_large_mass-number">63.5</div><div class="element_large_symbol cat_transitionMetal">Cu</div></div><div id="element_id_30" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Zinc"></a><div class="element_large_full-name">Zinc</div><div class="element_large_atomic-number cat_transitionMetal">30</div><div class="element_large_mass-number">65.4</div><div class="element_large_symbol cat_transitionMetal">Zn</div></div><div id="element_id_31" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Gallium"></a><div class="element_large_full-name">Gallium</div><div class="element_large_atomic-number cat_otherMetal">31</div><div class="element_large_mass-number">69.7</div><div class="element_large_symbol cat_otherMetal">Ga</div></div><div id="element_id_32" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Germanium"></a><div class="element_large_full-name">Germanium</div><div class="element_large_atomic-number cat_otherMetal">32</div><div class="element_large_mass-number">72.6</div><div class="element_large_symbol cat_otherMetal">Ge</div></div><div id="element_id_33" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Arsenic"></a><div class="element_large_full-name">Arsenic</div><div class="element_large_atomic-number cat_nonMetal">33</div><div class="element_large_mass-number">74.9</div><div class="element_large_symbol cat_nonMetal">As</div></div><div id="element_id_34" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Selenium"></a><div class="element_large_full-name">Selenium</div><div class="element_large_atomic-number cat_nonMetal">34</div><div class="element_large_mass-number">79.0</div><div class="element_large_symbol cat_nonMetal">Se</div></div><div id="element_id_35" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Bromine"></a><div class="element_large_full-name">Bromine</div><div class="element_large_atomic-number cat_halogen">35</div><div class="element_large_mass-number">79.9</div><div class="element_large_symbol cat_halogen">Br</div></div><div id="element_id_36" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Krypton"></a><div class="element_large_full-name">Krypton</div><div class="element_large_atomic-number cat_nobleGas">36</div><div class="element_large_mass-number">83.8</div><div class="element_large_symbol cat_nobleGas">Kr</div></div><div id="element_id_37" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Rubidium"></a><div class="element_large_full-name">Rubidium</div><div class="element_large_atomic-number cat_alkaliMetal">37</div><div class="element_large_mass-number">85.5</div><div class="element_large_symbol cat_alkaliMetal">Rb</div></div><div id="element_id_38" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Strontium"></a><div class="element_large_full-name">Strontium</div><div class="element_large_atomic-number cat_alkalineEarthMetal">38</div><div class="element_large_mass-number">87.6</div><div class="element_large_symbol cat_alkalineEarthMetal">Sr</div></div><div id="element_id_39" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Yttrium"></a><div class="element_large_full-name">Yttrium</div><div class="element_large_atomic-number cat_transitionMetal">39</div><div class="element_large_mass-number">88.9</div><div class="element_large_symbol cat_transitionMetal">Y</div></div><div id="element_id_40" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Zirconium"></a><div class="element_large_full-name">Zirconium</div><div class="element_large_atomic-number cat_transitionMetal">40</div><div class="element_large_mass-number">91.2</div><div class="element_large_symbol cat_transitionMetal">Zr</div></div><div id="element_id_41" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Niobium"></a><div class="element_large_full-name">Niobium</div><div class="element_large_atomic-number cat_transitionMetal">41</div><div class="element_large_mass-number">92.9</div><div class="element_large_symbol cat_transitionMetal">Nb</div></div><div id="element_id_42" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Molybdenum"></a><div class="element_large_full-name">Molybdenum</div><div class="element_large_atomic-number cat_transitionMetal">42</div><div class="element_large_mass-number">99.0</div><div class="element_large_symbol cat_transitionMetal">Mo</div></div><div id="element_id_43" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Technetium"></a><div class="element_large_full-name">Technetium</div><div class="element_large_atomic-number cat_transitionMetal">43</div><div class="element_large_mass-number">98.0</div><div class="element_large_symbol cat_transitionMetal">Tc</div></div><div id="element_id_44" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ruthenium"></a><div class="element_large_full-name">Ruthenium</div><div class="element_large_atomic-number cat_transitionMetal">44</div><div class="element_large_mass-number">101.1</div><div class="element_large_symbol cat_transitionMetal">Ru</div></div><div id="element_id_45" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Rhodium"></a><div class="element_large_full-name">Rhodium</div><div class="element_large_atomic-number cat_transitionMetal">45</div><div class="element_large_mass-number">102.9</div><div class="element_large_symbol cat_transitionMetal">Rh</div></div><div id="element_id_46" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Palladium"></a><div class="element_large_full-name">Palladium</div><div class="element_large_atomic-number cat_transitionMetal">46</div><div class="element_large_mass-number">106.4</div><div class="element_large_symbol cat_transitionMetal">Pd</div></div><div id="element_id_47" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Silver"></a><div class="element_large_full-name">Silver</div><div class="element_large_atomic-number cat_transitionMetal">47</div><div class="element_large_mass-number">107.9</div><div class="element_large_symbol cat_transitionMetal">Ag</div></div><div id="element_id_48" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Cadmium"></a><div class="element_large_full-name">Cadmium</div><div class="element_large_atomic-number cat_transitionMetal">48</div><div class="element_large_mass-number">112.4</div><div class="element_large_symbol cat_transitionMetal">Cd</div></div><div id="element_id_49" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Indium"></a><div class="element_large_full-name">Indium</div><div class="element_large_atomic-number cat_otherMetal">49</div><div class="element_large_mass-number">114.8</div><div class="element_large_symbol cat_otherMetal">In</div></div><div id="element_id_50" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Tin"></a><div class="element_large_full-name">Tin</div><div class="element_large_atomic-number cat_otherMetal">50</div><div class="element_large_mass-number">118.7</div><div class="element_large_symbol cat_otherMetal">Sn</div></div><div id="element_id_51" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Antimony"></a><div class="element_large_full-name">Antimony</div><div class="element_large_atomic-number cat_otherMetal">51</div><div class="element_large_mass-number">121.8</div><div class="element_large_symbol cat_otherMetal">Sb</div></div><div id="element_id_52" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Tellurium"></a><div class="element_large_full-name">Tellurium</div><div class="element_large_atomic-number cat_nonMetal">52</div><div class="element_large_mass-number">127.6</div><div class="element_large_symbol cat_nonMetal">Te</div></div><div id="element_id_53" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Iodine"></a><div class="element_large_full-name">Iodine</div><div class="element_large_atomic-number cat_halogen">53</div><div class="element_large_mass-number">126.9</div><div class="element_large_symbol cat_halogen">I</div></div><div id="element_id_54" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Xenon"></a><div class="element_large_full-name">Xenon</div><div class="element_large_atomic-number cat_nobleGas">54</div><div class="element_large_mass-number">131.3</div><div class="element_large_symbol cat_nobleGas">Xe</div></div><div id="element_id_55" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Caesium"></a><div class="element_large_full-name">Caesium</div><div class="element_large_atomic-number cat_alkaliMetal">55</div><div class="element_large_mass-number">132.9</div><div class="element_large_symbol cat_alkaliMetal">Cs</div></div><div id="element_id_56" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Barium"></a><div class="element_large_full-name">Barium</div><div class="element_large_atomic-number cat_alkalineEarthMetal">56</div><div class="element_large_mass-number">137.3</div><div class="element_large_symbol cat_alkalineEarthMetal">Ba</div></div><div id="element_id_57" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Lanthanum"></a><div class="element_large_full-name">Lanthanum</div><div class="element_large_atomic-number cat_lanthanide">57</div><div class="element_large_mass-number">138.9</div><div class="element_large_symbol cat_lanthanide">La</div></div><div id="element_id_58" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Cerium"></a><div class="element_large_full-name">Cerium</div><div class="element_large_atomic-number cat_lanthanide">58</div><div class="element_large_mass-number">140.1</div><div class="element_large_symbol cat_lanthanide">Ce</div></div><div id="element_id_59" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Praseodymium"></a><div class="element_large_full-name">Praseodymium</div><div class="element_large_atomic-number cat_lanthanide">59</div><div class="element_large_mass-number">140.9</div><div class="element_large_symbol cat_lanthanide">Pr</div></div><div id="element_id_60" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Neodymium"></a><div class="element_large_full-name">Neodymium</div><div class="element_large_atomic-number cat_lanthanide">60</div><div class="element_large_mass-number">144.2</div><div class="element_large_symbol cat_lanthanide">Nd</div></div><div id="element_id_61" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Promethium"></a><div class="element_large_full-name">Promethium</div><div class="element_large_atomic-number cat_lanthanide">61</div><div class="element_large_mass-number">145.0</div><div class="element_large_symbol cat_lanthanide">Pm</div></div><div id="element_id_62" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Samarium"></a><div class="element_large_full-name">Samarium</div><div class="element_large_atomic-number cat_lanthanide">62</div><div class="element_large_mass-number">150.4</div><div class="element_large_symbol cat_lanthanide">Sm</div></div><div id="element_id_63" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Europium"></a><div class="element_large_full-name">Europium</div><div class="element_large_atomic-number cat_lanthanide">63</div><div class="element_large_mass-number">152.0</div><div class="element_large_symbol cat_lanthanide">Eu</div></div><div id="element_id_64" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Gadolinium"></a><div class="element_large_full-name">Gadolinium</div><div class="element_large_atomic-number cat_lanthanide">64</div><div class="element_large_mass-number">157.3</div><div class="element_large_symbol cat_lanthanide">Gd</div></div><div id="element_id_65" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Terbium"></a><div class="element_large_full-name">Terbium</div><div class="element_large_atomic-number cat_lanthanide">65</div><div class="element_large_mass-number">158.9</div><div class="element_large_symbol cat_lanthanide">Tb</div></div><div id="element_id_66" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Dysprosium"></a><div class="element_large_full-name">Dysprosium</div><div class="element_large_atomic-number cat_lanthanide">66</div><div class="element_large_mass-number">162.5</div><div class="element_large_symbol cat_lanthanide">Dy</div></div><div id="element_id_67" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Holmium"></a><div class="element_large_full-name">Holmium</div><div class="element_large_atomic-number cat_lanthanide">67</div><div class="element_large_mass-number">164.9</div><div class="element_large_symbol cat_lanthanide">Ho</div></div><div id="element_id_68" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Erbium"></a><div class="element_large_full-name">Erbium</div><div class="element_large_atomic-number cat_lanthanide">68</div><div class="element_large_mass-number">167.3</div><div class="element_large_symbol cat_lanthanide">Er</div></div><div id="element_id_69" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Thulium"></a><div class="element_large_full-name">Thulium</div><div class="element_large_atomic-number cat_lanthanide">69</div><div class="element_large_mass-number">168.9</div><div class="element_large_symbol cat_lanthanide">Tm</div></div><div id="element_id_70" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ytterbium"></a><div class="element_large_full-name">Ytterbium</div><div class="element_large_atomic-number cat_lanthanide">70</div><div class="element_large_mass-number">173.0</div><div class="element_large_symbol cat_lanthanide">Yb</div></div><div id="element_id_71" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Lutetium"></a><div class="element_large_full-name">Lutetium</div><div class="element_large_atomic-number cat_lanthanide">71</div><div class="element_large_mass-number">175.0</div><div class="element_large_symbol cat_lanthanide">Lu</div></div><div id="element_id_72" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Hafnium"></a><div class="element_large_full-name">Hafnium</div><div class="element_large_atomic-number cat_transitionMetal">72</div><div class="element_large_mass-number">178.5</div><div class="element_large_symbol cat_transitionMetal">Hf</div></div><div id="element_id_73" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Tantalum"></a><div class="element_large_full-name">Tantalum</div><div class="element_large_atomic-number cat_transitionMetal">73</div><div class="element_large_mass-number">180.9</div><div class="element_large_symbol cat_transitionMetal">Ta</div></div><div id="element_id_74" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Tungsten"></a><div class="element_large_full-name">Tungsten</div><div class="element_large_atomic-number cat_transitionMetal">74</div><div class="element_large_mass-number">183.8</div><div class="element_large_symbol cat_transitionMetal">W</div></div><div id="element_id_75" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Rhenium"></a><div class="element_large_full-name">Rhenium</div><div class="element_large_atomic-number cat_transitionMetal">75</div><div class="element_large_mass-number">186.2</div><div class="element_large_symbol cat_transitionMetal">Re</div></div><div id="element_id_76" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Osmium"></a><div class="element_large_full-name">Osmium</div><div class="element_large_atomic-number cat_transitionMetal">76</div><div class="element_large_mass-number">190.2</div><div class="element_large_symbol cat_transitionMetal">Os</div></div><div id="element_id_77" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Iridium"></a><div class="element_large_full-name">Iridium</div><div class="element_large_atomic-number cat_transitionMetal">77</div><div class="element_large_mass-number">192.2</div><div class="element_large_symbol cat_transitionMetal">Ir</div></div><div id="element_id_78" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Platinum"></a><div class="element_large_full-name">Platinum</div><div class="element_large_atomic-number cat_transitionMetal">78</div><div class="element_large_mass-number">195.1</div><div class="element_large_symbol cat_transitionMetal">Pt</div></div><div id="element_id_79" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Gold"></a><div class="element_large_full-name">Gold</div><div class="element_large_atomic-number cat_transitionMetal">79</div><div class="element_large_mass-number">197.0</div><div class="element_large_symbol cat_transitionMetal">Au</div></div><div id="element_id_80" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Mercury"></a><div class="element_large_full-name">Mercury</div><div class="element_large_atomic-number cat_transitionMetal">80</div><div class="element_large_mass-number">200.6</div><div class="element_large_symbol cat_transitionMetal">Hg</div></div><div id="element_id_81" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Thallium"></a><div class="element_large_full-name">Thallium</div><div class="element_large_atomic-number cat_otherMetal">81</div><div class="element_large_mass-number">204.4</div><div class="element_large_symbol cat_otherMetal">Tl</div></div><div id="element_id_82" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Lead"></a><div class="element_large_full-name">Lead</div><div class="element_large_atomic-number cat_otherMetal">82</div><div class="element_large_mass-number">207.2</div><div class="element_large_symbol cat_otherMetal">Pb</div></div><div id="element_id_83" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Bismuth"></a><div class="element_large_full-name">Bismuth</div><div class="element_large_atomic-number cat_otherMetal">83</div><div class="element_large_mass-number">209.0</div><div class="element_large_symbol cat_otherMetal">Bi</div></div><div id="element_id_108" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Hassium"></a><div class="element_large_full-name">Hassium</div><div class="element_large_atomic-number cat_transitionMetal">108</div><div class="element_large_mass-number">265.0</div><div class="element_large_symbol cat_transitionMetal">Hs</div></div><div id="element_id_109" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Meitnerium"></a><div class="element_large_full-name">Meitnerium</div><div class="element_large_atomic-number cat_transitionMetal">109</div><div class="element_large_mass-number">266.0</div><div class="element_large_symbol cat_transitionMetal">Mt</div></div><div id="element_id_110" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Darmstadtium"></a><div class="element_large_full-name">Darmstadtium</div><div class="element_large_atomic-number cat_transitionMetal">110</div><div class="element_large_mass-number">269.0</div><div class="element_large_symbol cat_transitionMetal">Ds</div></div><div id="element_id_111" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Roentgenium"></a><div class="element_large_full-name">Roentgenium</div><div class="element_large_atomic-number cat_transitionMetal">111</div><div class="element_large_mass-number">272.0</div><div class="element_large_symbol cat_transitionMetal">Rg</div></div><div id="element_id_112" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Copernicium"></a><div class="element_large_full-name">Copernicium</div><div class="element_large_atomic-number cat_transitionMetal">112</div><div class="element_large_mass-number">285.0</div><div class="element_large_symbol cat_transitionMetal">Cn</div></div><div id="element_id_113" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ununtrium"></a><div class="element_large_full-name">Ununtrium</div><div class="element_large_atomic-number cat_otherMetal">113</div><div class="element_large_mass-number">286.0</div><div class="element_large_symbol cat_otherMetal smallerText">Uut</div></div><div id="element_id_114" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ununquadium"></a><div class="element_large_full-name">Ununquadium</div><div class="element_large_atomic-number cat_otherMetal">114</div><div class="element_large_mass-number">289.0</div><div class="element_large_symbol cat_otherMetal smallerText">Uuq</div></div><div id="element_id_115" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ununpentium"></a><div class="element_large_full-name">Ununpentium</div><div class="element_large_atomic-number cat_otherMetal">115</div><div class="element_large_mass-number">289.0</div><div class="element_large_symbol cat_otherMetal smallerText">Uup</div></div><div id="element_id_116" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ununhexium"></a><div class="element_large_full-name">Ununhexium</div><div class="element_large_atomic-number cat_otherMetal">116</div><div class="element_large_mass-number">293.0</div><div class="element_large_symbol cat_otherMetal smallerText">Uuh</div></div><div id="element_id_117" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ununseptium"></a><div class="element_large_full-name">Ununseptium</div><div class="element_large_atomic-number cat_halogen">117</div><div class="element_large_mass-number">294.0</div><div class="element_large_symbol cat_halogen smallerText">Uus</div></div><div id="element_id_118" class="element_large" style="display: none;"><a href="javascript:;" onclick="" title="Ununoctium"></a><div class="element_large_full-name">Ununoctium</div><div class="element_large_atomic-number cat_nobleGas">118</div><div class="element_large_mass-number">294.0</div><div class="element_large_symbol cat_nobleGas smallerText">Uuo</div>
                            </div>
                          </div>

                          <div id="periodic-table_main" style="clear: both;">
                            <div class="group">
                              <div id="element_num_1" class="element state_g group_nm"><a id="element_1" href="javascript:;" onclick="showElementBasic('H');" onmouseover="showLargeElement(1);" title="Hydrogen"><span class="element_full-name"><span class="hiddenText">Name: </span>Hydrogen</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>1</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>1</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>H</span></a></div><div id="element_num_3" class="element state_s group_a"><a id="element_3" href="javascript:;" onclick="addNewTable('Li','Lithium');" onmouseover="showLargeElement(3);" title="Lithium"><span class="element_full-name"><span class="hiddenText">Name: </span>Lithium</span><span class="element_atomic-number cat_alkaliMetal"><span class="hiddenText">Atomic number: </span><strong>3</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>7</span><span class="element_symbol cat_alkaliMetal"><span class="hiddenText">Symbol: </span>Li</span></a></div><div id="element_num_11" class="element state_s group_a"><a id="element_11" href="javascript:;" onclick="addNewTable('Na','Sodium');" onmouseover="showLargeElement(11);" title="Sodium"><span class="element_full-name"><span class="hiddenText">Name: </span>Sodium</span><span class="element_atomic-number cat_alkaliMetal"><span class="hiddenText">Atomic number: </span><strong>11</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>23</span><span class="element_symbol cat_alkaliMetal"><span class="hiddenText">Symbol: </span>Na</span></a></div><div id="element_num_19" class="element state_s group_a"><a id="element_19" href="javascript:;" onclick="addNewTable('K','Potassium');" onmouseover="showLargeElement(19);" title="Potassium"><span class="element_full-name"><span class="hiddenText">Name: </span>Potassium</span><span class="element_atomic-number cat_alkaliMetal"><span class="hiddenText">Atomic number: </span><strong>19</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>39</span><span class="element_symbol cat_alkaliMetal"><span class="hiddenText">Symbol: </span>K</span></a></div><div id="element_num_37" class="element state_s group_a"><a id="element_37" href="javascript:;" onclick="addNewTable('Rb','Rubidium');" onmouseover="showLargeElement(37);" title="Rubidium"><span class="element_full-name"><span class="hiddenText">Name: </span>Rubidium</span><span class="element_atomic-number cat_alkaliMetal"><span class="hiddenText">Atomic number: </span><strong>37</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>85</span><span class="element_symbol cat_alkaliMetal"><span class="hiddenText">Symbol: </span>Rb</span></a></div><div id="element_num_55" class="element state_s group_a"><a id="element_55" href="javascript:;" onclick="addNewTable('Cs','Caesium');" onmouseover="showLargeElement(55);" title="Caesium"><span class="element_full-name"><span class="hiddenText">Name: </span>Caesium</span><span class="element_atomic-number cat_alkaliMetal"><span class="hiddenText">Atomic number: </span><strong>55</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>133</span><span class="element_symbol cat_alkaliMetal"><span class="hiddenText">Symbol: </span>Cs</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div id="element_num_4" class="element state_s group_ae"><a id="element_4" href="javascript:;" onclick="addNewTable('Be','Beryllium');" onmouseover="showLargeElement(4);" title="Beryllium"><span class="element_full-name"><span class="hiddenText">Name: </span>Beryllium</span><span class="element_atomic-number cat_alkalineEarthMetal"><span class="hiddenText">Atomic number: </span><strong>4</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>9</span><span class="element_symbol cat_alkalineEarthMetal"><span class="hiddenText">Symbol: </span>Be</span></a></div><div id="element_num_12" class="element state_s group_ae"><a id="element_12" href="javascript:;" onclick="addNewTable('Mg','Magnesium');" onmouseover="showLargeElement(12);" title="Magnesium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Magnesium</span><span class="element_atomic-number cat_alkalineEarthMetal"><span class="hiddenText">Atomic number: </span><strong>12</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>24</span><span class="element_symbol cat_alkalineEarthMetal"><span class="hiddenText">Symbol: </span>Mg</span></a></div><div id="element_num_20" class="element state_s group_ae"><a id="element_20" href="javascript:;" onclick="addNewTable('Ca','Calcium');" onmouseover="showLargeElement(20);" title="Calcium"><span class="element_full-name"><span class="hiddenText">Name: </span>Calcium</span><span class="element_atomic-number cat_alkalineEarthMetal"><span class="hiddenText">Atomic number: </span><strong>20</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>40</span><span class="element_symbol cat_alkalineEarthMetal"><span class="hiddenText">Symbol: </span>Ca</span></a></div><div id="element_num_38" class="element state_s group_ae"><a id="element_38" href="javascript:;" onclick="addNewTable('Sr','Strontium');" onmouseover="showLargeElement(38);" title="Strontium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Strontium</span><span class="element_atomic-number cat_alkalineEarthMetal"><span class="hiddenText">Atomic number: </span><strong>38</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>88</span><span class="element_symbol cat_alkalineEarthMetal"><span class="hiddenText">Symbol: </span>Sr</span></a></div><div id="element_num_56" class="element state_s group_ae"><a id="element_56" href="javascript:;" onclick="addNewTable('Ba','Barium');" onmouseover="showLargeElement(56);" title="Barium"><span class="element_full-name"><span class="hiddenText">Name: </span>Barium</span><span class="element_atomic-number cat_alkalineEarthMetal"><span class="hiddenText">Atomic number: </span><strong>56</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>137</span><span class="element_symbol cat_alkalineEarthMetal"><span class="hiddenText">Symbol: </span>Ba</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_21" class="element state_s group_t"><a id="element_21" href="javascript:;" onclick="addNewTable('Sc','Scandium');" onmouseover="showLargeElement(21);" title="Scandium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Scandium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>21</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>45</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Sc</span></a></div><div id="element_num_39" class="element state_s group_t"><a id="element_39" href="javascript:;" onclick="addNewTable('Y','Yttrium');" onmouseover="showLargeElement(39);" title="Yttrium"><span class="element_full-name"><span class="hiddenText">Name: </span>Yttrium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>39</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>89</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Y</span></a></div><div id="element_num_57" class="element state_s group_otm"><a id="element_57" href="javascript:;" onclick="addNewTable('La','Lanthanum');" onmouseover="showLargeElement(57);" title="Lanthanum"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Lanthanum</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>57</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>139</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>La</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_22" class="element state_s group_t"><a id="element_22" href="javascript:;" onclick="addNewTable('Ti','Titanium');" onmouseover="showLargeElement(22);" title="Titanium"><span class="element_full-name"><span class="hiddenText">Name: </span>Titanium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>22</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>48</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Ti</span></a></div><div id="element_num_40" class="element state_s group_t"><a id="element_40" href="javascript:;" onclick="addNewTable('Zr','Zirconium');" onmouseover="showLargeElement(40);" title="Zirconium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Zirconium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>40</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>91</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Zr</span></a></div><div id="element_num_72" class="element state_s group_t"><a id="element_72" href="javascript:;" onclick="addNewTable('Hf','Hafnium');" onmouseover="showLargeElement(72);" title="Hafnium"><span class="element_full-name"><span class="hiddenText">Name: </span>Hafnium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>72</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>178</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Hf</span></a>
                              </div>
                            </div>
                            <div class="group">
                                <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_23" class="element state_s group_t"><a id="element_23" href="javascript:;" onclick="addNewTable('V','Vanadium');" onmouseover="showLargeElement(23);" title="Vanadium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Vanadium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>23</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>51</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>V</span></a></div><div id="element_num_41" class="element state_s group_t"><a id="element_41" href="javascript:;" onclick="addNewTable('Nb','Niobium');" onmouseover="showLargeElement(41);" title="Niobium"><span class="element_full-name"><span class="hiddenText">Name: </span>Niobium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>41</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>93</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Nb</span></a></div><div id="element_num_73" class="element state_s group_t"><a id="element_73" href="javascript:;" onclick="addNewTable('Ta','Tantalum');" onmouseover="showLargeElement(73);" title="Tantalum"><span class="element_full-name"><span class="hiddenText">Name: </span>Tantalum</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>73</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>181</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Ta</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_24" class="element state_s group_t"><a id="element_24" href="javascript:;" onclick="addNewTable('Cr','Chromium');" onmouseover="showLargeElement(24);" title="Chromium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Chromium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>24</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>52</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Cr</span></a></div><div id="element_num_42" class="element state_s group_t"><a id="element_42" href="javascript:;" onclick="addNewTable('Mo','Molybdenum');" onmouseover="showLargeElement(42);" title="Molybdenum"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Molybdenum</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>42</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>99</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Mo</span></a></div><div id="element_num_74" class="element state_s group_t"><a id="element_74" href="javascript:;" onclick="addNewTable('W','Tugsten');" onmouseover="showLargeElement(74);" title="Tungsten"><span class="element_full-name"><span class="hiddenText">Name: </span>Tungsten</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>74</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>184</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>W</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_25" class="element state_s group_t"><a id="element_25" href="javascript:;" onclick="addNewTable('Mn','Manganese');" onmouseover="showLargeElement(25);" title="Manganese"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Manganese</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>25</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>55</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Mn</span></a></div><div id="element_num_43" class="element state_s group_t"><a id="element_43" href="javascript:;" onclick="addNewTable('Tc','Technetium');" onmouseover="showLargeElement(43);" title="Technetium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Technetium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>43</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>98</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Tc</span></a></div><div id="element_num_75" class="element state_s group_t"><a id="element_75" href="javascript:;" onclick="addNewTable('Re','Rhenium');" onmouseover="showLargeElement(75);" title="Rhenium"><span class="element_full-name"><span class="hiddenText">Name: </span>Rhenium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>75</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>186</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Re</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_26" class="element state_s group_t"><a id="element_26" href="javascript:;" onclick="addNewTable('Fe','Iron');" onmouseover="showLargeElement(26);" title="Iron"><span class="element_full-name"><span class="hiddenText">Name: </span>Iron</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>26</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>56</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Fe</span></a></div><div id="element_num_44" class="element state_s group_t"><a id="element_44" href="javascript:;" onclick="addNewTable('Ru','Ruthenium');" onmouseover="showLargeElement(44);" title="Ruthenium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Ruthenium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>44</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>101</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Ru</span></a></div><div id="element_num_76" class="element state_s group_t"><a id="element_76" href="javascript:;" onclick="addNewTable('Os','Osmium');" onmouseover="showLargeElement(76);" title="Osmium"><span class="element_full-name"><span class="hiddenText">Name: </span>Osmium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>76</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>190</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Os</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_27" class="element state_s group_t"><a id="element_27" href="javascript:;" onclick="addNewTable('Co','Cobalt');" onmouseover="showLargeElement(27);" title="Cobalt"><span class="element_full-name"><span class="hiddenText">Name: </span>Cobalt</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>27</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>59</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Co</span></a></div><div id="element_num_45" class="element state_s group_t"><a id="element_45" href="javascript:;" onclick="addNewTable('Rh','Rhodium');" onmouseover="showLargeElement(45);" title="Rhodium"><span class="element_full-name"><span class="hiddenText">Name: </span>Rhodium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>45</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>103</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Rh</span></a></div><div id="element_num_77" class="element state_s group_t"><a id="element_77" href="javascript:;" onclick="addNewTable('Ir','Iridium');" onmouseover="showLargeElement(77);" title="Iridium"><span class="element_full-name"><span class="hiddenText">Name: </span>Iridium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>77</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>192</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Ir</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_28" class="element state_s group_t"><a id="element_28" href="javascript:;" onclick="addNewTable('Ni','Nickel');" onmouseover="showLargeElement(28);" title="Nickel"><span class="element_full-name"><span class="hiddenText">Name: </span>Nickel</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>28</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>59</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Ni</span></a></div><div id="element_num_46" class="element state_s group_t"><a id="element_46" href="javascript:;" onclick="addNewTable('Pd','Palladium');" onmouseover="showLargeElement(46);" title="Palladium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Palladium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>46</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>106</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Pd</span></a></div><div id="element_num_78" class="element state_s group_t"><a id="element_78" href="javascript:;" onclick="addNewTable('Pt','Platinum');" onmouseover="showLargeElement(78);" title="Platinum"><span class="element_full-name"><span class="hiddenText">Name: </span>Platinum</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>78</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>195</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Pt</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_29" class="element state_s group_t"><a id="element_29" href="javascript:;" onclick="addNewTable('Cu','Copper');" onmouseover="showLargeElement(29);" title="Copper"><span class="element_full-name"><span class="hiddenText">Name: </span>Copper</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>29</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>63</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Cu</span></a></div><div id="element_num_47" class="element state_s group_t"><a id="element_47" href="javascript:;" onclick="addNewTable('Ag','Silver');" onmouseover="showLargeElement(47);" title="Silver"><span class="element_full-name"><span class="hiddenText">Name: </span>Silver</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>47</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>108</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Ag</span></a></div><div id="element_num_79" class="element state_s group_t"><a id="element_79" href="javascript:;" onclick="addNewTable('Au','Gold');" onmouseover="showLargeElement(79);" title="Gold"><span class="element_full-name"><span class="hiddenText">Name: </span>Gold</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>79</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>197</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Au</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div class="element invisible"></div><div class="element invisible"></div><div id="element_num_30" class="element state_s group_t"><a id="element_30" href="javascript:;" onclick="addNewTable('Zn','Zinc');" onmouseover="showLargeElement(30);" title="Zinc"><span class="element_full-name"><span class="hiddenText">Name: </span>Zinc</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>30</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>65</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Zn</span></a></div><div id="element_num_48" class="element state_s group_t"><a id="element_48" href="javascript:;" onclick="addNewTable('Cd','Cadmium');" onmouseover="showLargeElement(48);" title="Cadmium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Cadmium</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>48</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>112</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Cd</span></a></div><div id="element_num_80" class="element state_l group_t"><a id="element_80" href="javascript:;" onclick="addNewTable('Hg','Mercury');" onmouseover="showLargeElement(80);" title="Mercury"><span class="element_full-name"><span class="hiddenText">Name: </span>Mercury</span><span class="element_atomic-number cat_transitionMetal"><span class="hiddenText">Atomic number: </span><strong>80</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>201</span><span class="element_symbol cat_transitionMetal"><span class="hiddenText">Symbol: </span>Hg</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div id="element_num_5" class="element state_s group_nm"><a id="element_5" href="javascript:;" onclick="addNewTable('B','Boron');" onmouseover="showLargeElement(5);" title="Boron"><span class="element_full-name"><span class="hiddenText">Name: </span>Boron</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>5</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>11</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>B</span></a></div><div id="element_num_13" class="element state_s group_om"><a id="element_13" href="javascript:;" onclick="addNewTable('Al','Aluminium');" onmouseover="showLargeElement(13);" title="Aluminium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Aluminium</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>13</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>27</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Al</span></a></div><div id="element_num_31" class="element state_s group_om"><a id="element_31" href="javascript:;" onclick="addNewTable('Ga','Gallium');" onmouseover="showLargeElement(31);" title="Gallium"><span class="element_full-name"><span class="hiddenText">Name: </span>Gallium</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>31</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>70</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Ga</span></a></div><div id="element_num_49" class="element state_s group_om"><a id="element_49" href="javascript:;" onclick="addNewTable('In','Indium');" onmouseover="showLargeElement(49);" title="Indium"><span class="element_full-name"><span class="hiddenText">Name: </span>Indium</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>49</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>115</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>In</span></a></div><div id="element_num_81" class="element state_s group_om"><a id="element_81" href="javascript:;" onclick="addNewTable('Tl','Thallium');" onmouseover="showLargeElement(81);" title="Thallium"><span class="element_full-name"><span class="hiddenText">Name: </span>Thallium</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>81</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>204</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Tl</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div id="element_num_6" class="element state_s group_nm"><a id="element_6" href="javascript:;" onclick="showElementBasic('C');" onmouseover="showLargeElement(6);" title="Carbon"><span class="element_full-name"><span class="hiddenText">Name: </span>Carbon</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>6</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>12</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>C</span></a></div><div id="element_num_14" class="element state_s group_nm"><a id="element_14" href="javascript:;" onclick="addNewTable('Si','Silicon');" onmouseover="showLargeElement(14);" title="Silicon"><span class="element_full-name"><span class="hiddenText">Name: </span>Silicon</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>14</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>28</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>Si</span></a></div><div id="element_num_32" class="element state_s group_om"><a id="element_32" href="javascript:;" onclick="addNewTable('Ge','Germanium');" onmouseover="showLargeElement(32);" title="Germanium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Germanium</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>32</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>73</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Ge</span></a></div><div id="element_num_50" class="element state_s group_om"><a id="element_50" href="javascript:;" onclick="addNewTable('Sn','Tin');" onmouseover="showLargeElement(50);" title="Tin"><span class="element_full-name"><span class="hiddenText">Name: </span>Tin</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>50</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>119</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Sn</span></a></div><div id="element_num_82" class="element state_s group_om"><a id="element_82" href="javascript:;" onclick="addNewTable('Pb','Lead');" onmouseover="showLargeElement(82);" title="Lead"><span class="element_full-name"><span class="hiddenText">Name: </span>Lead</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>82</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>207</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Pb</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div id="element_num_7" class="element state_g group_nm"><a id="element_7" href="javascript:;" onclick="showElementBasic('N');" onmouseover="showLargeElement(7);" title="Nitrogen"><span class="element_full-name"><span class="hiddenText">Name: </span>Nitrogen</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>7</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>14</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>N</span></a></div><div id="element_num_15" class="element state_s group_nm"><a id="element_15" href="javascript:;" onclick="showElementBasic();" onmouseover="showLargeElement(15);" title="Phosphorus"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Phosphorus</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>15</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>31</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>P</span></a></div><div id="element_num_33" class="element state_s group_nm"><a id="element_33" href="javascript:;" onclick="addNewTable('As','Arsenic');" onmouseover="showLargeElement(33);" title="Arsenic"><span class="element_full-name"><span class="hiddenText">Name: </span>Arsenic</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>33</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>75</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>As</span></a></div><div id="element_num_51" class="element state_s group_om"><a id="element_51" href="javascript:;" onclick="addNewTable('Sb','Antimony');" onmouseover="showLargeElement(51);" title="Antimony"><span class="element_full-name"><span class="hiddenText">Name: </span>Antimony</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>51</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>122</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Sb</span></a></div><div id="element_num_83" class="element state_s group_om"><a id="element_83" href="javascript:;" onclick="addNewTable('Bi','Bismuth');" onmouseover="showLargeElement(83);" title="Bismuth"><span class="element_full-name"><span class="hiddenText">Name: </span>Bismuth</span><span class="element_atomic-number cat_otherMetal"><span class="hiddenText">Atomic number: </span><strong>83</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>209</span><span class="element_symbol cat_otherMetal"><span class="hiddenText">Symbol: </span>Bi</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div id="element_num_8" class="element state_g group_nm"><a id="element_8" href="javascript:;" onclick="showElementBasic('O');" onmouseover="showLargeElement(8);" title="Oxygen"><span class="element_full-name"><span class="hiddenText">Name: </span>Oxygen</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>8</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>16</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>O</span></a></div><div id="element_num_16" class="element state_s group_nm"><a id="element_16" href="javascript:;" onclick="showElementBasic();" onmouseover="showLargeElement(16);" title="Sulfur"><span class="element_full-name"><span class="hiddenText">Name: </span>Sulfur</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>16</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>32</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>S</span></a></div><div id="element_num_34" class="element state_s group_nm"><a id="element_34" href="javascript:;" onclick="addNewTable('Se','Selenium');" onmouseover="showLargeElement(34);" title="Selenium"><span class="element_full-name"><span class="hiddenText">Name: </span>Selenium</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>34</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>79</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>Se</span></a></div><div id="element_num_52" class="element state_s group_nm"><a id="element_52" href="javascript:;" onclick="addNewTable('Te','Tellerium');" onmouseover="showLargeElement(52);" title="Tellurium"><span class="element_full-name"><span class="hiddenText">Name: </span>Tellurium</span><span class="element_atomic-number cat_nonMetal"><span class="hiddenText">Atomic number: </span><strong>52</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>128</span><span class="element_symbol cat_nonMetal"><span class="hiddenText">Symbol: </span>Te</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div class="element invisible"></div><div id="element_num_9" class="element state_g group_h"><a id="element_9" href="javascript:;" onclick="addNewTable('F','Fluorine');" onmouseover="showLargeElement(9);" title="Fluorine"><span class="element_full-name"><span class="hiddenText">Name: </span>Fluorine</span><span class="element_atomic-number cat_halogen"><span class="hiddenText">Atomic number: </span><strong>9</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>19</span><span class="element_symbol cat_halogen"><span class="hiddenText">Symbol: </span>F</span></a></div><div id="element_num_17" class="element state_g group_h"><a id="element_17" href="javascript:;" onclick="showElementBasic();" onmouseover="showLargeElement(17);" title="Chlorine"><span class="element_full-name"><span class="hiddenText">Name: </span>Chlorine</span><span class="element_atomic-number cat_halogen"><span class="hiddenText">Atomic number: </span><strong>17</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>35</span><span class="element_symbol cat_halogen"><span class="hiddenText">Symbol: </span>Cl</span></a></div><div id="element_num_35" class="element state_l group_h"><a id="element_35" href="javascript:;" onclick="addNewTable('Br','Bromine');" onmouseover="showLargeElement(35);" title="Bromine"><span class="element_full-name"><span class="hiddenText">Name: </span>Bromine</span><span class="element_atomic-number cat_halogen"><span class="hiddenText">Atomic number: </span><strong>35</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>80</span><span class="element_symbol cat_halogen"><span class="hiddenText">Symbol: </span>Br</span></a></div><div id="element_num_53" class="element state_s group_h"><a id="element_53" href="javascript:;" onclick="addNewTable('I','Iodine');" onmouseover="showLargeElement(53);" title="Iodine"><span class="element_full-name"><span class="hiddenText">Name: </span>Iodine</span><span class="element_atomic-number cat_halogen"><span class="hiddenText">Atomic number: </span><strong>53</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>127</span><span class="element_symbol cat_halogen"><span class="hiddenText">Symbol: </span>I</span></a>
                              </div>
                            </div>
                            <div class="group">
                              <div id="element_num_2" class="element state_g group_ng"><a id="element_2" href="javascript:;" onclick="addNewTable('He','Helium');" onmouseover="showLargeElement(2);" title="Helium"><span class="element_full-name"><span class="hiddenText">Name: </span>Helium</span><span class="element_atomic-number cat_nobleGas"><span class="hiddenText">Atomic number: </span><strong>2</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>4</span><span class="element_symbol cat_nobleGas"><span class="hiddenText">Symbol: </span>He</span></a></div><div id="element_num_10" class="element state_g group_ng"><a id="element_10" href="javascript:;" onclick="addNewTable('Ne','Neon');" onmouseover="showLargeElement(10);" title="Neon"><span class="element_full-name"><span class="hiddenText">Name: </span>Neon</span><span class="element_atomic-number cat_nobleGas"><span class="hiddenText">Atomic number: </span><strong>10</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>20</span><span class="element_symbol cat_nobleGas"><span class="hiddenText">Symbol: </span>Ne</span></a></div><div id="element_num_18" class="element state_g group_ng"><a id="element_18" href="javascript:;" onclick="addNewTable('Ar','Argon');" onmouseover="showLargeElement(18);" title="Argon"><span class="element_full-name"><span class="hiddenText">Name: </span>Argon</span><span class="element_atomic-number cat_nobleGas"><span class="hiddenText">Atomic number: </span><strong>18</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>40</span><span class="element_symbol cat_nobleGas"><span class="hiddenText">Symbol: </span>Ar</span></a></div><div id="element_num_36" class="element state_g group_ng"><a id="element_36" href="javascript:;" onclick="addNewTable('Kr','Krypton');" onmouseover="showLargeElement(36);" title="Krypton"><span class="element_full-name"><span class="hiddenText">Name: </span>Krypton</span><span class="element_atomic-number cat_nobleGas"><span class="hiddenText">Atomic number: </span><strong>36</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>84</span><span class="element_symbol cat_nobleGas"><span class="hiddenText">Symbol: </span>Kr</span></a></div><div id="element_num_54" class="element state_g group_ng"><a id="element_54" href="javascript:;" onclick="addNewTable('Xe','Xenon');" onmouseover="showLargeElement(54);" title="Xenon"><span class="element_full-name"><span class="hiddenText">Name: </span>Xenon</span><span class="element_atomic-number cat_nobleGas"><span class="hiddenText">Atomic number: </span><strong>54</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>131</span><span class="element_symbol cat_nobleGas"><span class="hiddenText">Symbol: </span>Xe</span></a>
                              </div>
                            </div>
                          </div>

                          <div id="periodic-table_lanthanides">
                            <div class="group_title" title="The series of rare-earth elements of atomic numbers 57 through 71 (lanthanum through lutetium). "><b>Lanthanide series</b></div>
                            <div class="group">
                              <div id="element_num_58" class="element state_s group_otm"><a id="element_58" href="javascript:;" onclick="addNewTable('Ce','Cerium');" onmouseover="showLargeElement(58);" title="Cerium"><span class="element_full-name"><span class="hiddenText">Name: </span>Cerium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>58</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>140</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Ce</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_59" class="element state_s group_otm"><a id="element_59" href="javascript:;" onclick="addNewTable('Pr','Praseodymium');" onmouseover="showLargeElement(59);" title="Praseodymium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Praseodymium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>59</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>141</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Pr</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_60" class="element state_s group_otm"><a id="element_60" href="javascript:;" onclick="addNewTable('Nd','Neodymium');" onmouseover="showLargeElement(60);" title="Neodymium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Neodymium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>60</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>144</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Nd</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_61" class="element state_s group_otm"><a id="element_61" href="javascript:;" onclick="addNewTable('Pm','Promethium');" onmouseover="showLargeElement(61);" title="Promethium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Promethium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>61</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>145</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Pm</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_62" class="element state_s group_otm"><a id="element_62" href="javascript:;" onclick="addNewTable('Sm','Samarium');" onmouseover="showLargeElement(62);" title="Samarium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Samarium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>62</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>150</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Sm</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_63" class="element state_s group_otm"><a id="element_63" href="javascript:;" onclick="addNewTable('Eu','Europium');" onmouseover="showLargeElement(63);" title="Europium"><span class="element_full-name"><span class="hiddenText">Name: </span>Europium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>63</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>152</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Eu</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_64" class="element state_s group_otm"><a id="element_64" href="javascript:;" onclick="addNewTable('Gd','Gadolinium');" onmouseover="showLargeElement(64);" title="Gadolinium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Gadolinium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>64</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>157</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Gd</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_65" class="element state_s group_otm"><a id="element_65" href="javascript:;" onclick="addNewTable('Tb','Terbium');" onmouseover="showLargeElement(65);" title="Terbium"><span class="element_full-name"><span class="hiddenText">Name: </span>Terbium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>65</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>159</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Tb</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_66" class="element state_s group_otm"><a id="element_66" href="javascript:;" onclick="addNewTable('Dy','Dysprosium');" onmouseover="showLargeElement(66);" title="Dysprosium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Dysprosium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>66</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>162</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Dy</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_67" class="element state_s group_otm"><a id="element_67" href="javascript:;" onclick="addNewTable('Ho','Holmium');" onmouseover="showLargeElement(67);" title="Holmium"><span class="element_full-name"><span class="hiddenText">Name: </span>Holmium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>67</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>165</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Ho</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_68" class="element state_s group_otm"><a id="element_68" href="javascript:;" onclick="addNewTable('Er','Erbium');" onmouseover="showLargeElement(68);" title="Erbium"><span class="element_full-name"><span class="hiddenText">Name: </span>Erbium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>68</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>167</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Er</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_69" class="element state_s group_otm"><a id="element_69" href="javascript:;" onclick="addNewTable('Tm','Thulium');" onmouseover="showLargeElement(69);" title="Thulium"><span class="element_full-name"><span class="hiddenText">Name: </span>Thulium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>69</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>169</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Tm</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_70" class="element state_s group_otm"><a id="element_70" href="javascript:;" onclick="addNewTable('Yb','Ytterbium');" onmouseover="showLargeElement(70);" title="Ytterbium"><span class="element_full-name smallerText"><span class="hiddenText">Name: </span>Ytterbium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>70</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>173</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Yb</span></a></div>
                            </div>
                            <div class="group">
                              <div id="element_num_71" class="element state_s group_otm"><a id="element_71" href="javascript:;" onclick="addNewTable('Lu','Lutetium');" onmouseover="showLargeElement(71);" title="Lutetium"><span class="element_full-name"><span class="hiddenText">Name: </span>Lutetium</span><span class="element_atomic-number cat_lanthanide"><span class="hiddenText">Atomic number: </span><strong>71</strong></span><span class="element_mass-number"><span class="hiddenText">Atomic weight: </span>175</span><span class="element_symbol cat_lanthanide"><span class="hiddenText">Symbol: </span>Lu</span></a></div>
                            </div>
                          </div>
                          <div class="clear"></div>

                        </div>


<!--PERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLE-->
<!--PERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLE-->
<!--PERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLEPERIODICTABLE-->
              </div>
               <!-- footer modal -->
             <div class="modal-footer">

               <button type="button" onclick="enviarsolicitudnuevaCuenta();" class="btn btn-primary " id="btn-aceptar-profesor">Aceptar</button>
               <button type="button" onclick="closeperiodictable();" class="btn btn-secundary " data-dismiss="modal">Salir</button>

             </div>
            </div>
           </div>
         </div><!-- fin del modal -->





  </div>





  <!-- archivos javascripts -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" ></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <script src="../js/elements.js"></script>
  <script src="../js/validator.js"></script>
  <script src="../js/table.js"></script>
  <script type="text/JavaScript" src="../js/jquery.easyui.min.js"></script>
  <script src="../js/iect.js"></script>
  <script src="../js/iect_sign_in.js"></script>
  <script src="../js/login.js"></script>

  <!--<script type="text/javascript">$( function() {$( "#fecha_inicio" ).datepicker({dateFormat:'yy-mm-dd',minDate: 0});$( "#fecha_termino" ).datepicker({dateFormat:'yy-mm-dd',minDate: 0});} );</script>-->

</body>
</html>
