<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include_once './parts/header.php'; ?>

<body>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" data--h-bstatus="0OBSERVED">
        <div class="col-md-5 p-lg-5 mx-auto " data--h-bstatus="0OBSERVED">
        <img src="./images/photo.jpg" alt="">   
        <h1 class="display-4 fw-normal" data--h-bstatus="0OBSERVED">اكسب مع وائل</h1>
            <!-- <p class="lead fw-normal" data--h-bstatus="0OBSERVED">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p> -->
            <h2 id="count-down"></h2>
        </div>
        <div class="product-device shadow-sm d-none d-md-block" data--h-bstatus="0OBSERVED"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block" data--h-bstatus="0OBSERVED"></div>
        <div class="container">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>
        
    </div>

    <div class="container">

        <div class="position-relative text-center" data--h-bstatus="0OBSERVED">
            <div class="col-md-5 p-lg-5 mx-auto my-5" data--h-bstatus="0OBSERVED">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <h2>Enter Your Information</h2>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo htmlspecialchars($firstname) ?>">
                        <div class="form-text error"><?php echo $errors['firstnameerror'] ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo htmlspecialchars($lastname) ?>">
                        <div class="form-text error"><?php echo $errors['lastnameerror']; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="<?php echo htmlspecialchars($email) ?>">
                        <div class="form-text error"><?php echo $errors['emailerror']; ?></div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="loader-con">
            <div id="loader">
                <canvas id="circularLoader" width="200" height="200"></canvas>
            </div>
        </div>
        <!-- Button trigger modal -->
        <div class="d-grid gap-2 col-6 mx-auto my-5">

            <button type="button" id="winner" class="btn btn-primary">
                اختيار الرابح
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">the winner is:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php foreach ($users as $user): ?>
                            <h1 class="display-4 text-center modal-title"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']); ?></h1>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- </div>
    <form action="index.php" method="post">
        <input type="text" name="firstname" id="firstname" placeholder="First Name">
        <input type="text" name="lastname" id="lastname" placeholder="Last Name">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="submit" name="submit" value="send">
    </form> -->
        <div id="card" class="row mb-5 pb-5">

            <div class="col-sm-6">
                <div class="card my-2 bg-light">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
                    </div>
                </div>
            </div>

        </div>
        <?php include_once './parts/footer.php'; ?>