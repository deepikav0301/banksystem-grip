//JavaScript file for index.php - Online Banking System
//functions to change display while navigating between tabs

function viewHome() {
    document.getElementById('home').style.display = "block";
    document.getElementById('customers').style.display = "none";
    document.getElementById('transfer').style.display = "none";
    document.getElementById('history').style.display = "none";
    document.getElementById('contact').style.display = "none";
    document.getElementById('link1').classList.add('active');
    document.getElementById('link2').classList.remove('active');
    document.getElementById('link3').classList.remove('active');
    document.getElementById('link4').classList.remove('active');
    document.getElementById('link5').classList.remove('active');
}
function viewCustomers() {
    document.getElementById('link2').classList.add('active');
    document.getElementById('link1').classList.remove('active');
    document.getElementById('link3').classList.remove('active');
    document.getElementById('link4').classList.remove('active');
    document.getElementById('link5').classList.remove('active');
    document.getElementById('contact').style.display = "none";
    document.getElementById('customers').style.display = "block";
    document.getElementById('home').style.display = "none";
    document.getElementById('history').style.display = "none";
    document.getElementById('transfer').style.display = "none";
}
function viewTransfer() {
    document.getElementById('contact').style.display = "none";
    document.getElementById('transfer').style.display = "block";
    document.getElementById('home').style.display = "none";
    document.getElementById('history').style.display = "none";
    document.getElementById('customers').style.display = "none";
    document.getElementById('link3').classList.add('active');
    document.getElementById('link1').classList.remove('active');
    document.getElementById('link2').classList.remove('active');
    document.getElementById('link4').classList.remove('active');
    document.getElementById('link5').classList.remove('active');
}
function viewHistory() {
    document.getElementById('contact').style.display = "none";
    document.getElementById('history').style.display = "block";
    document.getElementById('transfer').style.display = "none";
    document.getElementById('home').style.display = "none";
    document.getElementById('customers').style.display = "none";
    document.getElementById('link4').classList.add('active');
    document.getElementById('link2').classList.remove('active');
    document.getElementById('link3').classList.remove('active');
    document.getElementById('link1').classList.remove('active');
    document.getElementById('link5').classList.remove('active');
}
function viewContact() {
    document.getElementById('home').style.display = "none";
    document.getElementById('customers').style.display = "none";
    document.getElementById('transfer').style.display = "none";
    document.getElementById('history').style.display = "none";
    document.getElementById('contact').style.display = "block";
    document.getElementById('link5').classList.add('active');
    document.getElementById('link2').classList.remove('active');
    document.getElementById('link3').classList.remove('active');
    document.getElementById('link4').classList.remove('active');
    document.getElementById('link1').classList.remove('active');
}
