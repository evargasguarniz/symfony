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
		$('.item').eq(0).addClass('active');

	}
	addClassPrimerElemento();
	/*plagin venobox*/
	function venoboxInit(){
			$('.venobox').venobox({
	        // default: ''
	        border: '10px',             // default: '0'
	        bgcolor: '#5dff5e',         // default: '#fff'
	        titleattr: 'data-title',    // default: 'title'
	        numeratio: true,            // default: false
	        infinigall: true            // default: false
    	});
	}
	venoboxInit();


	/*incluyendo el mapa */
	function gomap(){
		    $("#map").goMap({ 
		    	zoom: 17,
		    	maptype: 'SATELLITE',
		        markers: [{  
		            latitude: -7.546959, 
		            longitude: -78.476283, 
		            id: 'info1', 
		            html: { 
		                content: 'Caserio de snajorge ', 
		                popup: true 
		            } 
		        }], 
		        hideByClick: false 
		    });   
		}

		gomap();

});