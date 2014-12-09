$(function(){
	$('#hiperclot_save').click(function(e){
		e.preventDefault();
		var patient=$('#patient').html();
		var antiphs_syndr=		$('#antiphs_syndr').is(":checked");
		var protr20210_mutation=$('#protr20210_mutation').is(":checked");
		var c_protein_resist=	$('#c_protein_resist').is(":checked");
		var antitrbiii_deficiency=$('#antitrbiii_deficiency').is(":checked");
		var prot_s_deficiency=	$('#prot_s_deficiency').is(":checked");
		var prot_c_deficiency=	$('#prot_c_deficiency').is(":checked");
		var unspecific_tromboph=$('#unspecific_tromboph').is(":checked");
		var hyperhomocist=		$('#hyperhomocist').is(":checked");
		var neoplasia=			$('#neoplasia').is(":checked");
		var esplenectomy=		$('#esplenectomy').is(":checked");
		var other_hyperclott_disord=$('#other_hyperclott_disord').val();

		var base=$('#base').html();
		$.post(
			base+'/patient/'+patient+'/hyperclotting',
			{
				patient:patient,
				antiphs_syndr:antiphs_syndr,
				protr20210_mutation:protr20210_mutation,
				c_protein_resist:c_protein_resist,
				antitrbiii_deficiency:antitrbiii_deficiency,
				prot_s_deficiency:prot_s_deficiency,
				prot_c_deficiency:prot_c_deficiency,
				unspecific_tromboph:unspecific_tromboph,
				hyperhomocist:hyperhomocist,
				neoplasia:neoplasia,
				esplenectomy:esplenectomy,
				other_hyperclott_disord:other_hyperclott_disord
			},
			function(d){
				if (d==1) {
					window.location.href=base
					+'/patient/'
					+patient
					+'/clinic';
				}
			}
			)
		;
	});
});