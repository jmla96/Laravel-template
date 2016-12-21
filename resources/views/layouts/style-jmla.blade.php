<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
    *{margin:0;padding:0;font-family: "Open Sans";}
    header { width: 100%;height:35px;background:#37474F;color:#EEEEEE; }
    header a {color:#ecf0f1;font-size: 13px;}
    button {
        background:red ;
        color:white;
        font-family: 'Arvo', serif;
    }
    section {
        float:left;
        width: 100%;
        position: relative;
        z-index: 50;
        padding:50px 0 50px 0 ;
        color:#2c3e50;
        background: white;
        font-size: 17px;
    }
    .hr-white {border: 1px solid #bdc3c7;width: 80%;}
    a:link{
        text-decoration: none;
    }
    .options-a {
        float:right;
        margin-right: 1%;
    }
    .button-a {
        margin-right:10px;
        border:none;
        background: none;
        height:50px;
        transition: 160ms;
        text-decoration: none;
    }
    .button-a:hover {
        border-bottom:5px solid #00ffea;
        text-decoration: none;
    }
    .button-active {
        margin-right:10px;
        border:none;
        background: none;
        height:50px;
        transition: 160ms;
        text-decoration: none;
        border-bottom:5px solid white;
    }
    .link-header {
        margin-right:15px;
        float: left;
    }
    .nameAplication {float: left;margin-top:15px;margin-left:13px;color:white;font-size: 23px;}
    footer {
        width:100%;
        min-height:350px;
        background: #2c3e50;
        padding-top:10px;
        color: #ffffff;
        float: left;
    }
    /* Remove margins and padding from the list, and add a black background color */
    ul.topnav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        width:100%;
        z-index: 999;
        font-size:15px;
        background: #4682B4;
    }
    ul.topnav-b {
        background: #4682B4;
        margin-top:-35px;
        position: fixed;
    }
    /* Float the list items side by side */
    ul.topnav li {float: right;}
    /* Style the links inside the list items */

    ul.topnav li a {
        display: inline-block;
        color: #ffffff;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        transition: 0.3s;
    }
    /* Hide the list item that contains the link that should open and close the topnav on small screens */
    ul.topnav li.icon {display: none;}
    /* When the screen is less than 680 pixels wide, hide all list items, except for the first one ("Home"). Show the list item that contains the link to open and close the topnav (li.icon) */
    @media screen and (max-width:680px) {
        ul.topnav li:not(:first-child) {display: none;}
        ul.topnav li.icon {
            float: right;
            display: inline-block;
        }
    }
    /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens */
    @media screen and (max-width:680px) {
        ul.topnav.responsive {position: fixed;background: black;}
        ul.topnav.responsive li.icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        ul.topnav.responsive li {
            float: none;
            display: inline;
        }
        ul.topnav.responsive li a {
            display: block;
            text-align: left;
        }
    }
    .font-size-18px { font-size: 18px; }
    .float-left { float:left; }
    .float-right { float:right; }
    .color-white{color:white;}
    .color-silver {color:#bdc3c7;}
    .orange {background: #e67e22;}
    .blue-dark {background: #34495e;}
    .remove-padding-l{ padding-left: 0 !important; }
    .remove-padding-r{ padding-right: 0 !important; }
    .width-six{max-width: 600px;padding:0 20px 0 20px}
    .m-5{ margin:5px;}
    .mt-5px { margin-top:5px;}

    h2 b { font-size:35px; }
    .imgdivone{float:left;width: 50%; }
    .imgdivtwo {padding:5px;-webkit-box-shadow: 0 6px 15px -5px rgba(0,0,0,0.75);
        -moz-box-shadow: 0 px 15px -5px rgba(0,0,0,0.75);
        box-shadow: 0 6px 15px -5px rgba(0,0,0,0.75);margin:10px;border-radius:5px;}
    .tittle-section { width: 100%;padding:7px 0  7px 0 ; float:left;color:#bdc3c7;}
    .item {max-height: 445px;}
    .hr-tittle {border:1px solid #34495e;width:200px;}
    h3{ font-size: 1em }
</style>