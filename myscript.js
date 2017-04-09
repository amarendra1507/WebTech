
function addTextbox(){	
	var newElement = document.createElement('input');
	newElement.value="New textbox";
	var item=0;
	newElement.type="text";
	var form=document.getElementById('contentholder');
	if(form.childElementCount<8)
	{
		newElement.id=item;
		form.appendChild(newElement);
		item=item+1;
	}

	return true;
}

function addButton(){	
	var newElement = document.createElement('input');
	newElement.value="New Button";
	var item=0;
	newElement.type="button";
	var form=document.getElementById('buttoncontent');
	if(form.childElementCount<3)
	{
		newElement.id=item;
		form.appendChild(newElement);
		item=item+1;
	}

	return true;
}

function removebutton(){
	var form=document.getElementById('buttoncontent');
	if(form.childElementCount>=0){
		form.removeChild(form.childNodes[form.childElementCount]);
	}	
}

function removeitem(){
	var form=document.getElementById('contentholder');
	if(form.childElementCount>=0){
		form.removeChild(form.childNodes[form.childElementCount]);
	}	
}