<!DOCTYPE>
<HTML>
<HEAD>
    <LINK REL="STYLESHEET" HREF="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <LINK REL="STYLESHEET" HREF="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <TITLE>WEBDEVT GPA HW BY SAMUEL NARBUADA</TITLE>
</HEAD>
<BODY>
<?PHP
    IF (isset($_POST['SUBMIT']))
    {
        $NAME = $_POST['NAME'];
        $FGE1 = $_POST['FGE1'];
        $FGE2 = $_POST['FGE2'];
        $FGE3 = $_POST['FGE3'];
        $FGE4 = $_POST['FGE4'];
        $FGE5 = $_POST['FGE5'];
        $FGE6 = $_POST['FGE6'];
        $AVG = ($FGE1+$FGE2+$FGE3+$FGE4+$FGE5+$FGE6)/6;
        $GPA = 0;
        IF ($AVG>=97){
            $GPA=4.0;
        }
        IF ($AVG<=96&&$AVG>=93){
            $GPA=3.5;
        }
        IF ($AVG<=92&&$AVG>=89){
            $GPA=3.0;
        }
        IF ($AVG<=88&&$AVG>=85){
            $GPA=2.5;
        }
        IF ($AVG<=84&&$AVG>=80){
            $GPA=2.0;
        }
        IF ($AVG<=79&&$AVG>=75){
            $GPA=1.5;
        }
        IF ($AVG<=74&&$AVG>=70){
            $GPA=1.0;
        }
        IF ($AVG<70){
            $GPA=0.0;
        }
    }
?>
    <DIV CLASS="CONTAINER">
        <H1>CALCULATE YOUR GRADE BY <A HREF="https://github.com/narbuadas">SAMUEL NARBUADA</A></H1>
        <DIV CLASS="ROW">
            <FORM ACTION="index.php" METHOD="POST">
                <DIV CLASS="FORM-GROUP">
                <LABEL>STUDENT NAME</LABEL>
                <INPUT TYPE="TEXT" CLASS="FORM-CONTROL" NAME="NAME" REQUIRED />
                </DIV>
                <DIV CLASS="FORM-GROUP">
                <LABEL>1ST SUBJECT GRADE (FGE)</LABEL>
                <INPUT TYPE="NUMBER" CLASS="FORM-CONTROL" NAME="FGE1" REQUIRED />
                </DIV>
                <DIV CLASS="FORM-GROUP">
                <LABEL>2ND SUBJECT GRADE (FGE)</LABEL>
                <INPUT TYPE="NUMBER" CLASS="FORM-CONTROL" NAME="FGE2" REQUIRED />
                </DIV>
                <DIV CLASS="FORM-GROUP">
                <LABEL>3RD SUBJECT GRADE (FGE)</LABEL>
                <INPUT TYPE="NUMBER" CLASS="FORM-CONTROL" NAME="FGE3" REQUIRED />
                </DIV>
                <DIV CLASS="FORM-GROUP">
                <LABEL>4TH SUBJECT GRADE (FGE)</LABEL>
                <INPUT TYPE="NUMBER" CLASS="FORM-CONTROL" NAME="FGE4" REQUIRED />
                </DIV>
                <DIV CLASS="FORM-GROUP">
                <LABEL>5TH SUBJECT GRADE (FGE)</LABEL>
                <INPUT TYPE="NUMBER" CLASS="FORM-CONTROL" NAME="FGE5" REQUIRED />
                </DIV>
                <DIV CLASS="FORM-GROUP">
                <LABEL>6TH SUBJECT GRADE (FGE)</LABEL>
                <INPUT TYPE="NUMBER" CLASS="FORM-CONTROL" NAME="FGE6" REQUIRED />
                </DIV>
                <DIV CLASS="FORM-GROUP">
                <BUTTON NAME="SUBMIT" CLASS="BTN BTN-SUCCESS">
                CALCULATE
                </BUTTON>
                </DIV>
            </FORM>
            <DIV CLASS="COL PX-MD-5">
            <DIV CLASS="P-3 BORDER BG-LIGHT">
            <?PHP
            IF (isset($_POST['SUBMIT'])){
                ECHO "Your name is " . $NAME . ". <BR/>"
                . "Your 1st Subject Grade is " . $FGE1 . ". <BR/>"
                . "Your 2nd Subject Grade is " . $FGE2 . ". <BR/>"
                . "Your 3rd Subject Grade is " . $FGE3 . ". <BR/>"
                . "Your 4th Subject Grade is " . $FGE4 . ". <BR/>"
                . "Your 5th Subject Grade is " . $FGE5 . ". <BR/>"
                . "Your 6th Subject Grade is " . $FGE6 . ". <BR/>"
                . "Your GPA is " . $GPA . ".";
            }
            ?>
            </DIV>
            </DIV>
        </DIV>
    </DIV>
</BODY>
</HTML>
