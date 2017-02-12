function testLocalStorage()
{
    if (typeof(Storage) !== "undefined")
    {
        // Code for localStorage
        // Store
        localStorage.setItem("name", "Brandon");
        // Retrieve
        document.getElementById("result").innerHTML = localStorage.getItem("name") + " is my name, which is the local storage value.";
    }
    else
    {
    // Sorry! No Web Storage support..
    }
    return;
}
