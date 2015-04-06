$(document).ready(function(){
/*form edit caserios*/
function addClassformEditControl(){
	$('#form-edit-caserios > div').addClass("form-group");
	$('#form-edit-caserios > div > button').addClass("btn btn-info");
	$('#form-edit-caserios > div > label').addClass("");
	}
	addClassformEditControl();

function addClassformDeleteControl(){
	$('#form-delete-caserios > div > button').addClass("btn btn-danger");
	$('#form-delete-caserios > div > label').addClass("");
	}
	addClassformDeleteControl();

	function addClassPrimerElemento(){
		$('.item').eq(0).addClass('active')

	}
	addClassPrimerElemento();
});