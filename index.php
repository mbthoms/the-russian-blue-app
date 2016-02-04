<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Russian Blues Kitten Application</title>
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <main class="container well well-background">
      <h1 class="header-title">The Russian Blues Kitten Application</h1>
      <p>The whole form <strong>MUST</strong> be filled out to be consider for a kitten.</p>
      <!-- The app form -->
      <form action="index.html" method="post">
          <div class="row">

            <!-- First Name -->
          <section class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label for="first_name">First Name:</label>
            <input class="form-control" type="text" name="first_name" placeholder="First Name">
          </section>

          <!-- Last Name -->
          <section class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label for="last_name">Last Name:</label>
            <input class="form-control" type="text" name="last_name" placeholder="Last Name">
          </section>
         </div><!-- End of Row -->

         <!-- Phone number -->
         <section class="form-group">
           <label for="phone">Phone Number:</label>
           <input class="form-control" type="tel" name="phone" placeholder="Phone Number (eg. 555-555-5555)">
         </section>

         <!-- Email -->
         <section class="form-group">
           <label for="email">Email Address:</label>
           <input class="form-control" type="email" name="email" placeholder="Email">
         </section>

         <!-- Question 1 -->
         <section class="form-group">
            <label for="question1">Including yourself please list all family member and their ages.</label>
            <textarea class="form-control" type="textarea" name="question1"></textarea>
          </section>

          <!-- Question 2 -->
         <section class="form-group">
           <label for="question2">Home:</label>
           <br />
           <input type="radio" name="question2" value="own"> Own<br>
           <input type="radio" name="question2" value="rent"> Rent
         </section>

         <!-- Question 3 -->
         <section class="form-group">
           <label for="question3">If renting do you have permission from your landlord to have a pet?</label>
           <br />
           <input type="radio" name="question3" value="yes"> Yes<br>
           <input type="radio" name="question3" value="no"> No
         </section>

         <!-- Question 4 -->
         <section class="form-group">
           <label for="question4">Does anyone in your family have allergies?</label>
           <br />
           <input type="radio" name="question4" value="yes"> Yes<br>
           <input type="radio" name="question4" value="no"> No
         </section>

         <!-- Question 5 -->
         <section class="form-group">
           <label for="question5">Will this kitten be kept as indoor only?</label>
           <br />
           <input type="radio" name="question5" value="yes"> Yes<br>
           <input type="radio" name="question5" value="no"> No
         </section>

         <!-- Question 6 -->
         <section class="form-group">
           <label for="question6">Which sex do you prefer?</label>
           <br />
           <input type="radio" name="question5" value="male"> Male<br>
           <input type="radio" name="question5" value="female"> Female
         </section>

         <!-- Question 7 -->
         <section class="form-group">
            <label for="question7">List any other animals in the home.</label>
            <textarea class="form-control" type="textarea" name="question7"></textarea>
          </section>

          <!-- Question 8 -->
          <section class="form-group">
             <label for="question8"> How many hours a day on average will the kitten be left alone?</label>
             <textarea class="form-control" type="textarea" name="question8"></textarea>
           </section>

           <!-- Question 9 -->
           <section class="form-group">
             <label for="question9">Have you read our contract/health guarantee?</label>
             <br />
             <input type="radio" name="question9" value="yes"> Yes<br>
             <input type="radio" name="question9" value="no"> No
           </section>

           <!-- Question 10 -->
           <section class="form-group">
             <label for="question6">Are you willing to abide by the Contract/health guarantee?</label>
             <br />
             <input type="radio" name="question10" value="yes"> Yes<br>
             <input type="radio" name="question10" value="no"> No
           </section>

           <!-- Question 11 -->
           <section class="form-group">
             <label for="question6">Have you ever relinquished an animal to the pound or animal shelter?</label>
             <br />
             <input type="radio" name="question11" value="yes"> Yes<br>
             <input type="radio" name="question11" value="no"> No
           </section>

           <!-- Question 12 -->
           <section class="form-group">
              <label for="question12">Please tell us any other information that you feel may be helpful in the approval process of your application.</label>
              <textarea class="form-control" type="textarea" name="question12"></textarea>
            </section>

            <!-- Submit Button -->
            <section>
              <input class="btn btn-success btn-lg" type="submit" name="submit" value="Submit Application">
            </section>
      </form>

      <aside class="text-center">
        <!-- back to homepage link -->
        <a href="http://therussianblues.com">Back to Russian Blues Home Page</a>
      </aside>
    </main>
    <footer>
            Copyright &copy;
            <!--Looking up current year and displaying it.-->
            <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>
            <a href="http://therussianblues.com">The Russain Blues</a>
        </footer>
  </body>

  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
