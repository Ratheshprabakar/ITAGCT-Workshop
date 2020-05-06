//Copyright 2015 Pareto Software, LLC, released under an MIT license: http://opensource.org/licenses/MIT
$( document ).ready(function() {
		
		//Inputs that determine what fields to show
		var profession = $('#live_form input:radio[name=profession]');
		//Wrappers for all fields
		var Professional = $('#live_form textarea[id="details_Professional"]').parent();
		var Student = $('#live_form textarea[id="details_Student"]').parent();
        var Academic = $('#live_form textarea[id="details_Academic"]').parent();

		var all=Professional.add(Student).add(Academic);
		
		profession.change(function(){
			var value=this.value;						
			all.addClass('hidden'); //hide everything and reveal as needed
			
			if (value == 'Professional' || value == 'Startup/Self-Employed'){
				Professional.removeClass('hidden');								
			}
			else if (value == 'Student'){
				Student.removeClass('hidden');
			}		
			else if (value == 'Academic'){
				Academic.removeClass('hidden');
			}
		});	

});
