<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        
        <meta charset = "utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        
        <title> Michael Janes: Peronal Website </title>

    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            Michael Janes
        </header>
        <hr/>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php"><strong>About</strong></a>
            <a href="contact.php">Contact</a>
        </nav>
        
        <br/><br/>
        
        <div id="content">
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>Java</td>
                    <td>3</td>
                </tr>
                <tr class="table-row">
                    <td>C++</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td>PHP</td>
                    <td>1</td>
                </tr>
            </table>
            
            <br/>
            
            <ul>
                <li><span class="hobby">Dogs: I walk them.</span></li>
                <li><span class="hobby">Games: I play them.</span></li>
                <li><span class="hobby">Weights: I lift them.</span></li>
                <li><span class="hobby">Ladies: I slay them ;)</span></li>
            </ul>
            
        </div>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            
            <figure>
                <img src="img/csumb_logo.png" alt="CSUMB Logo" width="25" heigth="25">
            </figure>
            
            CST336 internet Programming. 2020&copy; Janes <br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            It is used for academic purposes only.
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>