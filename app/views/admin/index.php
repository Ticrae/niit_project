<?php require APPROOT . '/views/includes/admin_header.php' ?>
			<div class="main-content">
			
			<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Posts</strong></p>
                                    <h3 class="card-title"><?php echo sizeof($data['posts']) ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">shopping_cart</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Subscribers</strong></p>
                                    <h3 class="card-title"><?php echo sizeof($data['users']) ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
					
					
					<div class="row ">
                        <div class="col-lg-7 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Articles</h4>
                                    <p class="category">Lists</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>ID</th>
                                            <th>Author</th>
                                            <th>Title</th>
                                        </tr></thead>
                                        <?php foreach($data['posts'] as $post): ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $post->id ?></td>
                                                <td><?php echo $post->author ?></td>
                                                <td><?php echo $post->title ?></td>
                                                <td><a class="btn edit" href="<?php echo URLROOT ?>/admins/update/<?php echo $post->id ?>">Edit</a></td>
                                                <td><form action="<?php echo URLROOT ?>/admins/delete/<?php echo $post->id ?>" method="post">
                                                        <button class="btn delete" type="submit">Delete</button>
                                                    </form>  </td>   
                </div>
                                            </tr>
                                        </tbody>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row ">
                        <div class="col-lg-7 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Registered Users</h4>
                                    <p class="category">Lists</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr></thead>
                                        <?php foreach($data['users'] as $users): ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $users->id ?></td>
                                                <td><?php echo $users->username ?></td>
                                                <td><?php echo $users->email ?></td> 
                            </div>
                                            </tr>
                                        </tbody>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
						
					<footer class="footer">
                <div class="container-fluid">
				  <div class="row">
				  <div class="col-md-6">
                    <nav class="d-flex">
                        <ul class="m-0 p-0">
                            <li>
                                <a href="<?php echo URLROOT ?>">
                                    Home
                                </a>
                            </li>
                        </ul>
                    </nav>
                   
                </div>
				<div class="col-md-6">
				 <p class="copyright d-flex justify-content-end"> &copy 2021 Design by Ukobo Utibe
          </p>
				</div>
				  </div>
				    </div>
            </footer>
					
					</div>
					
				

        </div>
    </div>






	
  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });


     
           
       
</script>
  



</body>
</html>



 <!-- <section class="container">
   
    <a class="btn new" href="<?php echo URLROOT ?>/admins/create">Create post</a>
    <?php foreach($data['posts'] as $post): ?>
        <article class="post">
            <div class="post-details">
                <a class="title" href="<?php echo URLROOT ?>/admins/viewmore/<?php echo $post->id ?>"><?php echo $post->title ?></a>
                <p class="author"><?php echo $post->author ?></p>
                <p class="date"><?php echo date('D dS M Y', strtotime($post->date)) ?></p>
            </div>
            <div class="action">
                <a class="btn edit" href="<?php echo URLROOT ?>/admins/update/<?php echo $post->id ?>">Edit</a>

                <form action="<?php echo URLROOT ?>/admins/delete/<?php echo $post->id ?>" method="post">
                    <button class="btn delete" type="submit">Delete</button>
                </form>     
            </div>
        </article>

    <?php endforeach ?>
    </section> -->