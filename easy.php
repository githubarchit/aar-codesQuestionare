

    <div class="container easy-container">
        <form id="form" method="GET" action="index.php">
            <div class="container question-container ">
                <label for="q-1"><div class="question"><strong>1.</strong>This is the question 1 will come</div></label>
                <br>
                <input type="radio" id="a" name="q-1" value="a" required>
                <label for="html">a</label><br>
                <input type="radio" id="b" name="q-1" value="b">
                <label for="css">b</label><br>
                <input type="radio" id="c" name="q-1" value="c">
                <label for="javascript">c</label><br>
                <input type="radio" id="d" name="q-1" value="d">
                <label for="d">d</label>
            </div>
            <div class="container question-container ">
                <label for="q-2"><div class="question"><strong>2.</strong>This is the question 2 will come</div></label>
                <br>
                <input type="radio" id="a" name="q-2" value="a" required>
                <label for="html">a</label><br>
                <input type="radio" id="b" name="q-2" value="b">
                <label for="css">b</label><br>
                <input type="radio" id="c" name="q-2" value="c">
                <label for="javascript">c</label><br>
                <input type="radio" id="d" name="q-2" value="d">
                <label for="d">d</label>
            </div>
            <div class="container question-container ">
                <label for="q-3"><div class="question"><strong>3.</strong>This is the question 3 will come</div></label>
                <br>
                <input type="radio" id="a" name="q-3" value="a" required>
                <label for="html">a</label><br>
                <input type="radio" id="b" name="q-3" value="b">
                <label for="css">b</label><br>
                <input type="radio" id="c" name="q-3" value="c">
                <label for="javascript">c</label><br>
                <input type="radio" id="d" name="q-3" value="d">
                <label for="d">d</label>
            </div>
            <div class="container question-container ">
                <label for="q-4"><div class="question"><strong>4.</strong>This is the question 4 will come</div></label>
                <br>
                <input type="radio" id="a" name="q-4" value="a" required>
                <label for="html">a</label><br>
                <input type="radio" id="b" name="q-4" value="b">
                <label for="css">b</label><br>
                <input type="radio" id="c" name="q-4" value="c">
                <label for="javascript">c</label><br>
                <input type="radio" id="d" name="q-4" value="d">
                <label for="d">d</label>
            </div>
            <div class="container question-container ">
                <label for="q-5"><div class="question"><strong>5.</strong>This is the question 5 will come</div></label>
                <br>
                <input type="radio" id="a" name="q-5" value="a" required>
                <label for="html">a</label><br>
                <input type="radio" id="b" name="q-5" value="b">
                <label for="css">b</label><br>
                <input type="radio" id="c" name="q-5" value="c">
                <label for="javascript">c</label><br>
                <input type="radio" id="d" name="q-5" value="d">
                <label for="d">d</label>
            </div>
            
            <input type="submit" class="btn btn-lg btn-danger" value="submit" name="button1">
           

        </form>
   </div>




    <!-- php for form starts here -->
    <?php

       if(isset($_GET['button1'])) {
        $marks=0;
        $q1=$_GET['q-1'];
        $q2=$_GET['q-2'];
        $q3=$_GET['q-3'];
        $q4=$_GET['q-4'];
        $q5=$_GET['q-5'];
           echo $q1;
           echo $q2;
           echo $q3;
           echo $q4;
           echo $q5;
            if($q1=='a'){
                $marks++;
            }
            if($q2=='a'){
                $marks++;
            }
            if($q3=='a'){
               $marks++;
            }
            if($q4=='a'){
                $marks++;
            }
            if($q5=='a'){
                $marks++;
            }
            echo $marks;    
                echo "<script>alert('Hooray you scored ";    
                echo $marks;
                echo "')</script>";   
       }
    ?>
    <!-- php for the form ends here -->

       
   
    