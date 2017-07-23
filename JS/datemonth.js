window.onload=initForm;

function initForm()
{
document.getElementById("months").selectedIndex=0;
document.getElementById("months").onchange=populatedays;
}

function populatedays()
{
var monthsdays=new Array(31,28,31,30,31,30,31,31,30,31,30,31);
var monthsStr=this.options[this.selectedIndex].value;

if(monthsStr != "")
{
var themonths=parseInt(monthsStr);

document.getElementById("days").options.length=0;
for(var i=0; i<monthsdays[themonths]; i++)
{
document.getElementById("days").options[i]=new Option(i+1);
}
}

}
