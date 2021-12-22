var radius = new Array();
	// Defaults
	radius["O"]=1.4; radius["C"]=1.7; radius["S"]=1.85; radius["N"]=1.5; radius["P"]=1.9; radius["Cl"]=1.75; radius["H"]=1.2;
	// All others
	radius["He"]=1.4; radius["Li"]=1.82; radius["Be"]=1.9; radius["B"]=1.8; radius["F"]=1.47;
	radius["Ne"]=1.54; radius["Na"]=2.27; radius["Mg"]=1.73; radius["Al"]=2.1; radius["Si"]=2.1;
	radius["Ar"]=1.88; radius["K"]=2.75; radius["Ca"]=2.4; radius["Sc"]=2.3; radius["Ti"]=2.15;
	radius["V"]=2.05; radius["Cr"]=2.0; radius["Mn"]=2.05; radius["Fe"]=2.0; radius["Co"]=2.0;
	radius["Ni"]=1.63; radius["Cu"]=1.4; radius["Zn"]=1.39; radius["Ga"]=1.87; radius["Ge"]=2.1;
	radius["As"]=1.85; radius["Se"]=1.9; radius["Br"]=1.85; radius["Kr"]=2.02; radius["Rb"]=2.9;
	radius["Sr"]=2.3; radius["Y"]=2.4; radius["Zr"]=2.3; radius["Nb"]=1.45; radius["Mo"]=2.1;
	radius["Tc"]=2.05; radius["Ru"]=1.3; radius["Rh"]=2.0; radius["Pd"]=1.63; radius["Ag"]=1.72;
	radius["Cd"]=1.58; radius["In"]=1.93; radius["Sn"]=2.17; radius["Sb"]=2.2; radius["Te"]=1.35;
	radius["I"]=1.98; radius["Xe"]=2.16; radius["Cs"]=3.0; radius["Ba"]=2.7; radius["Hf"]=2.25;
	radius["Ta"]=2.2; radius["W"]=1.35; radius["Re"]=1.35; radius["Os"]=2.0; radius["Ir"]=2.0;
	radius["Pt"]=1.75; radius["Au"]=1.66; radius["Hg"]=1.55; radius["Tl"]=1.96; radius["Pb"]=2.02; radius["Bi"]=2.3;
	// Lanthanides
	radius["La"]=1.87; radius["Ce"]=1.81; radius["Pr"]=1.82; radius["Nd"]=1.81; radius["Pm"]=1.83;
	radius["Sm"]=1.8; radius["Eu"]=1.8; radius["Gd"]=1.8; radius["Tb"]=1.77; radius["Dy"]=1.78;
	radius["Ho"]=1.76; radius["Er"]=1.76; radius["Tm"]=1.76; radius["Yb"]=1.76; radius["Lu"]=1.74;

	//var elements = new Array("O", "C", "S", "N", "H"); // String with default elements
	//var elements = "O\t1.4\nC\t1.7\nS\t1.85\nN\t1.5\nH\t1.2";
	var elements = "";
	var new_e = new Array(); // User-added elements
	var new_ename = new Array(); // User-added element names
	var r = new Array(); // User-defined radius
	var chk = new Array(); // Checked elements
	var add = 0; // Count added elements
	var te; // Temp elements
	var en; // Temp element names

	// Ex: addNewTable(Na, Sodium)
	function addNewTable(e, ename) {
		console.log("usando addNewTable");
		var table = '<table border=1 cellpadding=1 cellspacing=1>';
		ename += ' (rad: ' + radius[e] + ')'; // Concat vdW radius
		// Add first element
		if (add == 0) {
			//elements[elements.length] = e; //guarda letra elemento al final de la lista
			//elements= elements+"\n"+e+"\t"+radius[e];
			//console.log("elemento: ",e);
			add++;
			te = e;
			en = ename;
			table += '<tr><td width=250px><input type="checkbox" id="el_'+e+'"  checked> '+ename+'</td></tr>';
			$("#modal-periodictable").hide();
			swal("Added element " + e + " to the list","","success");

		}
		// Add from 2nd element ...
		else {
			new_e[add-1] = te; // Element
			new_ename[add-1] = en; // Element name
			for (var i=0; i<add; i++) {
				//r[i] = document.getElementById('rd_'+new_e[i]).value;
				chk[i] = 0;
				if (document.getElementById('el_'+new_e[i]).checked == true)
					chk[i] = 1;
			}
			//r[add] = radius[e];
			for (var j=0; j<add; j++) {
				if (chk[j] == 1) {
					var flag_c1 = "";
					var flag_c2 = "";
					var flag_d = "";
					/*if (document.getElementById('rd_'+new_e[j]).disabled == true) {
						flag_c1 = "checked";
						flag_d = "disabled";
					}
					else {
						flag_c1 = "checked";
						flag_c2 = "checked";
					}*/
					table += '<tr><td width=250px><input type="checkbox" id="el_'+new_e[j]+'"  '+flag_c1+'> '+new_ename[j]+'</td></tr>';
				}
				else {
					var flag_c = "";
					var flag_d = "";
					/*if (document.getElementById('rd_'+new_e[j]).disabled == true)
						flag_d = "disabled";
					else
						flag_c = "checked";*/
					table += '<tr><td width=250px><input type="checkbox" id="el_'+new_e[j]+'" > '+new_ename[j]+'</td></tr>';
				}
			}
			// Add new element only if doesn't exist in array
			if (isInArray(e, new_e) == false) {
				//console.log("elemento: ",e);
				//elements[elements.length] = e;
				//elements= elements+"\n"+e+"\t"+radius[e];
				add++;
				te = e;
				en = ename;
				table += '<tr><td width=250px><input type="checkbox" id="el_'+e+'"  checked> '+ename+'</td></tr>';
				$("#modal-periodictable").hide();
				swal("Added element " + e + " to the list","","success");
			}
			else {
				swal("Wait","Element " + e + " is already on the list, please choose other.","info");
			}
		}
		table += '</table>';
		// Create new table with new elements by user
		document.getElementById('new_table').innerHTML = table;
		// Refresh list of elements with elements array
		//console.log("elements1=",elements);
		//document.getElementById("elements").value = elements;
		//$("#elements").attr("value", elements);
	}

	// Search a value in an array
	function isInArray(needle, arr) {
		console.log("usando isInArray");
		for (var i=0; i<arr.length; i++) {
			if (arr[i] == needle)
				return true;
		}
		return false;
	}

	// Add or delete elements from table, available on the next version
	function checkElement(elem) {
		console.log("usando chekelement");
		var ecb = "el_" + elem; // Element checkbox id
		var rcb = "rc_" + elem; // Radius checkbox id
		// Enable or disable name in checkbox
		if (document.getElementById(ecb).checked == true) {
			//elements.push(elem); // Add element to array
			//document.getElementById(rcb).disabled = false; // Enable radius option
			//alert("Added element " + elem + " to the list");
		}
		else {
			for (var i=0; i<elements.length; i++) {
				if (elements[i] == elem) // Delete match from array
					delete elements[i];
			}
			//document.getElementById(rcb).disabled = true; // Disable radius option
			//alert("Removed element " + elem + " from the list");
		}
		//console.log("elements2=",elements);
		//document.getElementById("elements").value = elements; // Refresh string with elements
		$("#elements").attr("value", elements);
		return;
	}


	// Periodic table dialog config
	$(function() {
		$('#periodic_table').dialog({
			iconCls: 'icon-atom',
			modal: true,
			closed: true,
			draggable: false,
			resizable: false,
			width: 910,
			height: 520,
			top: 820,
			left: 195
		});
	});
	function open_periodic_table() {
		$('#modal-periodictable').show();
	}
	function closeperiodictable(){
	  $("#modal-periodictable").hide();
	  console.log('cerrando');
	}
	function showElementBasic(e){
		swal("Wait","Element " + e + " is already on the list, please choose other.","info");
	}
