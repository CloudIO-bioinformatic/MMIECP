<?php
session_start();
//echo "admin: ",$_SESSION['admin'],"<br>";
//echo "director: ",$_SESSION['director'],"<br>";
//echo "secretario: ",$_SESSION['secretario'],"<br>";
if($_SESSION['existe']==""){
  session_start();
  session_unset();
  unset($_SESSION);
  $_SESSION=array();
  session_destroy();
  //header("Location:../vista/iect.php");
}
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
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
	<!--<link rel="shortcut icon" type="image/x-icon" href="icono" />-->
  <link rel="shortcut icon" type="image/x-icon" href="icono-fabi.jpg" />
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm bg-light navbar-dark">
    <ul class="nav justify-content-center">


    </ul>

    <ul class="navbar-nav ml-auto">
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <h3 align="center"><b>RATIONAL DESIGN AND STUDY OF POLYMERS RELATED TO COMPOUNDS OF
        INDUSTRIAL INTEREST USING A HYBRID STRATEGY IN-SILICONE / EXPERIMENTAL</b></h3>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

      <li class="nav-item">

          <button  type="button" class="btn btn-success" onclick="login();"><b>Sign-in</b></button>
      </li>
    </ul>
  </nav>


  <div class="container">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">

    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#menu1">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab"  href="#menu2">Service</a>
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
              targets	studied.	</p><button  type="button" class="btn btn-success" onclick="login();"><b>Sign-in</b></button>

        </div>

        <div id="menu2" class="container tab-pane fade"><br>
          <h3>Interaction Energy Calculation Tool</h3>
          <p>This service calculates the energy interaction between 2 nanomolecules.</p>
          <p>If you want to use the software that calculates the energy interaction, you need to log into the system.</p>
          <p>To be able to login click on the following button <button  type="button" class="btn btn-success" onclick="login();"><b>Sign-in</b></button></p>
          <p>If you do not have an account in the system, please click on the following button and fill in the form
          <button  type="button" class="btn btn-info" onclick="nuevaCuenta();"><b>Register a new account</b></button></p>
        </div>


        <div id="menu3" class="container tab-pane fade"><br>
          COMO USAR EL SOFTWARE?

        </div>
  </div>


    <div class="modal" id="modal-login" tabindex="-1" role="dialog" style="display: none;">
      <div class="modal-dialog col-12 col-sm-6 col-md-3">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><span id="titulo-modal-login"></span></h4>
              <button type="button" onclick="closelogin();" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
        				<h1 align=center span style="color:#04B431;" ><b>IECT LOGIN<br><br></b></h1>
        					<form action="" name="f1" method="post">
        						<div class="input-group">
        							<span class="input-group-addon"><i class="fa fa-user fa-2x" aria-hidden="true"></i>&emsp;&emsp;&emsp;&emsp;</span>
        							<input type="text" id="correo" name="correo" class="form-control">
        						</div><br/>
        						<div class="input-group">
        							<span class="input-group-addon"><i class="fa fa-key fa-2x" aria-hidden="true"></i>&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;</span>
        							<input type="password" id="clave" name="clave" class="form-control">
        						</div><br/>
        						<div class="container" align="center">
        							<button  type="button" class="btn btn-success" id="Iniciar">Log in!</button>
        						</div>
        					</form>
        				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mensaje"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- modals-->
     <div class="modal" id="modal-nuevacuenta" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">
           <!-- header modal -->
           <div class="modal-header">

             <h4 class="modal-title"><b>Register a new account</b></h4>
             <button type="button" onclick="closenuevaCuenta();" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span></button>
           </div>

           <!-- body modal-->
           <div class="modal-body">

             <section class="row justify-content-center">
               <section class="col-12 col-sm-8 col-md-10" >
               <form id="form-nuevacuenta" role="form" method="post" enctype="multipart/form-data">
                 <section class="col-12 col-sm-6 col-md-8" >
                 <div>
                   <label for="nombre">Name: <span style="color:red">*</span></label>
                   <input type="text" class="form-control" id="nombre" name="nombre" data-required="true">

                   <label for="apellido">Surname: <span style="color:red">*</span></label>
                   <input type="text" class="form-control" id="apellido" name="apellido" data-required="true">

                   <label for="correo_solicitud">Mail: <span style="color:red">*</span></label>
                   <input type="text" class="form-control" id="correo_solicitud" name="correo_solicitud" data-required="true">

                   <label for="institucion">Institution: <span style="color:red">*</span></label>
                   <input type="text" class="form-control" id="institucion" name="institucion" data-required="true">

                   <label for="pais">Country: <span style="color:red">*</span></label>
                   <input type="text" class="form-control" id="pais" name="pais" data-required="true">
                 </div>

                 <div >
                   <label><span style="color:red">*</span> Required data.</label>
                 </div>

               </form>
               <!-- footer modal -->
               <div class="modal-footer">

                 <button type="button" onclick="enviarsolicitudnuevaCuenta();" class="btn btn-primary " id="btn-aceptar-profesor">Aceptar</button>
                 <button type="button" onclick="closenuevaCuenta();" class="btn btn-secundary " data-dismiss="modal">Cancelar</button>

               </div>
               </section>
               </section>
             </div>
           </div>
         </div>
       </div><!-- fin del modal -->

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

  <script src="../js/iect.js"></script>
  <script src="../js/login.js"></script>

  <!--<script type="text/javascript">$( function() {$( "#fecha_inicio" ).datepicker({dateFormat:'yy-mm-dd',minDate: 0});$( "#fecha_termino" ).datepicker({dateFormat:'yy-mm-dd',minDate: 0});} );</script>-->

</body>
</html>
