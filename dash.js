function dynamicEntry()
{
    var skill=prompt("enter required skill");
    if (skill==null)
     {
     alert("dynamic search failed..!");
        return skill;
    }
    var education=prompt("enter required education");
    if (education==null)
     {
     alert("dynamic search failed..!");
        return education;
    }
    var confirms=confirm("are you sure to do this activity");
    if (confirms) 
    {
        document.form4.skills.value=skill;
        document.form4.edu.value=education;
        document.form4.submit();        
    }
     else
     {
      alert("dynamic search failed..!");
     }
}