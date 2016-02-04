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
    <main class="container">
      <h1>The Russian Blues Kitten Application</h1>
      <p>The whole form MUST be filled out to be consider for a kitten.</p>
      <form action="index.html" method="post">
          <div class="row">
          <section class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label for="first_name">First Name:</label>
            <input class="form-control" type="text" name="first_name" placeholder="First Name">
          </section>
          <section class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label for="last_name">Last Name:</label>
            <input class="form-control" type="text" name="last_name" placeholder="Last Name">
          </section>
         </div><!-- End of Row -->
         <section class="form-group">
           <label for="phone">Phone Number:</label>
           <input class="form-control" type="tel" name="phone" placeholder="Phone Number (eg. 555-555-5555)">
         </section>
         <section class="form-group">
           <label for="email">Email Address:</label>
           <input class="form-control" type="email" name="email" placeholder="Email">
         </section>
         <section class="form-group">
           <label for="question1">Including yourself please list all family member and their ages.</label>
           <input class="form-control" type="textarea" name="question1" placeholder="Including yourself please list all family member and their ages.">
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
