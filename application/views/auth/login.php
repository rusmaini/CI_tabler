		  
		  <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="<?=base_url()?>assets/brand/tabler.svg" class="h-6" alt="">
              </div>
              <?=form_open('auth/login',array('class'=>'card')); ?>
                <div class="card-body p-6">
                  <div class="card-title">Login to your account</div>
                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" value="<?=set_value('email')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <?= form_error('email'); ?>
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Password
                      <a href="<?=base_url()?>auth/lupa" class="float-right small">I forgot password</a>
                    </label>
                    <input type="password" name="password" value="<?=set_value('password')?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <?= form_error('password'); ?>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Remember me</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>
                </div>
              <?=form_close(); ?>
              <div class="text-center text-muted">
                Don't have account yet? <a href="<?=base_url()?>register">Sign up</a>
              </div>
            </div>
          </div>
          
          
        