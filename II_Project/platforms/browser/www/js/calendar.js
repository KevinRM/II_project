var calendar = {
    date : new Date(), // Date variable to determine which month to show and which date to select
	months : ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Augosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
	days : ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
	
	createCalendar : function() {
		return this.months;
	}
}

$(document).ready(function() {
	document.getElementById('texto').innerHTML = calendar.createCalendar();
})