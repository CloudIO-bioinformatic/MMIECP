<head>
	<meta charset="UTF-8">
</head>
<link rel="stylesheet" type="text/css" href="easyui.css">
<link rel="stylesheet" type="text/css" href="icon.css">
<script type="text/JavaScript" src="jquery.min.js"></script>
<script type="text/JavaScript" src="jquery.easyui.min.js"></script>

<script language="JavaScript" type="text/JavaScript">
	// Set elements and their van der Waals radius
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

	var elements = new Array("O", "C", "S", "N", "H"); // String with default elements
	var new_e = new Array(); // User-added elements
	var new_ename = new Array(); // User-added element names
	var r = new Array(); // User-defined radius
	var chk = new Array(); // Checked elements
	var add = 0; // Count added elements
	var te; // Temp elements
	var en; // Temp element names

	// Ex: addNewTable(Na, Sodium)
	function addNewTable(e, ename) {
		var table = '<table border=1 cellpadding=1 cellspacing=1>';
		ename += ' (rad: ' + radius[e] + ')'; // Concat vdW radius
		// Add first element
		if (add == 0) {
			elements[elements.length] = e;
			add++;
			te = e;
			en = ename;
			table += '<tr><td width=150px><input type="checkbox" id="el_'+e+'" onclick="checkElement('+"'"+e+"'"+');" checked> '+ename+'</td><td width=60px><input type="checkbox" id="rc_'+e+'" onclick="enableRadius('+"'rd_"+e+"'"+');"> <input type="text" name="rd_'+e+'" id="rd_'+e+'" value="'+radius[e]+'" onblur="checkRadius('+"'rd_"+e+"'"+');" size="4" maxlength="4" disabled></td></tr>';
			alert("Added element " + e + " to the list");
		}
		// Add from 2nd element ...
		else {
			new_e[add-1] = te; // Element
			new_ename[add-1] = en; // Element name
			for (var i=0; i<add; i++) {
				r[i] = document.getElementById('rd_'+new_e[i]).value;
				chk[i] = 0;
				if (document.getElementById('el_'+new_e[i]).checked == true)
					chk[i] = 1;
			}
			r[add] = radius[e];
			for (var j=0; j<add; j++) {
				if (chk[j] == 1) {
					var flag_c1 = "";
					var flag_c2 = "";
					var flag_d = "";
					if (document.getElementById('rd_'+new_e[j]).disabled == true) {
						flag_c1 = "checked";
						flag_d = "disabled";
					}
					else {
						flag_c1 = "checked";
						flag_c2 = "checked";
					}
					table += '<tr><td width=150px><input type="checkbox" id="el_'+new_e[j]+'" onclick="checkElement('+"'"+new_e[j]+"'"+');" '+flag_c1+'> '+new_ename[j]+'</td><td width=60px><input type="checkbox" id="rc_'+new_e[j]+'" onclick="enableRadius('+"'rd_"+new_e[j]+"'"+');" '+flag_c2+'> <input type="text" name="rd_'+new_e[j]+'" id="rd_'+new_e[j]+'" value="'+r[j]+'" onblur="checkRadius('+"'rd_"+new_e[j]+"'"+');" size="4" maxlength="4" '+flag_d+'></td></tr>';
				}
				else {
					var flag_c = "";
					var flag_d = "";
					if (document.getElementById('rd_'+new_e[j]).disabled == true)
						flag_d = "disabled";
					else
						flag_c = "checked";
					table += '<tr><td width=150px><input type="checkbox" id="el_'+new_e[j]+'" onclick="checkElement('+"'"+new_e[j]+"'"+');"> '+new_ename[j]+'</td><td width=60px><input type="checkbox" id="rc_'+new_e[j]+'" onclick="enableRadius('+"'rd_"+new_e[j]+"'"+');" '+flag_c+'> <input type="text" name="rd_'+new_e[j]+'" id="rd_'+new_e[j]+'" value="'+r[j]+'" onblur="checkRadius('+"'rd_"+new_e[j]+"'"+');" size="4" maxlength="4" '+flag_d+'></td></tr>';
				}
			}
			// Add new element only if doesn't exist in array
			if (isInArray(e, new_e) == false) {
				elements[elements.length] = e;
				add++;
				te = e;
				en = ename;
				table += '<tr><td width=150px><input type="checkbox" id="el_'+e+'" onclick="checkElement('+"'"+e+"'"+');" checked> '+ename+'</td><td width=60px><input type="checkbox" id="rc_'+e+'" onclick="enableRadius('+"'rd_"+e+"'"+');"> <input type="text" name="rd_'+e+'" id="rd_'+e+'" value="'+radius[e]+'" onblur="checkRadius('+"'rd_"+e+"'"+');" size="4" maxlength="4" disabled></td></tr>';
				alert("Added element " + e + " to the list");
			}
			else {
				alert("Element " + e + " is already on the list");
			}
		}
		table += '</table>';
		// Create new table with new elements by user
		document.getElementById('new_table').innerHTML = table;
		// Refresh list of elements with elements array
		document.getElementById("elements").value = elements;
	}

	// Search a value in an array
	function isInArray(needle, arr) {
		for (var i=0; i<arr.length; i++) {
			if (arr[i] == needle)
				return true;
		}
		return false;
	}

	// Add or delete elements from table
	function checkElement(elem) {
		var ecb = "el_" + elem; // Element checkbox id
		var rcb = "rc_" + elem; // Radius checkbox id
		// Enable or disable name in checkbox
		if (document.getElementById(ecb).checked == true) {
			elements.push(elem); // Add element to array
			document.getElementById(rcb).disabled = false; // Enable radius option
			alert("Added element " + elem + " to the list");
		}
		else {
			for (var i=0; i<elements.length; i++) {
				if (elements[i] == elem) // Delete match from array
					delete elements[i];
			}
			document.getElementById(rcb).disabled = true; // Disable radius option
			alert("Removed element " + elem + " from the list");
		}
		document.getElementById("elements").value = elements; // Refresh string with elements
		return;
	}

	// Enable or disable vdW radius value text
	function enableRadius(elem) {
		if (document.getElementById(elem).disabled == true)
			document.getElementById(elem).disabled = false;
		else
			document.getElementById(elem).disabled = true;
		return;
	}

	// Check changed vdW radius value
	function checkRadius(elemId) {
		var elem = elemId.substr(3); // Ex: elemId = el_O get elem = O
		var rad = document.getElementById(elemId).value;
		// Check decimal format
		var decimal = rad.indexOf(".");
		if (decimal == -1) { // 1 to 1.0
			rad += ".0";
		}
		if (!isNaN(rad)) {
			// Set max vdW radius value to 3.0
			if (rad < 1.0 || rad > 3.0) {
				rad = radius[elem];
				alert("Set a van der Waals radius between 1.0 and 3.0");
			}
		}
		else {
			rad = radius[elem];
			alert("Radius is not a number");
		}
		if (rad == "1." || rad == "2." || rad == "3.") { // 1. to 1.0
			rad += "0";
		}
		document.getElementById(elemId).value = rad;
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
		$('#periodic_table').dialog('open');
	}
	</script>

