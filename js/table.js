function autoSelect(element_id) {

	var elem = document.getElementById(element_id);
	
	if (elem) {
	
		elem.select();
	}
}

function showLargeElement(atomic_number) {

	var all_elements = document.getElementById('element_large_container').childNodes;
	
	// hide all existing elements
	for (i = 0; i < all_elements.length; i++) {
	
		if (all_elements[i].id != null) {
			
			var elemID = all_elements[i].id;
			
			document.getElementById(elemID).style.display = 'none';
		}
	}
	
	// show the one we want
	document.getElementById('element_id_' + atomic_number).style.display = 'block';
}

function showDefaultElement() {

	showLargeElement(1);
}

function fadeOutState(state) {

	$('.state_' + state + ':not(.faded)').addClass('faded');
}

function fadeOutGroup(group) {

	$('.group_' + group + ':not(.faded)').addClass('faded');
}

function resetElementStates() {

	$('.faded').removeClass('faded');
}

function showElementGroups(group) {

	if (group == 'a' || group == 'ae' || group == 't' || group == 'om' || group == 'nm' || group == 'h' || group == 'ng' || group == 'otm') {
	
		switch (group) {
		
			case 'a':
				resetElementStates();
				fadeOutGroup('ae');
				fadeOutGroup('t');
				fadeOutGroup('om');
				fadeOutGroup('nm');
				fadeOutGroup('h');
				fadeOutGroup('ng');
				fadeOutGroup('otm');
				break;
			case 'ae':
				resetElementStates();
				fadeOutGroup('a');
				fadeOutGroup('t');
				fadeOutGroup('om');
				fadeOutGroup('nm');
				fadeOutGroup('h');
				fadeOutGroup('ng');
				fadeOutGroup('otm');
				break;
			case 't':
				resetElementStates();
				fadeOutGroup('a');
				fadeOutGroup('ae');
				fadeOutGroup('om');
				fadeOutGroup('nm');
				fadeOutGroup('h');
				fadeOutGroup('ng');
				fadeOutGroup('otm');
				break;
			case 'om':
				resetElementStates();
				fadeOutGroup('a');
				fadeOutGroup('ae');
				fadeOutGroup('t');
				fadeOutGroup('nm');
				fadeOutGroup('h');
				fadeOutGroup('ng');
				fadeOutGroup('otm');
				break;
			case 'nm':
				resetElementStates();
				fadeOutGroup('a');
				fadeOutGroup('ae');
				fadeOutGroup('om');
				fadeOutGroup('t');
				fadeOutGroup('h');
				fadeOutGroup('ng');
				fadeOutGroup('otm');
				break;
			case 'h':
				resetElementStates();
				fadeOutGroup('a');
				fadeOutGroup('ae');
				fadeOutGroup('om');
				fadeOutGroup('nm');
				fadeOutGroup('t');
				fadeOutGroup('ng');
				fadeOutGroup('otm');
				break;
			case 'ng':
				resetElementStates();
				fadeOutGroup('a');
				fadeOutGroup('ae');
				fadeOutGroup('om');
				fadeOutGroup('nm');
				fadeOutGroup('h');
				fadeOutGroup('t');
				fadeOutGroup('otm');
				break
			case 'otm':
				resetElementStates();
				fadeOutGroup('a');
				fadeOutGroup('ae');
				fadeOutGroup('om');
				fadeOutGroup('nm');
				fadeOutGroup('h');
				fadeOutGroup('ng');
				fadeOutGroup('t');
				break;
		}
	}
}

function showElementStates(state) {

	if (state == 's' || state == 'l' || state == 'g' || state == 'u') {
	
		// fade out elements which don't match requested state
		switch (state) {
		
			case 's':
				resetElementStates();
				fadeOutState('l');
				fadeOutState('g');
				fadeOutState('u');
				break;
			case 'l':
				resetElementStates();
				fadeOutState('s');
				fadeOutState('g');
				fadeOutState('u');
				break;
			case 'g':
				resetElementStates();
				fadeOutState('s');
				fadeOutState('l');
				fadeOutState('u');
				break;
			case 'u':
				resetElementStates();
				fadeOutState('s');
				fadeOutState('l');
				fadeOutState('g');
				break;
		}
	}
}

