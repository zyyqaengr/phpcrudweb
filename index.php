<?php require ('includes/header.php'); ?>
<?php Create() ?>



<body>

    <header>

        <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark secondary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php">CRUD Project</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">

            <li class="nav-item ">
                <a class="nav-link" href="#create">Create
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="#read">Read
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="#update">Update
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="#delete">Delete
                    <span class="sr-only">(current)</span>
                </a>
            </li>
                    

        </ul>
        <!-- Links -->

       <!--  <form class="form-inline">
            <div class="md-form mt-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div> -->
    <!-- Collapsible content -->
</nav>
<!--/.Navbar-->

    <!-- overlay -->
    <div class="view" id="intro">
    <div class="container-fluid mask flex-center rgba-white-light d-flex align-items-center justify-content-center"> </div>
    <br><br> <br><br><br>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 text-center">
            
 <h5 class="display-4 black-text mb-2">The CRUD Project</h5>

    <hr class="hr-light">

    <h4 class="black-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et</h4>

    <button type="button" class="btn btn-secondary">Read More...</button>


        </div>


    </div>
   
    
</div>
        
    </header>
<br> <br> <br>
    <main>
        <div class="container">

            <section id="create" class="text-center"> <!-- create -->
                

                <div class="row">
                    <div class="offset-md-4 col-md-4">


                        <form method="post" action="">
                           <p class="h4 text-center mb-4">Create</p>
                            <div class="md-form form-sm">
                                 <!-- <i class="fa fa-user prefix grey-text mr-3"></i> -->
                                <input type="text" class="form-control" name="firstname" id="firstname">
                                <label for="firstname">Firstname</label>
                            </div>

                            <div class="md-form form-sm">
                                <input type="text" name="lastname" id="lastname" class="form-control">
                                <label for="lastname">Lastname</label>                           
                            </div>

                            <div class="md-form form-sm">
                                <input type="email" name="email" id="email" class="form-control">
                                <label for="email">Email</label>
                            </div>


                            
                            <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary mt-4" data-toggle="modal" data-target="#submitModal">
                        Submit
                    </button>


                    <?php include ('includes/modal.php'); ?>
                 

                        </form>                      
                    </div>
                </div>




            </section>

             <section id="read" class="text-center mt-5"> <!-- read -->

                   
               
                <div class="row">
                    <div class="offset-1 col-md-10">
                        <p class="h4 text-center mb-4">Read</p>
                        <table class="table table-hover mt-4 table-striped">
                            
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>Date Registered</th>
                                </tr>
                            </thead>


 <?php 


        $read = "SELECT * FROM users ORDER BY id DESC LIMIT 5";
        $read_query = mysqli_query($connection,$read);

        while( $readresults = mysqli_fetch_array($read_query)) {
            $firstname = $readresults['firstname'];
            $lastname = $readresults['lastname'];
            $email = $readresults['email'];
            $date = $readresults['date_created']
        





                     ?>

                            <tbody>
                                <tr>
                                    <td> <?php echo $firstname; ?></td>
                                    <td><?php echo $lastname ?></td>
                                    <td><?php echo $email ?></td>
                                    <td> <button class="btn btn-primary" data-toggle="modal" data-target="#updateModal">Update</button></td>
                                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button></td>
                                    <td><?php echo "$date"; ?></td>
                                </tr>
                                 


                                 <?php } ?>

                            </tbody>




                        </table>
                        
                    </div>
                </div>
                
                    
                

            </section>

             <section>

            </section>

             <section>

            </section>
            




        </div>      
    </main>

    <footer>
        

    </footer>

<br> <br> <br>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
