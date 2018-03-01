function Duet() 
{
    var duet = document.getElementById("type").value;
    if (duet == "Duet") 
    {
        document.getElementById("duet").style.visibility = "visible";
        document.getElementById("student1").innerHTML = "Student 1";
        document.getElementById("s2First").required = true;
        document.getElementById("s2Last").required = true;
        document.getElementById("studentID2").required = true;
    } 
    else 
    {
        document.getElementById("duet").style.visibility = "hidden";
        document.getElementById("student1").innerHTML = "Student";
        document.getElementById("s2First").required = false;
        document.getElementById("s2Last").required = false;
        document.getElementById("studentID2").required = false;
    }
}

function ID() 
{
    var ID = document.getElementById("studentID").value;
    var key = event.key;
    if (ID.match(/^\d{2}$/) && key != "Backspace") 
    {
        document.getElementById("studentID").value += '-';
    } 
    else if (ID.match(/^\d{2}\-\d{3}$/) && key != "Backspace") 
    {
        document.getElementById("studentID").value += '-';
    }
}

function ID2() 
{
    var ID = document.getElementById("studentID2").value;
    var key = event.key;
    if (ID.match(/^\d{2}$/) && key != "Backspace") 
    {
        document.getElementById("studentID2").value += '-';
    } 
    else if (ID.match(/^\d{2}\-\d{3}$/) && key != "Backspace") 
    {
        document.getElementById("studentID2").value += '-';
    }
}

function validate() 
{
    var s1First  = document.getElementById("sFirst").value;
    var s1Last   = document.getElementById("sLast").value;
    var s1ID     = document.getElementById("studentID").value;
    var s2First  = document.getElementById("s2First").value;
    var s2Last   = document.getElementById("s2Last").value;
    var s2ID     = document.getElementById("studentID2").value;
    var building = document.getElementById("building").value;
    var room     = document.getElementById("room").value;
    var pType    = document.getElementById("type").value;
    var letters  = /^[A-Za-z]+$/;
    var ID       = /^[0-9]{2}-[0-9]{3}-[0-9]{4}/;
    var number   = /^[0-9]+$/;
    
    if (letters.test(s1First) && letters.test(s1Last) && ID.test(s1ID) &&
        ((pType == "Duet" && letters.test(s2First) && letters.test(s2Last) && ID.test(s2ID)) ||
            pType != "Duet") &&
        letters.test(building) && number.test(room)) 
    {
        writeFile();
        return true;
    } 
    else 
    {
        if (!(number.test(room))) 
        {
            document.getElementById("room").focus();
            document.getElementById("roomTxt").innerHTML = "Invalid Entry";
            document.getElementById("roomTxt").style.color = "red";
            document.getElementById("room").style.borderColor = "red";
        }
        if (!(letters.test(building))) 
        {
            document.getElementById("building").focus();
            document.getElementById("buildingTxt").innerHTML = "Invalid Entry";
            document.getElementById("buildingTxt").style.color = "red";
            document.getElementById("building").style.borderColor = "red";
        }
        if (pType == "Duet" && !(ID.test(s2ID))) 
        {
            document.getElementById("studentID2").focus();
            document.getElementById("studentID2Txt").innerHTML = "Invalid Entry";
            document.getElementById("studentID2Txt").style.color = "red";
            document.getElementById("studentID2").style.borderColor = "red";
        }
        if (pType == "Duet" && !(letters.test(s2Last))) 
        {
            document.getElementById("s2Last").focus();
            document.getElementById("s2LastTxt").innerHTML = "Invalid Entry";
            document.getElementById("s2LastTxt").style.color = "red";
            document.getElementById("s2Last").style.borderColor = "red";
        }
        if (pType == "Duet" && !(letters.test(s2First))) 
        {
            document.getElementById("s2First").focus();
            document.getElementById("s2FirstTxt").innerHTML = "Invalid Entry";
            document.getElementById("s2FirstTxt").style.color = "red";
            document.getElementById("s2First").style.borderColor = "red";
        }
        if (!ID.test(s1ID)) 
        {
            document.getElementById("studentID").focus();
            document.getElementById("studentIDTxt").innerHTML = "Invalid Entry";
            document.getElementById("studentIDTxt").style.color = "red";
            document.getElementById("studentID").style.borderColor = "red";
        }
        if (!letters.test(s1Last)) 
        {
            document.getElementById("sLast").focus();
            document.getElementById("sLastTxt").innerHTML = "Invalid Entry";
            document.getElementById("sLastTxt").style.color = "red";
            document.getElementById("sLast").style.borderColor = "red";
        }
        if (!letters.test(s1First)) 
        {
            document.getElementById("sFirst").focus();
            document.getElementById("sFirstTxt").innerHTML = "Invalid Entry";
            document.getElementById("sFirstTxt").style.color = "red";
            document.getElementById("sFirst").style.borderColor = "red";
        }
        return false;
    }
}