function toggleTextFrame(target_frame, opening_frame) {

	var target = document.getElementById(target_frame);
	var opener = document.getElementById(opening_frame);
		
	if (target.style.display == 'none') {

		// remove "selected" class from all items
		$('.selected').removeClass('selected');
		
		// need to show it; so set all frames to display: none
		document.getElementById('frame_description').style.display = 'none';
		document.getElementById('frame_source').style.display      = 'none';
		document.getElementById('frame_history').style.display     = 'none';
		document.getElementById('frame_compounds').style.display   = 'none';
		document.getElementById('frame_examples').style.display    = 'none';
		document.getElementById('frame_safety').style.display      = 'none';
		document.getElementById('frame_environment').style.display = 'none';
		document.getElementById('frame_additional').style.display  = 'none';
		
		// now set our requested frame to display: block
		target.style.display = 'block';
		$(opener).addClass('selected');
	}
	else {
	
		// element already shown; just hide it and do nothing else
		target.style.display = 'none';
		$('.selected').removeClass('selected');
	}
}

function toggleGroupFrame(target_frame, opening_frame) {

	var target = document.getElementById(target_frame);
	var opener = document.getElementById(opening_frame);
		
	if (target.style.display == 'none') {

		// remove "selected" class from all items
		$('.selected').removeClass('selected');
		
		// need to show it; so set all frames to display: none
		document.getElementById('frame_group_elements').style.display    = 'none';
		document.getElementById('frame_group_description').style.display = 'none';
		document.getElementById('frame_group_reactivity').style.display  = 'none';
		document.getElementById('frame_group_trends').style.display      = 'none';
		document.getElementById('frame_group_safety').style.display      = 'none';
		
		// now set our requested frame to display: block
		target.style.display = 'block';
		$(opener).addClass('selected');
	}
	else {
	
		// element already shown; just hide it and do nothing else
		target.style.display = 'none';
		$('.selected').removeClass('selected');
	}
}

function showMediaPane(target_pane, opener_link) {

	var target = document.getElementById(target_pane);
	var opener = document.getElementById(opener_link);
	
	// if opener is disabled, ignore rest of function
	if ($(opener).hasClass('disabled')) {
	
		// effectively "ignore" the click
		return;
	}
	
	if (target.style.display == 'none') {

		// remove "on" class from all links
		$('.on').removeClass('on');
		
		// need to show it; so set all frames to display: none
		document.getElementById('frame_media_videoClip').style.display         = 'none';
		document.getElementById('frame_media_electronStructure').style.display = 'none';
		document.getElementById('frame_media_compounds').style.display         = 'none';
		
		// now set our requested frame to display: block
		target.style.display = 'block';
		$(opener).addClass('on');
	}
	else {
	
		// element already shown; do nothing
	}
}

function toggleCompoundFrame(target_frame, opening_frame) {

	var target = document.getElementById(target_frame);
	var opener = document.getElementById(opening_frame);
		
	if (target.style.display == 'none') {

		// remove "selected" class from all items
		$('.selected').removeClass('selected');
		
		// need to show it; so set all frames to display: none
		document.getElementById('compound_background').style.display = 'none';
		document.getElementById('compound_uses').style.display       = 'none';
		document.getElementById('compound_works').style.display      = 'none';
		document.getElementById('compound_iupac').style.display      = 'none';
		
		// now set our requested frame to display: block
		target.style.display = 'block';
		$(opener).addClass('selected');
	}
	else {
	
		// element already shown; just hide it and do nothing else
		target.style.display = 'none';
		$('.selected').removeClass('selected');
	}
} 
