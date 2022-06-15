<?php require APPROOT . '/views/includes/admin_header.php' ?>
			
			<div class="main-content">
                <form action="<?php echo URLROOT ?>/admins/create" method="post">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Title">
                    <label for="author">Author</label>
                    <input type="text" name="author" placeholder="Author">
                    <label for="Description">Description</label>
                    <textarea name="description" cols="30" rows="10"></textarea>
                    <button type="submit">POST</button>
                </form>
			</div>
					
				

        </div>
    </div>


