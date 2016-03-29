$( document ).ready(function() {
    $("#DateLimiteDevis").datepicker();
});

function formInfos()
{
	var formInfos=document.getElementById("formInfos");
	formInfos.style.display = "block";
	var formDevis=document.getElementById("formDevis");
	formDevis.style.display = "none";
	var formRdv=document.getElementById("formRdv");
	formRdv.style.display = "none";
	var formAutre=document.getElementById("formAutre");
	formAutre.style.display = "none";
}

function formDevis()
{
	var formInfos=document.getElementById("formInfos");
	formInfos.style.display = "none";
	var formDevis=document.getElementById("formDevis");
	formDevis.style.display = "block";
	var formRdv=document.getElementById("formRdv");
	formRdv.style.display = "none";
	var formAutre=document.getElementById("formAutre");
	formAutre.style.display = "none";
}

function formRendezVous()
{
	var formInfos=document.getElementById("formInfos");
	formInfos.style.display = "none";
	var formDevis=document.getElementById("formDevis");
	formDevis.style.display = "none";
	var formRdv=document.getElementById("formRdv");
	formRdv.style.display = "block";
	var formAutre=document.getElementById("formAutre");
	formAutre.style.display = "none";
}

function formAutre()
{
	var formInfos=document.getElementById("formInfos");
	formInfos.style.display = "none";
	var formDevis=document.getElementById("formDevis");
	formDevis.style.display = "none";
	var formRdv=document.getElementById("formRdv");
	formRdv.style.display = "none";
	var formAutre=document.getElementById("formAutre");
	formAutre.style.display = "block";
}

function validateDevis(form)
{
	alert("Validation Devis");
	form.submit();
}
function validateInfos(form)
{
	var name=document.getElementByName("nameInfos");
	var firstname=document.getElementByName("firstnameInfos");
	var companyName=document.getElementByName("companyInfos");
	var mail=document.getElementByName("emailInfos");
	var phone=document.getElementByName("phoneInfos");
	var message=document.getElementByName("textContactInfos");
	if(name.value()==null)
	{
		alert("name vide");
	}
	form.submit();
}
function validateAutre(form)
{
	alert("Validation Autre");
	form.submit();
}
function validateRdv(form)
{
	alert("Validation Rdv");
	form.submit();
}
