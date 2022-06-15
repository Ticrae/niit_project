<?php require APPROOT . '/views/includes/admin_header.php' ?>
    <form action="<?php echo URLROOT ?>/admins/update/<?php echo $data['post']->id ?>" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title" value="<?php echo $data['post']->title ?>">
        <label for="author">Author</label>
        <input type="text" name="author" placeholder="Author" value="<?php echo $data['post']->author ?>">
        <label for="Description">Description</label>
        <textarea name="description" cols="30" rows="10"><?php echo $data['post']->description ?></textarea>
        <button type="submit">POST</button>
    </form>
