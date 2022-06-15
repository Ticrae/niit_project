<?php require APPROOT . '/views/includes/admin_header.php' ?>

<div class="row ">
                        <div class="col-lg-7 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">ARTICLES</h4>
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