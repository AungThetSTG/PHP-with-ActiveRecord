
<?php if(isset($_REQUEST['message'])): ?>
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
        <?php if($_REQUEST['status']): ?>
          <div class="alert alert-success" role="alert">
            <?= $_REQUEST['message'] ?>
          </div>
        <?php else: ?>
          <div class="alert alert-danger" role="alert">
            <?= $_REQUEST['message'] ?>
          </div>
        <?php endif ?>
    </div>
  </div>
<?php endif ?>

<form action="" method="POST">
    <div class="form-group">
      <label for="name">Name </label>
      <input type="text" name="name" class="form-control" id="name" 
        placeholder="Name" value="<?= old('name')?>" >
      <span style='color: red;'><?= is_error($user, 'name') ?></span>
    </div>
    <div class="form-group">
      <label for="age">Age </label>
      <input type="number" name="age" class="form-control" id="age" 
        placeholder="Age" value="<?= old('age')?>" >
      <span style='color: red;'><?= is_error($user, 'age') ?></span>
    </div>
    <div class="form-group">
      <label for="job">Job </label>
      <input type="text" name="job" class="form-control" id="job" 
      placeholder="Occupation" value="<?= old('job') ?>" >
      <span style='color: red;'><?= is_error($user, 'job') ?></span>      
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      <span style='color: red;'><?= is_error($user, 'password') ?></span>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