function setBack(elementName) 
{
    document.getElementById(elementName).style.borderColor = "black";
    document.getElementById(elementName + "Txt").style.color = "black";
    if (elementName == "sFirst") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "First Name:";
    } 
    else if (elementName == "sLast") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "Last Name:";
    } 
    else if (elementName == "studentID") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "Student ID:";
    } 
    else if (elementName == "s2First") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "First Name:";
    } 
    else if (elementName == "s2Last") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "Last Name:";
    } 
    else if (elementName == "studentID2") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "Student ID:";
    } 
    else if (elementName == "building") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "Building:";
    } 
    else if (elementName == "room") 
    {
        document.getElementById(elementName + "Txt").innerHTML = "Room #:";
    }
}

var httpRequest = new XMLHttpRequest(); 

function writeFile() 
{
    var s1First    = document.getElementById("sFirst").value;
    var s1Last     = document.getElementById("sLast").value;
    var s1ID       = document.getElementById("studentID").value;
    var s2First    = document.getElementById("s2First").value;
    var s2Last     = document.getElementById("s2Last").value;
    var s2ID       = document.getElementById("studentID2").value;
    var building   = document.getElementById("building").value;
    var room       = document.getElementById("room").value;
    var pType      = document.getElementById("type").value;
    var instrument = document.getElementById("instrument").value;
    var skill      = document.getElementById("level").value;
    var pTime      = document.getElementById("time").value;
    
    httpRequest.onreadystatechange = function () 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
        } 
        else if (this.readyState == 4) 
        {
            alert("Failure trying to open file to write. Status is: " + this.statusText);
        }
    };
    httpRequest.open("GET", "assign12.php?s1First=" + s1First + "&s1Last=" + s1Last + "&s1ID=" + s1ID + "&duet=" + pType + "&s2First=" + s2First + "&s2Last=" + s2Last + "&s2ID=" + s2ID + "&instrument=" + instrument + "&stime=" + pTime + "&building=" + building + "&room=" + room + "&skill=" + skill, false);
    httpRequest.send();
}

function displayStudents() 
{
    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function () 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            var prepareJ = '{ "student" : [ ' + this.responseText + "] }";
            regList = JSON.parse(prepareJ);
            var regTable =
                "<tr><th>Name</th><th>ID</th><th>Instrument</th>" +
                "<th>Type</th><th>Skill</th><th>Time</th><th>Location</th></tr>";
            for (var i = 0; i < regList.student.length; i++) 
            {
                regTable += "<tr><td>" + regList.student[i].s1First + " " + regList.student[i].s1Last +
                    "<br/>" + regList.student[i].s2First + " " + regList.student[i].s2Last + 
                    "</td><td>" + regList.student[i].s1ID + "<br/>" + regList.student[i].s2ID + "</td><td>" + 
                    regList.student[i].instrument + "</td><td>" +
                    regList.student[i].duet + "</td><td>" + regList.student[i].skill + "</td><td>" +
                    regList.student[i].stime + "</td><td>" + regList.student[i].building + " " +
                    regList.student[i].room + "</td></tr>";
            }
            document.getElementById("display-list").innerHTML = regTable;
        } 
    };
    
    httpRequest.open("GET", "public_txt/register.json", true);
    httpRequest.send();
}
