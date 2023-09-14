
function bars(){
	if(document.getElementById('navi').style.display == "block"){
		document.getElementById('navi').style.display = "none";
	}else{
		document.getElementById('navi').style.display = "block";
	}
}




function show(){
	if(document.getElementById("submenu").style.display == "block"){
		document.getElementById("submenu").style.display = "none";
		document.getElementById('drop1').className = "fas fa-angle-right";
	}else{
		document.getElementById("submenu").style.display = "block";
		document.getElementById('submenu2').style.display = "none";
		document.getElementById('submenu3').style.display = "none";
		document.getElementById('drop1').className = "fas fa-angle-down";
		document.getElementById('drop2').className = "fas fa-angle-right";
		document.getElementById('drop3').className = "fas fa-angle-right";
	}
}

function show1(){
	if(document.getElementById('submenu2').style.display== "block"){
		document.getElementById('submenu2').style.display = "none";
		document.getElementById('drop2').className = "fas fa-angle-right";
	}else{
		document.getElementById('submenu2').style.display = "block";
		document.getElementById('submenu').style.display = "none";
		document.getElementById('submenu3').style.display = "none";
		document.getElementById('drop2').className = "fas fa-angle-down";
		document.getElementById('drop1').className = "fas fa-angle-right";
		document.getElementById('drop3').className = "fas fa-angle-right";
	}
}

function show3(){
	if(document.getElementById('submenu3').style.display == "block"){
		document.getElementById('submenu3').style.display = "none";
		document.getElementById('drop3').className = "fas fa-angle-right";
	}
	else{
		document.getElementById('submenu3').style.display = "block";
		document.getElementById("submenu").style.display = "none";
		document.getElementById('submenu2').style.display = "none";
		document.getElementById('drop3').className = "fas fa-angle-down";
		document.getElementById('drop1').className = "fas fa-angle-right";
		document.getElementById('drop2').className = "fas fa-angle-right";
	}
}


	



$(document).ready(function () {
	$('#dtBasicExample').DataTable({
		responsive: true,
		pageLength: 10,
		lengthMenu: [10, 20, 30, 50, 100],
		scrollY: '268',
		
		dom: 'Blfrtip',
		buttons: [
		  {  
			 extend: 'copy'
		  },
		  {
			 extend: 'pdf',
			 exportOptions: {
			   columns: [0,1] // Column index which needs to export
			 }
		  },
		  {
			 extend: 'csv',
		  },
		  {
			 extend: 'excel',
		  }
		]   
		
	});

	$('.dataTables_length').addClass('bs-select');

	
	 
	
	});

	

	