<div>
	<!-- Default elements table ! -->
	<table cellpadding="1" cellspacing="1" border="1">
		<tr height="25px" style="background-color:silver;">
			<th width="150px">Element (default vdW radius)</th><th width="60px">vdW radius</th>
		</tr>
		<tr>
			<td><input type="checkbox" id="el_O" onclick="checkElement('O');" checked> Oxygen (rad: 1.4)</td>
			<td><input type="checkbox" id="rc_O" onclick="enableRadius('rd_O');"> <input type="text" name="rd_O" id="rd_O" value="1.4" onblur="checkRadius('rd_O');" size="4" maxlength="4" disabled></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="el_C" onclick="checkElement('C');" checked> Carbon (rad: 1.7)</td>
			<td><input type="checkbox" id="rc_C" onclick="enableRadius('rd_C');"> <input type="text" name="rd_C" id="rd_C" value="1.7" onblur="checkRadius('rd_C');" size="4" maxlength="4" disabled></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="el_S" onclick="checkElement('S');" checked> Sulfur (rad: 1.85)</td>
			<td><input type="checkbox" id="rc_S" onclick="enableRadius('rd_S');"> <input type="text" name="rd_S" id="rd_S" value="1.85" onblur="checkRadius('rd_S');" size="4" maxlength="4" disabled></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="el_N" onclick="checkElement('N');" checked> Nitrogen (rad: 1.5)</td>
			<td><input type="checkbox" id="rc_N" onclick="enableRadius('rd_N');"> <input type="text" name="rd_N" id="rd_N" value="1.5" onblur="checkRadius('rd_N');" size="4" maxlength="4" disabled></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="el_P" onclick="checkElement('P');"> Phosphorus (rad: 1.9)</td>
			<td><input type="checkbox" id="rc_P" onclick="enableRadius('rd_P');" disabled> <input type="text" name="rd_P" id="rd_P" value="1.9" onblur="checkRadius('rd_P');" size="4" maxlength="4" disabled></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="el_Cl" onclick="checkElement('Cl');"> Chlorine (rad: 1.75)</td>
			<td><input type="checkbox" id="rc_Cl" onclick="enableRadius('rd_Cl');" disabled> <input type="text" name="rd_Cl" id="rd_Cl" value="1.75" onblur="checkRadius('rd_Cl');" size="4" maxlength="4" disabled></td>
		</tr>
		<tr>
			<td><input type="checkbox" id="el_H" onclick="checkElement('H');" checked> Hydrogen (rad: 1.2)</td>
			<td><input type="checkbox" id="rc_H" onclick="enableRadius('rd_H');"> <input type="text" name="rd_H" id="rd_H" value="1.2" onblur="checkRadius('rd_H');" size="4" maxlength="4" disabled></td>
	</table>
</div>

<!-- Table with new elements ! -->
<div id="new_table"></div>

<!-- List of elements ! -->
<input id="elements" name="elements" value="O,C,S,N,H" size="30" type="hidden">

<div style="margin:10px 0;">
	<a href="javascript:;" onclick="open_periodic_table();">Add Element</a>
	<div id="periodic_table" title="Periodic Table of Elements">
		<?php include "table.php";?>
	</div>
</div>
